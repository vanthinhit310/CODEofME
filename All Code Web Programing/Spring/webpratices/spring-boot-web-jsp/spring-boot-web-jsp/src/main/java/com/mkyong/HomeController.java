package com.mkyong;

import com.mkyong.model.MdbProduct;
import com.mkyong.model.ProductInCart;
import com.mkyong.service.MdbProductService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestParam;

import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpSession;
import java.util.List;

@Controller
public class HomeController {
    @Autowired
    MdbProductService mdbProductService;

    @RequestMapping(value = "/")
    public String Index(Model model, HttpServletRequest request, HttpSession session) {
        request.setAttribute("dsTatCaSP", mdbProductService.getTatCaSanPhamTrongDB());
        if (request.getParameter("page") == null) {
            request.setAttribute("page", 1);
            model.addAttribute("dsPagination", mdbProductService.phantrangSanPham(0, 9));
        } else {
            request.setAttribute("page", Integer.parseInt(request.getParameter("page")));
            model.addAttribute("dsPagination", mdbProductService.phantrangSanPham((Integer.parseInt(request.getParameter("page")) - 1) * 9, 9));
        }
        session.setAttribute("url", "/");
        return "index";
    }

    @RequestMapping(value = "/cart_page")
    public String Cart(HttpSession session, Model model) {
        model.addAttribute("dsSanPhamTrongGioHang", session.getAttribute("cart"));
        model.addAttribute("tongSoTien", session.getAttribute("total"));
        return "cart";
    }

    @RequestMapping(value = "/changepassword_page")
    public String Changepassword() {
        return "changepassword";
    }

    @RequestMapping(value = "/checkmail_page")
    public String Checkmail() {
        return "checkmail";
    }

    @RequestMapping(value = "/forgotpassword_page")
    public String Forgotpass() {
        return "forgotpassword";
    }

    @RequestMapping(value = "/login_page")
    public String Login(HttpSession session) {
        if (session.getAttribute("user") != null) {
            return "redirect:/";
        }
        return "login";
    }

    @RequestMapping(value = "/orderdone_page")
    public String Orderdone(Model model, HttpSession session) {
        model.addAttribute("DonHang", session.getAttribute("motDonHang"));
        return "orderdone";
    }

    @RequestMapping(value = "/product-details_page")
    public String Product(Model model, @RequestParam(value = "productid") String id) {
        model.addAttribute("motSanPham", mdbProductService.getMotSanPhamDuaVaoMaSP(id));
        return "product-details";
    }

    @RequestMapping(value = "/resetpassword_page")
    public String Resetpassword(Model model, HttpServletRequest request) {
        model.addAttribute("email", request.getParameter("email"));
        return "resetpassword";
    }

    @RequestMapping(value = "/search_page")
    public String Search(HttpServletRequest request, HttpSession session) {
        String key = request.getParameter("key");
        if (request.getParameter("key") != null) {
            session.setAttribute("key", request.getParameter("key"));
        }
        if (request.getParameter("page") == null) {
            request.setAttribute("page", 1);
            session.setAttribute("dsSanPhamTimKiem", mdbProductService.searchProduct(key));
            session.setAttribute("dsSanPhamTimDuocDaPhanTrang", mdbProductService.searchPaginate(key, 0, 4));
        } else {
            String key1 = (String) session.getAttribute("key");
            request.setAttribute("page", Integer.parseInt(request.getParameter("page")));
            session.setAttribute("dsSanPhamTimKiem", mdbProductService.searchProduct(key1));
            List<MdbProduct> dsSanPhamTimKiemDaPhanTrang = mdbProductService.searchPaginate(key1, (Integer.parseInt(request.getParameter("page")) - 1) * 4, 4);
            session.setAttribute("dsSanPhamTimDuocDaPhanTrang", dsSanPhamTimKiemDaPhanTrang);
        }
        session.setAttribute("url", "/search_page?key=" + session.getAttribute("key") + "&page=" + request.getAttribute("page"));
        return "search";
    }

    @RequestMapping(value = "/successregister_page")
    public String SuccessRes() {
        return "successregister";
    }

    @RequestMapping(value = "/payment_page")
    public String Payment(Model model, HttpSession session) {
        List<ProductInCart> cart = (List<ProductInCart>) session.getAttribute("cart");
        model.addAttribute("tongSL", mdbProductService.getAllCountOfProduct(cart));
        model.addAttribute("tonggia", mdbProductService.getTotal(cart));
        return "thanhtoan";
    }

    @RequestMapping(value = "/updated_page")
    public String Updated() {
        return "/updated";
    }

    @RequestMapping(value = "/active_page")
    public String Active() {
        return "activenow";
    }

    @RequestMapping(value = "/activated_page")
    public String Activated() {
        return "activated";
    }
}

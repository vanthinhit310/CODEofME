package com.mkyong.controller;

import com.mkyong.model.MdbProduct;
import com.mkyong.model.ProductInCart;
import com.mkyong.service.MdbProductService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestParam;

import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpSession;
import java.util.List;

@Controller
@RequestMapping(value = "/CartController")
public class CartController {

    @Autowired
    MdbProductService mdbProductService;

    @RequestMapping(value = "/addtocart")
    public String AddtoCart(HttpSession session, @RequestParam(value = "id") String id) {
        //Lay gio hang ra
        List<ProductInCart> cart = (List<ProductInCart>) session.getAttribute("cart");
        MdbProduct motSanPham = mdbProductService.getMotSanPhamDuaVaoMaSP(id);
        ProductInCart productInCart = mdbProductService.getOneProductInCart(cart, id);
        if (productInCart == null) {
            cart.add(new ProductInCart(motSanPham, 1));
        } else {
            productInCart.setCount(productInCart.getCount() + 1);
        }
        session.setAttribute("cart", cart);
        String url = (String) session.getAttribute("url");
        session.setAttribute("total", mdbProductService.getTotal(cart));
        return "redirect:"+url;
    }

    @RequestMapping(value = "/updatequantity")
    public String Updatequantity(HttpServletRequest request, HttpSession session) {
        String id = request.getParameter("productid");
        System.out.println("masp" + id);
        int newQuantity = Integer.parseInt(request.getParameter("quantity"));
        List<ProductInCart> cart = (List<ProductInCart>) session.getAttribute("cart");
        for (ProductInCart ds : cart) {
            if (ds.getMdbProduct().getId().equals(id)) {
                ds.setCount(newQuantity);
                break;
            }
        }
        session.setAttribute("total", mdbProductService.getTotal(cart));
        return "redirect:/cart_page";
    }

    @RequestMapping(value = "/xoasanpham")
    public String Xoasanpham(HttpSession session, @RequestParam(value = "productid") String id) {
        List<ProductInCart> cart = (List<ProductInCart>) session.getAttribute("cart");
        mdbProductService.removeProductInCart(cart, id);
        session.setAttribute("total", mdbProductService.getTotal(cart));
        return "redirect:/cart_page";
    }
    @RequestMapping(value = "/thanhtoan")
    public String Thanhtoan(){
        return "redirect:/payment_page";
    }

}

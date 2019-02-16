package com.controller;

import com.service.SanphamService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.ResponseBody;

import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpSession;
import java.util.*;

@Controller
@RequestMapping(value = "/")
public class HomeController {
    @Autowired
    SanphamService sanphamService;
    /**
     * Lưu ý khi đặt tên các value của RequestMapping : nếu RequestMapping đó trả về một
     * trang JSP nào đó thì ta nên thêm chữ _page vào sau tên  của value đó để phân biệt
     * với các mapping bên Controller.
     *
     *
     * Lưu ý 2: Khi tạo model tự động : Nếu các bảng có khóa ngoại thì cần phải implements Serializable
     * và phải set updatetable = false, insert table = false trong trường johncolum của bảng cha;
     * Đặt Annotationo @Table cho các class trong model(name="ten_bang", scheme = "ten_db");
     *
     **/

    /**
     * Chức năng phân trang và hiển thị sản phẩm:
     * Đầu tiên chúng ta cần gửi về JSP một danh sách tất cả các sản phẩm trong cơ sở dữ liệu
     * để có thể tính được số trang.
     * Bên controllelr : Nếu getParameter về  == null có nghĩa là người dùng chưa chọn trang nào
     * thì số trang sẽ bắt đầu là 1.
     * Ngược lại nếu người dùng chọn một trang nào đó thì số trang sẽ = request.getParameter("page").
     * Gọi hàm pagination trả về một danh sách các sản phẩm đã được phân trang
     * Gửi danh sách đó sang bên JSP để hiển thị.
     **/
    @RequestMapping(value = "/")
    public String Index(HttpSession session, HttpServletRequest request) {
        request.setAttribute("dsSanpham", sanphamService.getAllSanpham());
        if (request.getParameter("page") == null){
            request.setAttribute("page", 1);
            request.setAttribute("dsPagination", sanphamService.pagination(0,6));
        }else{
            request.setAttribute("page",Integer.parseInt(request.getParameter("page")));
            request.setAttribute("dsPagination", sanphamService.pagination((Integer.parseInt(request.getParameter("page"))-1)*6,6));
        }
        return "index";
    }
    /**
     * Nếu người dùng chưa đăng nhập thì vẫn cho họ vào trang đăng nhập bình thường
     * Còn nếu họ đã đăng nhập rồi thì không thể vào trang đăng nhập nữa
     * Chỉ khi nào họ đăng xuất ra thì mới có thể vào lại trang đăng nhập bình thường.
     * **/
    @RequestMapping(value = "/login")
    public String Login(HttpSession session){
        if (session.getAttribute("thanhvien") != null) {
            return "redirect:/";
        }
        return "login";
    }
    @RequestMapping(value = "/changeyourpassword")
    public String Changeyourpassword(){
        return "changeyourpassword";
    }
    @RequestMapping(value = "/cart")
    public String Cart(){
        return "cart";
    }
    @RequestMapping(value = "/forgotpassword")
    public String Forgotpassword(){
        return "forgotpassword";
    }
    @RequestMapping(value = "/ordersuccess")
    public String Ordersuccess(){
        return "ordersuccess";
    }
    @RequestMapping(value = "/password_retrieval")
    public String Password_retrieval(){
        return "password_retrieval";
    }
    @RequestMapping(value = "/checkmail_page")
    public String checkMail_Page(){
        return "checkmail";
    }
    @RequestMapping(value = "/payment")
    public String Payment(){
        return "payment";
    }
    @RequestMapping(value = "/registersuccess")
    public String Registersuccess(){
        return "registersuccess";
    }
    @RequestMapping(value = "/search")
    public String Search(){
        return "search";
    }
    @RequestMapping(value = "/updatesuccess")
    public String Updatesuccess(){
        return "updatesuccess";
    }

    /**
     * Hiển thị chi tiết sản phẩm: Muốn hiển thị chi tiết của một sản phẩm nào đó
     * ta cần lấy sản phẩm đó ra dựa vào mã của nó sau đó gửi sản phẩm đó về trang JSP
     * để hiển thị thông tin cho người dùng xem.
     * */
    @RequestMapping(value = "/product_details")
    public String Product_details(HttpServletRequest request, @RequestParam(value = "masp") String masp){
        request.setAttribute("motSanpham", sanphamService.getOneSanpham(masp));
        return "product_details";
    }

}

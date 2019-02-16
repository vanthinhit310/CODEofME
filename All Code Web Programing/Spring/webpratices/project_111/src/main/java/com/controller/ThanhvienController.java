package com.controller;

import com.Util.SendEmail;
import com.Util.mD5;
import com.model.Thanhvien;
import com.service.SanphamService;
import com.service.ThanhvienService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.ResponseBody;

import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpSession;
import java.io.UnsupportedEncodingException;
import java.text.SimpleDateFormat;
import java.util.Date;
import java.util.List;
import java.util.stream.Collectors;

@Controller
@RequestMapping(value = "/Thanhvien")
public class ThanhvienController {
    @Autowired
    ThanhvienService thanhvienService;
    @Autowired
    SanphamService sanphamService;
    /**
     * Đăng kí thành viên mới
     * */
    @RequestMapping(value = "/dangkithanhvien")
    public String dangKiThanhVien(HttpServletRequest request) throws UnsupportedEncodingException {
        request.setCharacterEncoding("utf-8");
        String name = request.getParameter("reg_name");
        String email = request.getParameter("reg_email");
        String diachi = request.getParameter("reg_add");
        String pass = request.getParameter("reg_password");

        SimpleDateFormat formatter = new SimpleDateFormat("dd/MM/yyyy hh:mm:ss");
        long millis = System.currentTimeMillis();
        Date date = new Date(millis);

        String fdate = String.valueOf(formatter.format(date));

        Thanhvien thanhvien = new Thanhvien();
        thanhvien.setName(name);
        thanhvien.setEmail(email);
        thanhvien.setDiachi(diachi);
        thanhvien.setMatkhau(mD5.md5Encrypt(pass));
        thanhvien.setNgaytao(fdate);
        thanhvienService.addThanhvien(thanhvien);
        return "redirect: /registersuccess";
    }
    /**
     * Kiểm tra email của thành viên mới đã có trên hệ thống hay chưa bằng ajax
     * */
    @RequestMapping(value = "/kiemtraemail")
    public @ResponseBody
    String Kiemtraemail() {
        List<String> listEmail = thanhvienService.getAllThanhvien().stream().map(Thanhvien::getEmail).collect(Collectors.toList());
        return String.join("-", listEmail);
    }
    /**
     * Chức năng đăng nhập kết hợp ajax
     * Lưu ý : username, password lấy về ở đây là dựa vào keyword của JSON gửi về
     * chứ không phải lấy bằng cách getParameter như bình thường.
     * */
    @RequestMapping(value = "/dangnhap", method = RequestMethod.POST)
    public @ResponseBody
    String dangNhap(HttpSession session, @RequestParam(value = "username") String email, @RequestParam(value = "password") String password) {

        if (thanhvienService.checkLoginInfo(email, password)) {
            Thanhvien thanhvien = new Thanhvien();
            thanhvien.setEmail(email);
            thanhvien.setMatkhau(password);
            session.setAttribute("thanhvien", thanhvien);
            session.setAttribute("motthanhvien", thanhvienService.getOneThanhvien(email));
            return "ok";
        }
        return "faild";
    }
    /**
     * Chức năng đổi mật khẩu mới. Người dùng phải đăng nhập rồi thì
     * mới có thể tiến hành đổi mật khẩu
     * */
    @RequestMapping(value = "/doimatkhau")
    public String doiMatKhau(HttpServletRequest request, HttpSession session) {
        String newpassword = request.getParameter("changepassword_newpassword");
        Thanhvien thanhvien = (Thanhvien) session.getAttribute("thanhvien");
        thanhvienService.changePassword(thanhvien.getEmail(), newpassword);
        session.removeAttribute("thanhvien");
        return "redirect: /updatesuccess";
    }
    /**
     * Chức năng quên mật khẩu. Lấy lại mật khẩu dựa vào email đăng kí tài khoản
     * Lưu ý: Mỗi parametter gửi kèm URL chỉ gửi được một lần nên cần phải tạo một thẻ input ẩn
     * để lưu giá trị parameter từ Request Mapping này gửi qua để sử dụng cho Request Mapping khác.
     * */
    @RequestMapping(value = "/quenmatkhau")
    public String quenMatKhau(@RequestParam(value = "forgotpassword_email") String email) {
        SendEmail.sendMail(email,
                "Update your password!",
                "<a href=\"http://localhost:8080/password_retrieval?email=" + email + "\">" +
                        "Nhấn vào đường link này để tiến hành cập nhật lại mật khẩu của bạn</a>");
        return "redirect: /checkmail_page";
    }
    @RequestMapping(value = "/laylaimatkhau")
    public String layLaiMatKhau(HttpSession session,HttpServletRequest request, @RequestParam(value = "updatepassword_newpassword")String newpasss){
        String email = request.getParameter("email");
        System.out.println(email);
        if (thanhvienService.changePassword(email,newpasss)){
            return "redirect: /login";
        }else {
            return "redirect: /forgotpassword?err=fail";
        }
    }
    /**
     * Chức năng đăng xuất. Với chức năng này chỉ cần xóa người dùng của session hiện tại
     * */
    @RequestMapping(value = "/dangxuat")
    public String Dangxuat(HttpSession session){
        session.removeAttribute("thanhvien");
        return "redirect: /";
    }

}

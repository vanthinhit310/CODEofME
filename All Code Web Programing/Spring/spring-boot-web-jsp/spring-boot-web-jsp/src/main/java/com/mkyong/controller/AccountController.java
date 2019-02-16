package com.mkyong.controller;

import com.mkyong.model.MdbUser;
import com.mkyong.service.MdbUserService;
import com.mkyong.utils.MD5Encrypt;
import com.mkyong.utils.SendMail;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.ResponseBody;

import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpSession;
import java.util.List;
import java.util.Random;
import java.util.stream.Collectors;

@Controller
@RequestMapping(value = "Account")
public class AccountController {
    @Autowired
    MdbUserService mdbUserService;

    @RequestMapping(value = "/dangki")
    public String Dangki(HttpServletRequest request) {
        String name = request.getParameter("reg_name");
        String email = request.getParameter("reg_email");
        String password = MD5Encrypt.md5(request.getParameter("reg_password"));
        long millis = System.currentTimeMillis();
        java.sql.Date date = new java.sql.Date(millis);
        String create = String.valueOf(date);
        boolean active = false;
        MdbUser user = new MdbUser();
        user.setName(name);
        user.setEmail(email);
        user.setPassword(password);
        user.setCreatedate(create);
        user.setActive(active);
        mdbUserService.addUserToDB(user);
        SendMail.sendmail(email, "Verify your account", "<a href=\"http://localhost:8080/Account/xacnhantaikhoan?email=" + email + "\">" +
                "Tài khoản của bạn đã được tạo thành công! Vui lòng click vào liên kết này để tiến hành xác nhận tài khoản và tiếp" +
                " tục sử dụng các dịch vụ của chúng tôi!</a>");
        return "redirect:/active_page";
    }

    @RequestMapping(value = "/kiemtramail")
    public @ResponseBody
    String Kiemtramail() {
        List<String> list = mdbUserService.getAllUser().stream().map(MdbUser::getEmail).collect(Collectors.toList());
        return String.join(",", list);
    }

    @RequestMapping(value = "/dangnhap", method = RequestMethod.POST)
    public @ResponseBody
    String Dangnhap(HttpSession session, @RequestParam(value = "username") String username, @RequestParam(value = "password") String password) {
        if (mdbUserService.checkLoginInfo(username, password)) {
            MdbUser user = new MdbUser();
            user.setEmail(username);
            user.setPassword(password);
            session.setAttribute("user", user);
            session.setAttribute("account", mdbUserService.getUserByEmail(username));
            return "ok";
        }
        return "fail";
    }

    @RequestMapping(value = "/dangxuat")
    public String Dangxuat(HttpSession session) {
        session.removeAttribute("user");
        return "redirect:/";
    }

    @RequestMapping(value = "/xacnhantaikhoan")
    public String Xacnhantaikhoan(HttpServletRequest request) {
        String email = request.getParameter("email");
        mdbUserService.changeActiveByEmail(email);
        return "redirect:/activated_page";
    }

    @RequestMapping(value = "/doimatkhau")
    public @ResponseBody
    String Doimatkhau(HttpSession session, @RequestParam(value = "changepassword_newpassword") String password) {
        MdbUser user = (MdbUser) session.getAttribute("user");
        String email = user.getEmail();
        if (mdbUserService.changePasswordByEmail(email, password)) {
            session.removeAttribute("user");
            return "ok";
        } else {
            return "fail";
        }
    }

    @RequestMapping(value = "/quenmatkhau")
    public String Quenmatkhau(@RequestParam(value = "forgotpassword_email") String email) {
        String code = "";
        Random r = new Random();
        for (int i = 0; i < 6; i++) {
            code += r.nextInt(9);
        }
        mdbUserService.setCodeByEmail(email, code);
        SendMail.sendmail(email,
                "Reset your password",
                "Verify code của bạn là: " + code + " <br/>" + " Click " + " " +
                        "<a href=\"http://localhost:8080/resetpassword_page?email=" + email + "\">" +
                        " vào đây </a>để cập nhật lại mật khẩu");
        return "redirect:/checkmail_page";
    }

    @RequestMapping(value = "/capnhatmatkhau")
    public String Capnhatmatkhau(@RequestParam(value = "email") String email, @RequestParam(value = "code") String code, @RequestParam(value = "updatepassword_newpassword") String password, HttpServletRequest request) {
        MdbUser user = mdbUserService.getUserByEmail(email);
        if (user.getCodeverify().equals(code)) {
            mdbUserService.changePasswordByEmail(email, password);
        }
        return "redirect:/updated_page";
    }
}

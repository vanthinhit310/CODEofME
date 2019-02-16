package com.controller;

import com.model.Account;
import com.service.AccountService;
import com.service.ModelService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.ResponseBody;

import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpSession;
import java.util.HashMap;
import java.util.Map;

@Controller
@RequestMapping(value = "/")
public class HomeController {

    @Autowired
    AccountService accountService;

    @Autowired
    ModelService modelService;

    @RequestMapping(value = "/")
    public String Index(HttpSession session, HttpServletRequest request) {
        if (session.getAttribute("acc") == null) {
            return "redirect:/login";
        }
        request.setAttribute("ds", modelService.getAllModel());
        request.setAttribute("dspage", modelService.getAllFromAToB((Integer.parseInt(request.getParameter("page"))-1)*3,3));
        return "Index";

    }

    @RequestMapping(value = "/login")
    public String Login(HttpSession session) {
        if (session.getAttribute("acc") != null) {
            return "redirect:/";
        }
        return "login";
    }

    @RequestMapping(value = "/dangnhap", method = RequestMethod.POST)
    public @ResponseBody
    String dangNhap(HttpSession session, @RequestParam(value = "username") String username, @RequestParam(value = "password") String password) {
        if (accountService.checkUsernameAndPassword(username, password)) {
            Account account = new Account();
            account.setName(username);
            account.setPassword(password);
            session.setAttribute("acc", account);
            return "ok";
        }
        return "fail";
    }

}

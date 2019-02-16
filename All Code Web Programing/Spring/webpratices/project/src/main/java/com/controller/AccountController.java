package com.controller;

import com.Util.mD5;
import com.model.Account;
import com.service.AccountService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.ResponseBody;

import javax.servlet.http.HttpServletRequest;
import java.io.UnsupportedEncodingException;
import java.util.List;
import java.util.stream.Collectors;

@Controller
@RequestMapping(value = "/Account")
public class AccountController {
    @Autowired
    AccountService accountService;

    @RequestMapping(value ="/checkemail")
    public @ResponseBody String checkEmail(){
        List<String> listEmailExits = accountService.getAllUser().stream().map(Account::getEmail).collect(Collectors.toList());
        return String.join("-", listEmailExits);
    }

    @RequestMapping(value = "/register")
    public String Register(HttpServletRequest request) {
        String name = request.getParameter("reg_name");
        String email = request.getParameter("reg_email");
        String add = request.getParameter("reg_add");
        String password = request.getParameter("reg_password");

       /* SimpleDateFormat formatter = new SimpleDateFormat("dd/MM/yyyy hh:mm:ss");
        long millis=System.currentTimeMillis();
        Date date = new Date(millis);*/

        Account user = new Account();
        user.setName(name);
        user.setEmail(email);
        user.setAdd(add);
        user.setPassword("1");
        user.setCreatedate("6/11/2018");
        accountService.addUser(user);
        return "redirect: /registersuccess";
    }
}

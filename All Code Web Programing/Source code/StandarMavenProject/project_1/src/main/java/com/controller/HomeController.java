package com.controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.ResponseBody;

import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpSession;

@Controller
@RequestMapping(value = "/")
public class HomeController {

    @RequestMapping(value = "/")
    public String Index(HttpSession session, HttpServletRequest request) {
        return "index";
    }
    @RequestMapping(value = "/login")
    public String Login(){
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
    @RequestMapping(value = "/product_details")
    public String Product_details(){
        return "product_details";
    }

}

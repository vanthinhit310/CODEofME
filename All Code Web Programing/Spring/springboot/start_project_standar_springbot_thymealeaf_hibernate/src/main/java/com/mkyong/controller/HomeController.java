package com.mkyong.controller;


import org.springframework.stereotype.Controller;

import org.springframework.web.bind.annotation.RequestMapping;

@Controller
public class HomeController {

    @RequestMapping(value = "/")
    public String index(){
    return "index";
    }
    @RequestMapping(value = "/cart_page")
    public String cart(){
        return "cart";
    }
    @RequestMapping(value = "/changepassword_page")
    public String changepassword(){
        return "changepassword";
    }
    @RequestMapping(value = "/forgotpassword_page")
    public String forgotpassword(){
        return "forgotpassword";
    }
    @RequestMapping(value = "/login_page")
    public String login(){
        return "login";
    }
    @RequestMapping(value = "/orderdone_page")
    public String orderdone(){
        return "orderdone";
    }
    @RequestMapping(value = "/product-details_page")
    public String product_details(){
        return "product-details";
    }
    @RequestMapping(value = "/resetpassword_page")
    public String resetpassword(){
        return "resetpassword";
    }
    @RequestMapping(value = "search_page")
    public String search(){
        return "search";
    }
    @RequestMapping(value = "successupdatepassword_page")
    public String successupdatepassword(){
        return "successupdatepassword";
    }
    @RequestMapping(value = "successregister_page")
    public String successregister(){
        return "successregister";
    }
    @RequestMapping(value = "/payment_page")
    public String payment(){
        return "thanhtoan";
    }
}

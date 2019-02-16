package com.mkyong;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;

@Controller
public class HomeController {


    @GetMapping(value = "/")
    public String Index() {
        return "index";
    }

    @GetMapping(value = "/cart_page")
    public String Cart() {
        return "cart";
    }

    @GetMapping(value = "/changeyourpassword_page")
    public String Changeyourpassword() {
        return "changeyourpassword";
    }

    @GetMapping(value = "/forgotpassword_page")
    public String Forgotpassword() {
        return "forgotpassword";
    }

    @GetMapping(value = "/login_page")
    public String Login() {
        return "login";
    }

    @GetMapping(value = "/ordersuccess_page")
    public String Ordersuccess() {
        return "ordersuccess";
    }

    @GetMapping(value = "password_retrieval_page")
    public String Password_retrieval_page() {
        return "password_retrieval";
    }
    @GetMapping(value = "/payment_page")
    public String Payment(){
        return "payment";
    }
    @GetMapping(value = "/product_details_page")
    public String Product_details(){
        return "product_details";
    }
    @GetMapping(value = "/registersuccess_page")
    public String Registersucces(){
        return "registersuccess";
    }
    @GetMapping(value = "/search_page")
    public String Search(){
        return "search";
    }
    @GetMapping(value = "/updatepsuccess_page")
    public String Updatesuccess(){
        return "updatesuccess";
    }
}
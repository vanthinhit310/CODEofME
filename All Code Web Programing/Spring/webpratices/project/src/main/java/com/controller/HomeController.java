package com.controller;

import com.service.ProductService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestParam;

import javax.servlet.http.HttpServletRequest;


@Controller
@RequestMapping(value = "/")
public class HomeController {
    @Autowired
    ProductService productService;

    @RequestMapping(value = "/")
    public String Index(HttpServletRequest request) {
        request.setAttribute("dsAllProduct", productService.getAllProduct());
        if(request.getParameter("page") == null){
            request.setAttribute("page",1);
            request.setAttribute("dsPagination",productService.pagination((1-1)*6,6));
        }else {
            request.setAttribute("page",Integer.parseInt(request.getParameter("page")));
            request.setAttribute("dsPagination", productService.pagination((Integer.parseInt(request.getParameter("page"))-1)*6,6));
        }
        return "index";
    }

    @RequestMapping(value = "/login")
    public String Login() {
        return "login";
    }

    @RequestMapping(value = "/changeyourpassword")
    public String Changeyourpassword() {
        return "changeyourpassword";
    }

    @RequestMapping(value = "/cart")
    public String Cart() {
        return "cart";
    }

    @RequestMapping(value = "/forgotpassword")
    public String Forgotpassword() {
        return "forgotpassword";
    }

    @RequestMapping(value = "/ordersuccess")
    public String Ordersuccess() {
        return "ordersuccess";
    }

    @RequestMapping(value = "/password_retrieval")
    public String Password_retrieval() {
        return "password_retrieval";
    }

    @RequestMapping(value = "/payment")
    public String Payment() {
        return "payment";
    }

    @RequestMapping(value = "/registersuccess")
    public String Registersuccess() {
        return "registersuccess";
    }

    @RequestMapping(value = "/search")
    public String Search() {
        return "search";
    }

    @RequestMapping(value = "/updatesuccess")
    public String Updatesuccess() {
        return "updatesuccess";
    }

    @RequestMapping(value = "/product_details")
    public String Product_details(HttpServletRequest request, @RequestParam(value = "productid") int id) {
        request.setAttribute("oneProduct",productService.getOneProduct(id));
        return "product_details";
    }

}

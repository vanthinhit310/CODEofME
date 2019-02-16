package com.mkyong.controller;

import com.mkyong.service.SanphamService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.RequestMapping;

@Controller
public class HomeController {
    @Autowired
    SanphamService sanphamService;

    @RequestMapping(value = "/")
    public String index(Model model){
    model.addAttribute("ds",sanphamService.getTatCaSanPham());
    return "index";
    }
}

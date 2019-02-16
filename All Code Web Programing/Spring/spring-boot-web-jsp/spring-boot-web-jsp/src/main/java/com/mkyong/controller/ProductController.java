package com.mkyong.controller;

import com.mkyong.model.MdbProduct;
import com.mkyong.service.MdbProductService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestParam;

import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpSession;
import java.util.List;

@Controller
@RequestMapping(value = "Product")
public class ProductController {
    @Autowired
    MdbProductService mdbProductService;

//    @RequestMapping(value = "/timkiemsanpham")
//    public String Timkiemsanpham(@RequestParam(value = "key")String key, HttpServletRequest request, HttpSession session){
//        if (request.getParameter("page")== null){
//            session.setAttribute("page",1);
//            session.setAttribute("dsSanPhamTimKiem", mdbProductService.searchProduct(key));
//            session.setAttribute("dsSanPhamTimDuocDaPhanTrang",mdbProductService.searchPaginate(key,0,4));
//        }else {
//            session.setAttribute("page", request.getParameter("page"));
//            session.setAttribute("dsSanPhamTimKiem",mdbProductService.searchProduct(key));
//            List<MdbProduct> dsSanPhamTimKiemDaPhanTrang = mdbProductService.searchPaginate(key,(Integer.parseInt(request.getParameter("page"))-1)*4,4);
//            session.setAttribute("dsSanPhamTimDuocDaPhanTrang",dsSanPhamTimKiemDaPhanTrang);
//        }
//        return "redirect:/search_page";
//    }

}

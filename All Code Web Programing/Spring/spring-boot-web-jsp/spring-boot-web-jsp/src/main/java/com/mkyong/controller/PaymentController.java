package com.mkyong.controller;

import com.mkyong.model.MydbOrder;
import com.mkyong.model.ProductInCart;
import com.mkyong.service.MdbProductService;
import com.mkyong.service.MydbOrderService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestParam;

import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpSession;
import java.util.List;

@Controller
@RequestMapping(value = "/payment")
public class PaymentController {
    @Autowired
    MydbOrderService mydbOrderService;
    @Autowired
    MdbProductService mdbProductService;

    @RequestMapping(value = "/themdonhang")
    public String addOrder(HttpServletRequest request, Model model, HttpSession session) {
        List<ProductInCart> cart = (List<ProductInCart>) session.getAttribute("cart");
        String id = String.valueOf(System.currentTimeMillis());
        String name = request.getParameter("hotenkh");
        String add = request.getParameter("diachi");
        String qh = request.getParameter("quanhuyen");
        String tp = request.getParameter("tinhthanhpho");
        String sdt = request.getParameter("sdt");
        String mail = request.getParameter("email");
        String diachi = add + "-" + qh + "-" + tp;
        long millis = System.currentTimeMillis();
        java.util.Date date = new java.util.Date(millis);
        String time = String.valueOf(date);
        String listname = String.join(" , ", mdbProductService.getAllNameOfProduct(cart));
        String count = String.valueOf(mdbProductService.getAllCountOfProduct(cart));
        int price = mdbProductService.getTotal(cart);

        MydbOrder order = new MydbOrder();
        order.setOrderId(id);
        order.setOrderName(name);
        order.setOrderAdd(diachi);
        order.setOrderPhone(sdt);
        order.setOrderMail(mail);
        order.setOrderTime(time);
        order.setOrderNameProduct(listname);
        order.setOrderCountProduct(count);
        order.setOrderPrice(price);

        mydbOrderService.addOrder(order);
        session.setAttribute("motDonHang",order);
        session.setAttribute("cart", null);
        return "redirect:/orderdone_page";
    }
    @RequestMapping(value = "huydonhang")
    public String HuyDonHang(@RequestParam(value = "madh")String madh){
        System.out.println("madh" + madh);
        mydbOrderService.deleteOrderById(madh);
        return "redirect:/";
    }
}

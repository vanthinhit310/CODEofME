package com.mkyong.service;

import com.mkyong.model.MydbOrder;

public interface MydbOrderService {
    public MydbOrder getOneOrderById(String id);

    public boolean addOrder(MydbOrder mydbOrder);

    public boolean deleteOrderById(String id);
}

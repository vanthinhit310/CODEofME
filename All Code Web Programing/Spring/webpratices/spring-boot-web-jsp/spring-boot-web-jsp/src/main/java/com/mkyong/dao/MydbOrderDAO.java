package com.mkyong.dao;

import com.mkyong.model.MydbOrder;

public interface MydbOrderDAO {
    public MydbOrder getOneOrderById(String id);
    public boolean addOrder(MydbOrder mydbOrder);
    public boolean deleteOrderById(String  id);
}

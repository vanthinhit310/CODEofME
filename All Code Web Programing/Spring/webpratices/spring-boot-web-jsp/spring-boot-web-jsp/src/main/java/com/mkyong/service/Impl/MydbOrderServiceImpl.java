package com.mkyong.service.Impl;

import com.mkyong.dao.MydbOrderDAO;
import com.mkyong.model.MydbOrder;
import com.mkyong.service.MydbOrderService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

@Service
public class MydbOrderServiceImpl implements MydbOrderService {
    @Autowired
    MydbOrderDAO mydbOrderDAO;
    @Override
    public MydbOrder getOneOrderById(String id) {
        return mydbOrderDAO.getOneOrderById(id);
    }

    @Override
    public boolean addOrder(MydbOrder mydbOrder) {
        return mydbOrderDAO.addOrder(mydbOrder);
    }

    @Override
    public boolean deleteOrderById(String id) {
        return mydbOrderDAO.deleteOrderById(id);
    }
}

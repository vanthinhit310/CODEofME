package com.mkyong.dao.Impl;

import com.mkyong.dao.MydbOrderDAO;
import com.mkyong.model.MydbOrder;
import org.hibernate.HibernateException;
import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Repository;

import javax.transaction.Transactional;

@Repository
@Transactional
public class MydbOrderDAOImpl implements MydbOrderDAO {
    @Autowired
    SessionFactory sessionFactory;

    @Override
    public MydbOrder getOneOrderById(String id) {
        Session currentSession = sessionFactory.getCurrentSession();
        MydbOrder mydbOrder = currentSession.get(MydbOrder.class, id);
        return mydbOrder;
    }

    @Override
    public boolean addOrder(MydbOrder mydbOrder) {
        Session currentSession = sessionFactory.getCurrentSession();
        try {
            currentSession.save(mydbOrder);
        } catch (HibernateException e) {
            System.out.println(e.getMessage());
            return false;
        }
        return true;
    }

    @Override
    public boolean deleteOrderById(String id) {
        Session currentSession = sessionFactory.getCurrentSession();
        try {
            currentSession.delete(getOneOrderById(id));
        } catch (HibernateException e) {
            System.out.println(e.getMessage());
            return false;
        }
        return true;
    }
}

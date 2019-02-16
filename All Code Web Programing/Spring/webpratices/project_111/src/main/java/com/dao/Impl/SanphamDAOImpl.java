package com.dao.Impl;

import com.dao.SanphamDAO;
import com.model.Sanpham;
import org.hibernate.HibernateException;
import org.hibernate.Query;
import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Repository;
import org.springframework.transaction.annotation.Transactional;

import java.util.List;

@Transactional
@Repository
public class SanphamDAOImpl implements SanphamDAO {
    @Autowired
    SessionFactory sessionFactory;

    @Override
    public List<Sanpham> getAllSanpham() {
        Session currentSession = sessionFactory.getCurrentSession();
        String hql = "From Sanpham";
        Query query = currentSession.createQuery(hql);
        return query.list();
    }

    @Override
    public Sanpham getOneSanpham(String masp) {
        Session currentSession = sessionFactory.getCurrentSession();
        Sanpham sanpham = (Sanpham) currentSession.get(Sanpham.class, masp);
        return sanpham;
    }

    @Override
    public boolean removeSanpham(String masp) {
        Session currentSession = sessionFactory.getCurrentSession();
        try {
            currentSession.delete(masp);
        } catch (HibernateException e) {
            System.out.println(e.getMessage());
            return false;
        }
        return true;
    }

    @Override
    public List<Sanpham> pagination(int start, int numberRecord) {
        Session currentSession = sessionFactory.getCurrentSession();
        String hql = "From Sanpham";
        Query query = currentSession.createQuery(hql);
        query.setFirstResult(start);
        query.setMaxResults(numberRecord);
        return query.list();
    }
}

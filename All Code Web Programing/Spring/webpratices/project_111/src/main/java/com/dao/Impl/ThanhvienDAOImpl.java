package com.dao.Impl;

import com.Util.mD5;
import com.dao.ThanhvienDAO;
import com.model.Thanhvien;
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
public class ThanhvienDAOImpl implements ThanhvienDAO {
    @Autowired
    SessionFactory sessionFactory;

    @Override
    public List<Thanhvien> getAllThanhvien() {
        Session currentSession = sessionFactory.getCurrentSession();
        String hql = "From Thanhvien";
        Query query = currentSession.createQuery(hql);
        return query.list();
    }

    @Override
    public Thanhvien getOneThanhvien(String id) {
        Session currentSession = sessionFactory.getCurrentSession();
        Thanhvien thanhvien = (Thanhvien) currentSession.get(Thanhvien.class, id);
        return thanhvien;
    }

    @Override
    public boolean addThanhvien(Thanhvien thanhvien) {
        Session currentSession = sessionFactory.getCurrentSession();
        try{
            currentSession.save(thanhvien);
        }catch (HibernateException e){
            System.out.println(e.getMessage());
            return  false;
        }
        return true;
    }

    @Override
    public boolean changePassword(String email, String newpass) {
        Session currentSession = sessionFactory.getCurrentSession();
        try {
            Thanhvien thanhvien = getOneThanhvien(email);
            thanhvien.setMatkhau(mD5.md5Encrypt(newpass));
            currentSession.update(thanhvien);
        }catch (HibernateException e){
            System.out.println(e.getMessage());
            return false;
        }
        return true;
    }
}

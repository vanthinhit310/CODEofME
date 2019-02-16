package com.mkyong.dao.Impl;

import com.mkyong.dao.Mydb_SanphamDAO;
import com.mkyong.model.MydbSp;
import org.hibernate.HibernateException;
import org.hibernate.Query;
import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Repository;

import javax.transaction.Transactional;
import java.util.List;
@Repository
@Transactional
public class Mydb_SanphamDAOImpl implements Mydb_SanphamDAO {
    @Autowired
    SessionFactory sessionFactory;
    @Override
    public List<MydbSp> getTatCaSanPham() {
        Session currentSession = sessionFactory.getCurrentSession();
        String hql="FROM MydbSp";
        Query query = currentSession.createQuery(hql);
        return query.list();
    }

    @Override
    public MydbSp getMotSanPham(String id) {
        Session currentSession = sessionFactory.getCurrentSession();
        MydbSp mydbSp = currentSession.get(MydbSp.class, id);
        return mydbSp;
    }

    @Override
    public List<MydbSp> pagination(int begin, int numberofrecord) {
        Session currentSession = sessionFactory.getCurrentSession();
        String hql= "FROM MydbSp";
        Query query = currentSession.createQuery(hql);
        query.setFirstResult(begin);
        query.setMaxResults(numberofrecord);
        return query.list();
    }

    @Override
    public List<MydbSp> timkiemSanPham(String key) {
        Session currentSession = sessionFactory.getCurrentSession();
        String hql="FROM MydbSp AS sp WHERE sp.tensp like ? or sp.giasp like ?";
        Query query = currentSession.createQuery(hql);
        query.setString(0,"%" + key + "%");
        query.setString(1,"%" + key + "%");
        return query.list();
    }

    @Override
    public List<MydbSp> phantrangDSSanPhamTimKiem(String key, int begin, int numberofrecord) {
        Session currentSession = sessionFactory.getCurrentSession();
        String hql = "FROM MydbSp AS sp WHERE sp.tensp like ? or sp.giasp like ?";
        Query query = currentSession.createQuery(hql);
        query.setString(0,"%"+key+"%");
        query.setString(1,"%"+key+"%");
        query.setFirstResult(begin);
        query.setMaxResults(numberofrecord);
        return query.list();
    }

    @Override
    public boolean xoaSanPhamKhoiGioHang(String id) {
        Session currentSession = sessionFactory.getCurrentSession();
        try {
            currentSession.delete(id);
        }catch (HibernateException e) {
            System.out.println(e.getMessage());
            return false;
        }
        return true;
    }
}

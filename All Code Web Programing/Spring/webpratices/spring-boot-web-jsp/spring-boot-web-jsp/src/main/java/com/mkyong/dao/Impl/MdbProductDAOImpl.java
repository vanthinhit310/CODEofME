package com.mkyong.dao.Impl;

import com.mkyong.dao.MdbProductDAO;
import com.mkyong.model.MdbProduct;
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
public class MdbProductDAOImpl implements MdbProductDAO {

    @Autowired
    SessionFactory sessionFactory;

    @Override
    public List<MdbProduct> getTatCaSanPhamTrongDB() {
        Session currentSession = sessionFactory.getCurrentSession();
        String hql = "FROM MdbProduct";
        Query query = currentSession.createQuery(hql);
        return query.list();
    }

    @Override
    public MdbProduct getMotSanPhamDuaVaoMaSP(String id) {
        Session currentSession = sessionFactory.getCurrentSession();
        MdbProduct mdbProduct = currentSession.get(MdbProduct.class, id);
        return mdbProduct;
    }

    @Override
    public boolean removeSanPham(String id) {
        Session currentSession = sessionFactory.getCurrentSession();
        try {
            currentSession.delete(id);
        } catch (HibernateException e) {
            System.out.println(e.getMessage());
            return false;
        }
        return false;
    }

    @Override
    public List<MdbProduct> phantrangSanPham(int bd, int sl) {
        Session currentSession = sessionFactory.getCurrentSession();
        String hql = "From MdbProduct";
        Query query = currentSession.createQuery(hql);
        query.setFirstResult(bd);
        query.setMaxResults(sl);
        return query.list();
    }

    @Override
    public List<MdbProduct> searchPaginate(String key, int start, int count) {
        Session currentSession = sessionFactory.getCurrentSession();
        String hql = "FROM MdbProduct as p WHERE p.name like ? or p.price like ?";
        Query query = currentSession.createQuery(hql);
        query.setString(0, "%" + key + "%");
        query.setString(1, "%" + key + "%");
        query.setFirstResult(start);
        query.setMaxResults(count);
        return query.list();
    }

    @Override
    public List<MdbProduct> searchProduct(String key) {
        Session currentSession = sessionFactory.getCurrentSession();
        String hql = "FROM MdbProduct as p WHERE p.name like ? or p.price like ?";
        Query query = currentSession.createQuery(hql);
        query.setString(0, "%" + key + "%");
        query.setString(1, "%" + key + "%");
        return query.list();
    }
}

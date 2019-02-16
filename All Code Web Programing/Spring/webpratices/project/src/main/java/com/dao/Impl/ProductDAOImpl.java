package com.dao.Impl;

import com.dao.ProductDAO;
import com.model.Product;
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
public class ProductDAOImpl implements ProductDAO {
    @Autowired
    SessionFactory sessionFactory;
    @Override
    public List<Product> getAllProduct() {
        Session currentSession = sessionFactory.getCurrentSession();
        String hql = "From Product";
        Query query = currentSession.createQuery(hql);
        List list = query.list();
        return list;
    }

    @Override
    public Product getOneProduct(int id) {
        Session currentSession = sessionFactory.getCurrentSession();
        Product product = (Product) currentSession.get(Product.class, id);
        return product;
    }

    @Override
    public boolean removeProduct(int id) {
        Session currentSession = sessionFactory.getCurrentSession();
        try {
            currentSession.delete(id);
            return true;
        }catch (HibernateException ex){
            System.out.println(ex.getMessage());
        }
        return false;
    }

    @Override
    public List<Product> pagination(int start, int numberRecord) {
        Session currentSession = sessionFactory.getCurrentSession();
        String hql = "From Product";
        Query query = currentSession.createQuery(hql);
        query.setFirstResult(start);
        query.setMaxResults(numberRecord);
        return query.list();
    }
}

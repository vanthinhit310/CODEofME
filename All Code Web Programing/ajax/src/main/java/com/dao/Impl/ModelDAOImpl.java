package com.dao.Impl;

import com.dao.ModelDAO;
import com.model.Model;
import org.hibernate.Query;
import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Repository;
import org.springframework.transaction.annotation.Transactional;

import java.util.List;
@Transactional
@Repository
public class ModelDAOImpl implements ModelDAO {
    @Autowired
    SessionFactory sessionFactory;
    @Override
    public List<Model> getAllModel() {
        Session currentSession = sessionFactory.getCurrentSession();
        String hql ="from Model";
        Query query = currentSession.createQuery(hql);
        return query.list();
    }

    @Override
    public List<Model> getAllFromAToB(int start, int count) {
        Session currentSession = sessionFactory.getCurrentSession();
        String hql ="from Model";
        Query query = currentSession.createQuery(hql);
        query.setFirstResult(start);
        query.setMaxResults(count);
        return query.list();
    }
}

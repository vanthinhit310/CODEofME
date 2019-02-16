package com.dao.Impl;

import com.dao.AccountDAO;
import com.model.Account;
import org.hibernate.Query;
import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Repository;
import org.springframework.transaction.annotation.Transactional;

import java.util.List;
@Repository
@Transactional
public class AccountDaoImpl implements AccountDAO {
    @Autowired
    SessionFactory sessionFactory;
    @Override
    public List<Account> getAllAccount() {
        Session currentSession = sessionFactory.getCurrentSession();
        String hql="from Account";
        Query query = currentSession.createQuery(hql);
        return query.list();
    }
}

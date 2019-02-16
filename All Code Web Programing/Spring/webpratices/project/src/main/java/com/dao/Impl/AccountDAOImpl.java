package com.dao.Impl;

import com.Util.mD5;
import com.dao.AccountDAO;
import com.model.Account;
import org.hibernate.HibernateException;
import org.hibernate.Query;
import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Repository;
import org.springframework.transaction.annotation.Transactional;

import java.util.List;
@Repository
@Transactional
public class AccountDAOImpl implements AccountDAO {
    @Autowired
    SessionFactory sessionFactory;
    @Override
    public List<Account> getAllUser() {
        Session currentSession = sessionFactory.getCurrentSession();
        String hql="From Account";
        Query query = currentSession.createQuery(hql);
        return query.list();
    }

    @Override
    public Account getOneUser(String email) {
        Session currentSession = sessionFactory.getCurrentSession();
        Account user = (Account) currentSession.get(Account.class, email);
        return user;
    }

    @Override
    public boolean addUser(Account user) {
        Session currentSession = sessionFactory.getCurrentSession();
        try{
            currentSession.save(user);
        }catch (HibernateException ex){
            System.out.println(ex.getMessage());
            return false;
        }
        return true;
    }

    @Override
    public boolean changePassword(String email, String newpassword) {
        Session currentSession = sessionFactory.getCurrentSession();
        try {
            Account user = getOneUser(email);
            user.setPassword(mD5.md5Encrypt(newpassword));
            currentSession.update(user);
        }catch (HibernateException ex){
            System.out.println(ex.getMessage());
            return false;
        }
        return true;
    }
}

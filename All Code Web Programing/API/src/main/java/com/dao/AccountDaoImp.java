package com.dao;

import com.model.Account;
import org.hibernate.Criteria;
import org.hibernate.Query;
import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Repository;

import javax.transaction.Transactional;
import java.util.List;

@Repository
@Transactional
public class AccountDaoImp implements AccountDao {
    @Autowired
    SessionFactory sessionFactory;

    @Override
    public List<Account> getAll() {
        // TODO Auto-generated method stub
        Session session = sessionFactory.getCurrentSession();
        @SuppressWarnings("unchecked")
        List<Account> list= session.createCriteria(Account.class).list();
        return list;
    }

    @Override
    public Account getAccount(String id) {
        Session currentSession = sessionFactory.getCurrentSession();
        return currentSession.get(Account.class, id);
    }

    @Override
    public boolean add(Account account) {
        Session currentSession = sessionFactory.getCurrentSession();
        try {
            currentSession.save(account);
            return true;

        } catch (Exception e) {
            return false;
        }
    }

    @Override
    public void update(Account account) {
        Session currentSession = sessionFactory.getCurrentSession();

            currentSession.update(account);


    }

    @Override
    public void delete(String id) {
        Session currentSession = sessionFactory.getCurrentSession();
            currentSession.delete(getAccount(id));
    }

    @Override
    public Account EmailUseable(String email) {
        Session currentSession = sessionFactory.getCurrentSession();
        String hql = "FROM Account a WHERE a.email = '"+email+"'";

        List list = currentSession.createQuery(hql).list();
        return (Account) list.get(0);

    }
}

package com.mkyong.dao.Impl;

import com.mkyong.dao.MdbUserDAO;
import com.mkyong.model.MdbUser;
import com.mkyong.utils.MD5Encrypt;
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
public class MdbUserDAOImpl implements MdbUserDAO {
    @Autowired
    SessionFactory sessionFactory;

    @Override
    public List<MdbUser> getAllUser() {
        Session currentSession = sessionFactory.getCurrentSession();
        String hql = "FROM MdbUser";
        Query query = currentSession.createQuery(hql);
        return query.list();
    }

    @Override
    public MdbUser getUserByEmail(String email) {
        Session currentSession = sessionFactory.getCurrentSession();
        return currentSession.get(MdbUser.class, email);
    }

    @Override
    public boolean addUserToDB(MdbUser user) {
        Session currentSession = sessionFactory.getCurrentSession();
        try {
            currentSession.save(user);
        } catch (HibernateException e) {
            System.out.println(e.getMessage());
            return false;
        }
        return true;
    }

    @Override
    public boolean changeActiveByEmail(String email) {
        Session currentSession = sessionFactory.getCurrentSession();
        try {
            MdbUser user = getUserByEmail(email);
            user.setActive(true);
            currentSession.update(user);
        } catch (HibernateException e) {
            System.out.println(e.getMessage());
            return false;
        }
        return true;
    }

    @Override
    public boolean changePasswordByEmail(String email, String password) {
        Session currentSession = sessionFactory.getCurrentSession();
        try {
            MdbUser user = getUserByEmail(email);
            user.setPassword(MD5Encrypt.md5(password));
            currentSession.update(user);
        } catch (HibernateException e) {
            System.out.println(e.getMessage());
            return false;
        }
        return true;
    }

    @Override
    public boolean setCodeByEmail(String email, String code) {
        Session currentSession = sessionFactory.getCurrentSession();
        try {
            MdbUser user = getUserByEmail(email);
            user.setCodeverify(code);
            currentSession.update(user);
        } catch (HibernateException e) {
            System.out.println(e.getMessage());
            return false;
        }
        return true;
    }
}

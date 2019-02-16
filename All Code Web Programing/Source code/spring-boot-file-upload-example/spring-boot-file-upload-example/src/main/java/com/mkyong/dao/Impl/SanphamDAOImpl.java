package com.mkyong.dao.Impl;


import com.mkyong.dao.SanphamDAO;
import com.mkyong.model.MydbSp;
import org.hibernate.Query;
import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Repository;
import javax.transaction.Transactional;
import java.util.List;


@Repository
@Transactional
public class SanphamDAOImpl implements SanphamDAO {
    @Autowired
    SessionFactory sessionFactory;
    @Override
    public List<MydbSp> getTatCaSanPham() {
        Session currentSession = sessionFactory.getCurrentSession();
        String hql="FROM MydbSp";
        Query query = currentSession.createQuery(hql);
        return query.list();
    }
}

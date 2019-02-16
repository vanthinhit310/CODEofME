package com.mkyong.service.Impl;

import com.mkyong.dao.MdbUserDAO;
import com.mkyong.model.MdbUser;
import com.mkyong.service.MdbUserService;
import com.mkyong.utils.MD5Encrypt;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.List;

@Service
public class MdbUserServiceImpl implements MdbUserService {
    @Autowired
    MdbUserDAO mdbUserDAO;

    @Override
    public List<MdbUser> getAllUser() {
        return mdbUserDAO.getAllUser();
    }

    @Override
    public MdbUser getUserByEmail(String email) {
        return mdbUserDAO.getUserByEmail(email);
    }

    @Override
    public boolean addUserToDB(MdbUser user) {
        return mdbUserDAO.addUserToDB(user);
    }

    @Override
    public boolean checkLoginInfo(String username, String password) {
        List<MdbUser> list = mdbUserDAO.getAllUser();
        for (MdbUser ds : list) {
            if (ds.getEmail().equals(username) && ds.getPassword().equals(MD5Encrypt.md5(password)) && ds.getActive() == true) {
                return true;
            }
        }
        return false;
    }

    @Override
    public boolean changeActiveByEmail(String email) {
        return mdbUserDAO.changeActiveByEmail(email);
    }

    @Override
    public boolean changePasswordByEmail(String email, String password) {
        return mdbUserDAO.changePasswordByEmail(email, password);
    }

    @Override
    public boolean setCodeByEmail(String email, String code) {
        return mdbUserDAO.setCodeByEmail(email, code);
    }
}

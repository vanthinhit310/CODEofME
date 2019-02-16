package com.service.Impl;

import com.Util.mD5;
import com.dao.AccountDAO;
import com.model.Account;
import com.service.AccountService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.List;

@Service
public class AccountServiceImpl implements AccountService {
    @Autowired
    AccountDAO accountDAO;
    @Override
    public List<Account> getAllUser() {
        return accountDAO.getAllUser();
    }

    @Override
    public Account getOneUser(String email) {
        return accountDAO.getOneUser(email);
    }

    @Override
    public boolean addUser(Account user) {
        return accountDAO.addUser(user);
    }

    @Override
    public boolean changePassword(String email, String newpassword) {
        return accountDAO.changePassword(email, newpassword);
    }

    @Override
    public boolean checkLoginInfo(String email, String password) {
        List<Account> dsUser = accountDAO.getAllUser();
        for(Account user:dsUser ){
            if(user.getEmail().equals(email)&& user.getPassword().equals(mD5.md5Encrypt(password))){
                return true;
            }
        }
        return false;
    }
}

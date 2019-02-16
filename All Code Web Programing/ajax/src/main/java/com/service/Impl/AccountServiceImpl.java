package com.service.Impl;

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
    public List<Account> getAllAccount() {
        return accountDAO.getAllAccount();
    }

    @Override
    public boolean checkUsernameAndPassword(String username, String password) {
        List<Account> dsAccount = accountDAO.getAllAccount();
        for(Account ds : dsAccount){
            if(ds.getEmail().equals(username)&& ds.getPassword().equals(password)){
                return true;
            }
        }
        return false;
    }
}

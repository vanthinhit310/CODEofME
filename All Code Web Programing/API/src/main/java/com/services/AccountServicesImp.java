package com.services;

import com.dao.AccountDao;
import com.model.Account;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.List;
@Service
public class AccountServicesImp implements AccountServices {
    @Autowired
    AccountDao accountDao;
    @Override
    public List<Account> getAll() {
        return accountDao.getAll();
    }

    @Override
    public Account getAccount(String id) {
        return accountDao.getAccount(id);
    }

    @Override
    public boolean add(Account account) {
        return accountDao.add(account);
    }

    @Override
    public void update(Account account) {
         accountDao.update(account);
    }

    @Override
    public void delete(String id) {
         accountDao.delete(id);
    }

    @Override
    public boolean EmailUseable(String email) {
        return accountDao.EmailUseable(email).isUseable();
    }
}

package com.dao;

import com.model.Account;

import java.util.List;

public interface AccountDao {
    public List<Account> getAll();
    public Account getAccount(String id);
    public boolean add(Account account);
    public void update(Account account);
    public  void delete(String id);
    public Account EmailUseable(String email);
}

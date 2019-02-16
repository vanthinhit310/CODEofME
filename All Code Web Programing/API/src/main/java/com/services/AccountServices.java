package com.services;

import com.model.Account;

import java.util.List;

public interface AccountServices {
    public List<Account> getAll();
    public Account getAccount(String id);
    public boolean add(Account account);
    public void update(Account account);
    public  void delete(String id);
    public boolean EmailUseable(String email);
}

package com.dao;

import com.model.Account;

import java.util.List;

public interface AccountDAO {
    public List<Account> getAllUser();
    public Account getOneUser(String email);
    public boolean addUser(Account user);
    public boolean changePassword(String email, String newpassword);
}

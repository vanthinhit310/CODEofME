package com.service;

import com.model.Account;

import java.util.List;

public interface AccountService {
    public List<Account> getAllUser();
    public Account getOneUser(String email);
    public boolean addUser(Account user);
    public boolean changePassword(String email, String newpassword);
    public boolean checkLoginInfo(String email, String password);
}

package com.service;

import com.model.Account;

import java.util.List;

public interface AccountService {
    public List<Account> getAllAccount();
    public boolean checkUsernameAndPassword(String username, String password);
}

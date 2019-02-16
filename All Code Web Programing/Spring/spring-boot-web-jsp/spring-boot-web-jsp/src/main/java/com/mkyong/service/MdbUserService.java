package com.mkyong.service;

import com.mkyong.model.MdbUser;

import java.util.List;

public interface MdbUserService {
    public List<MdbUser> getAllUser();
    public MdbUser getUserByEmail(String email);
    public boolean addUserToDB(MdbUser user);
    public boolean checkLoginInfo(String username, String password);
    public boolean changeActiveByEmail(String email);
    public boolean changePasswordByEmail(String email, String password);
    public  boolean setCodeByEmail(String email, String code);
}

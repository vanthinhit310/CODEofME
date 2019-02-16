package com.mkyong.dao;

import com.mkyong.model.MdbUser;

import java.util.List;

public interface MdbUserDAO {
    public List<MdbUser> getAllUser();
    public MdbUser getUserByEmail(String email);
    public boolean addUserToDB(MdbUser user);
    public boolean changeActiveByEmail(String email);
    public boolean changePasswordByEmail(String email, String password);
    public  boolean setCodeByEmail(String email, String code);

}

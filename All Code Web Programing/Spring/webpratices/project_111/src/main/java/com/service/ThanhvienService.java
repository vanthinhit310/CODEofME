package com.service;

import com.model.Thanhvien;

import java.util.List;

public interface ThanhvienService {
    public List<Thanhvien> getAllThanhvien();
    public Thanhvien getOneThanhvien(String id);
    public boolean addThanhvien(Thanhvien thanhvien);
    public boolean changePassword(String email, String newpass);
    public boolean checkLoginInfo(String email, String password);
}

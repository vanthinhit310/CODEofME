package com.dao;

import com.model.Thanhvien;

import java.util.List;

public interface ThanhvienDAO {
    public List<Thanhvien> getAllThanhvien();
    public Thanhvien getOneThanhvien(String id);
    public boolean addThanhvien(Thanhvien thanhvien);
    public boolean changePassword(String email, String newpass);
}

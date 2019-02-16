package com.service;

import com.model.Sanpham;

import java.util.List;

public interface SanphamService {
    public List<Sanpham> getAllSanpham();
    public Sanpham getOneSanpham(String masp);
    public boolean removeSanpham(String masp);
    public List<Sanpham> pagination(int start, int numberRecord);

}

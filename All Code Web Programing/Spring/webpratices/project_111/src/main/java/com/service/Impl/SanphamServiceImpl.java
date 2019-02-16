package com.service.Impl;

import com.dao.SanphamDAO;
import com.model.Sanpham;
import com.service.SanphamService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.List;
@Service
public class SanphamServiceImpl implements SanphamService {
    @Autowired
    SanphamDAO sanphamDAO;
    @Override
    public List<Sanpham> getAllSanpham() {
        return sanphamDAO.getAllSanpham();
    }

    @Override
    public Sanpham getOneSanpham(String masp) {
        return sanphamDAO.getOneSanpham(masp);
    }

    @Override
    public boolean removeSanpham(String masp) {
        return sanphamDAO.removeSanpham(masp);
    }

    @Override
    public List<Sanpham> pagination(int start, int numberRecord) {
        return sanphamDAO.pagination(start, numberRecord);
    }

}

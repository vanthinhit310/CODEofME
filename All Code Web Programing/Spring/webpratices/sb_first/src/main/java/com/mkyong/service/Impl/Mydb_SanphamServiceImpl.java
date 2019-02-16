package com.mkyong.service.Impl;

import com.mkyong.dao.Mydb_SanphamDAO;
import com.mkyong.model.MydbSp;
import com.mkyong.service.Mydb_SanphamService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.List;

@Service
public class Mydb_SanphamServiceImpl implements Mydb_SanphamService {
    @Autowired
    Mydb_SanphamDAO mydb_sanphamDAO;

    @Override
    public List<MydbSp> getTatCaSanPham() {
        return mydb_sanphamDAO.getTatCaSanPham();
    }

    @Override
    public MydbSp getMotSanPham(String id) {
        return mydb_sanphamDAO.getMotSanPham(id);
    }

    @Override
    public List<MydbSp> pagination(int begin, int numberofrecord) {
        return mydb_sanphamDAO.pagination(begin, numberofrecord);
    }

    @Override
    public List<MydbSp> timkiemSanPham(String key) {
        return mydb_sanphamDAO.timkiemSanPham(key);
    }

    @Override
    public List<MydbSp> phantrangDSSanPhamTimKiem(String key, int begin, int numberofrecord) {
        return mydb_sanphamDAO.phantrangDSSanPhamTimKiem(key, begin, numberofrecord);
    }

    @Override
    public boolean xoaSanPhamKhoiGioHang(String id) {
        return mydb_sanphamDAO.xoaSanPhamKhoiGioHang(id);
    }
}

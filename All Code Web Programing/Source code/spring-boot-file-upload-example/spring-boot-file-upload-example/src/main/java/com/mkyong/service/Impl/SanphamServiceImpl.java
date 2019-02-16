package com.mkyong.service.Impl;

import com.mkyong.dao.SanphamDAO;
import com.mkyong.model.MydbSp;
import com.mkyong.service.SanphamService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.List;

@Service
public class SanphamServiceImpl implements SanphamService {
    @Autowired
    SanphamDAO sanphamDAO;
    @Override
    public List<MydbSp> getTatCaSanPham() {
        return sanphamDAO.getTatCaSanPham();
    }
}

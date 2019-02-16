package com.service.Impl;

import com.Util.mD5;
import com.dao.ThanhvienDAO;
import com.model.Thanhvien;
import com.service.ThanhvienService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.List;
@Service
public class ThanhvienServiceImpl implements ThanhvienService {
    @Autowired
    ThanhvienDAO thanhvienDAO;
    @Override
    public List<Thanhvien> getAllThanhvien() {
        return thanhvienDAO.getAllThanhvien();
    }

    @Override
    public Thanhvien getOneThanhvien(String id) {
        return thanhvienDAO.getOneThanhvien(id);
    }

    @Override
    public boolean addThanhvien(Thanhvien thanhvien) {
        return thanhvienDAO.addThanhvien(thanhvien);
    }

    @Override
    public boolean changePassword(String email, String newpass) {
        return thanhvienDAO.changePassword(email, newpass);
    }

    @Override
    public boolean checkLoginInfo(String email, String password) {
        List<Thanhvien> thanhvienList = thanhvienDAO.getAllThanhvien();
        for (Thanhvien tv : thanhvienList){
            if(tv.getEmail().equals(email) && tv.getMatkhau().equals(mD5.md5Encrypt(password))){
                return true;
            }
        }
        return false;
    }
}

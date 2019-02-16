package com.mkyong.dao;

import com.mkyong.model.MdbProduct;

import java.util.List;

public interface MdbProductDAO {
    public List<MdbProduct> getTatCaSanPhamTrongDB();
    public MdbProduct getMotSanPhamDuaVaoMaSP(String id);
    public boolean removeSanPham(String id);
    public List<MdbProduct> phantrangSanPham(int bd , int sl);
    public List<MdbProduct> searchPaginate(String key, int start, int count);
    public List<MdbProduct> searchProduct(String key);
}

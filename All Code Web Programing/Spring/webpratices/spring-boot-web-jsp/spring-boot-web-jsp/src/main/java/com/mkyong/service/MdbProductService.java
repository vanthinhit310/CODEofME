package com.mkyong.service;

import com.mkyong.model.MdbProduct;
import com.mkyong.model.ProductInCart;

import java.util.List;

public interface MdbProductService {
    public List<MdbProduct> getTatCaSanPhamTrongDB();
    public MdbProduct getMotSanPhamDuaVaoMaSP(String id);
    public boolean removeSanPham(String id);
    public List<MdbProduct> phantrangSanPham(int bd , int sl);
    public ProductInCart getOneProductInCart(List<ProductInCart> list, String id);
    public int getTotal(List<ProductInCart> list);
    public boolean removeProductInCart(List<ProductInCart> list, String id);
    public List<String> getAllNameOfProduct(List<ProductInCart> cart);
    public int getAllCountOfProduct(List<ProductInCart> cart);
    public List<MdbProduct> searchPaginate(String key, int start, int count);
    public List<MdbProduct> searchProduct(String key);
}

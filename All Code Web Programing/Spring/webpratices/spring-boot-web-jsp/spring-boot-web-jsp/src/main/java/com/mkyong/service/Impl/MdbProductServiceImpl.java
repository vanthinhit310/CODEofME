package com.mkyong.service.Impl;

import com.mkyong.dao.MdbProductDAO;
import com.mkyong.model.MdbProduct;
import com.mkyong.model.ProductInCart;
import com.mkyong.service.MdbProductService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.LinkedList;
import java.util.List;

@Service
public class MdbProductServiceImpl implements MdbProductService {
    @Autowired
    MdbProductDAO mdbProductDAO;

    @Override
    public List<MdbProduct> getTatCaSanPhamTrongDB() {
        return mdbProductDAO.getTatCaSanPhamTrongDB();
    }

    @Override
    public MdbProduct getMotSanPhamDuaVaoMaSP(String id) {
        return mdbProductDAO.getMotSanPhamDuaVaoMaSP(id);
    }

    @Override
    public boolean removeSanPham(String id) {
        return mdbProductDAO.removeSanPham(id);
    }

    @Override
    public List<MdbProduct> phantrangSanPham(int bd, int sl) {
        return mdbProductDAO.phantrangSanPham(bd, sl);
    }

    @Override
    public ProductInCart getOneProductInCart(List<ProductInCart> list, String id) {
        try {
            return list.stream().filter(p -> p.getMdbProduct().getId().equals(id)).findFirst().get();
        } catch (Exception e) {
            return null;
        }
    }

    @Override
    public int getTotal(List<ProductInCart> list) {
        int total = 0;
        for (ProductInCart dssp : list) {
            total = total + (dssp.getCount() * dssp.getMdbProduct().getPrice());
        }
        return total;
    }

    @Override
    public boolean removeProductInCart(List<ProductInCart> cart, String id) {
        for (ProductInCart sp : cart) {
            if (sp.getMdbProduct().getId().equals(id)) {
                cart.remove(sp);
                break;
            }
        }
        return false;
    }

    @Override
    public List<String> getAllNameOfProduct(List<ProductInCart> cart) {
        List<String> listname = new LinkedList<>();
        for (ProductInCart dssp : cart){
            listname.add(dssp.mdbProduct.getName());
        }
        return listname;
    }

    @Override
    public int getAllCountOfProduct(List<ProductInCart> cart) {
        int count = 0;
        for (ProductInCart dssp : cart){
            count+= dssp.getCount();
        }
        return count;
    }

    @Override
    public List<MdbProduct> searchPaginate(String key, int start, int count) {
        return mdbProductDAO.searchPaginate(key, start, count);
    }

    @Override
    public List<MdbProduct> searchProduct(String key) {
        return mdbProductDAO.searchProduct(key);
    }
}

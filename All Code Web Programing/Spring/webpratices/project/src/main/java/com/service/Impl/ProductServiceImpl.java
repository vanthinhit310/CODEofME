package com.service.Impl;

import com.dao.ProductDAO;
import com.model.Product;
import com.service.ProductService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.List;
@Service
public class ProductServiceImpl implements ProductService {
    @Autowired
    ProductDAO productDAO;

    @Override
    public List<Product> getAllProduct() {
        return productDAO.getAllProduct();
    }

    @Override
    public Product getOneProduct(int id) {
        return productDAO.getOneProduct(id);
    }

    @Override
    public boolean removeProduct(int id) {
        return productDAO.removeProduct(id);
    }

    @Override
    public List<Product> pagination(int start, int numberRecord) {
        return productDAO.pagination(start,numberRecord);
    }
}

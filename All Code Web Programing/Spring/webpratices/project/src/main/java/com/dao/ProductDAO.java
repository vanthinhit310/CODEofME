package com.dao;

import com.model.Product;

import java.util.List;

public interface ProductDAO {
    public List<Product> getAllProduct();
    public Product getOneProduct(int id);
    public boolean removeProduct(int id);
    public List<Product> pagination(int start, int numberRecord);
}

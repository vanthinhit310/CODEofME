package com.service;

import com.model.Product;

import java.util.List;

public interface ProductService {
    public List<Product> getAllProduct();
    public Product getOneProduct(int id);
    public boolean removeProduct(int id);
    public List<Product> pagination(int start, int numberRecord);
}

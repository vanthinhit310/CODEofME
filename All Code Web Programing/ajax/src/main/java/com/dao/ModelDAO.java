package com.dao;

import com.model.Model;

import java.util.List;

public interface ModelDAO {
    public List<Model> getAllModel();
    public List<Model> getAllFromAToB(int start, int count);
}

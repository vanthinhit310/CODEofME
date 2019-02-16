package com.service;

import com.model.Model;

import java.util.List;

public interface ModelService {
    public List<Model> getAllModel();
    List<Model> getAllFromAToB(int start, int count);
}

package com.service.Impl;

import com.dao.ModelDAO;
import com.model.Model;
import com.service.ModelService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.List;

@Service
public class ModelServiceImpl implements ModelService {
    @Autowired
    ModelDAO modelDAO;

    @Override
    public List<Model> getAllModel() {
        return modelDAO.getAllModel();
    }
    @Override
    public List<Model> getAllFromAToB(int start, int count) {
        return modelDAO.getAllFromAToB(start, count);
    }
}

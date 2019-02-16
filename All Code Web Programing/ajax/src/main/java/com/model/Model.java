package com.model;

import javax.persistence.Basic;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.Id;
import java.util.Objects;

@Entity
public class Model {
    private String masp;
    private String tensp;
    private String gia;

    @Id
    @Column(name = "masp")
    public String getMasp() {
        return masp;
    }

    public void setMasp(String masp) {
        this.masp = masp;
    }

    @Basic
    @Column(name = "tensp")
    public String getTensp() {
        return tensp;
    }

    public void setTensp(String tensp) {
        this.tensp = tensp;
    }

    @Basic
    @Column(name = "gia")
    public String getGia() {
        return gia;
    }

    public void setGia(String gia) {
        this.gia = gia;
    }

    @Override
    public boolean equals(Object o) {
        if (this == o) return true;
        if (o == null || getClass() != o.getClass()) return false;
        Model model = (Model) o;
        return Objects.equals(masp, model.masp) &&
                Objects.equals(tensp, model.tensp) &&
                Objects.equals(gia, model.gia);
    }

    @Override
    public int hashCode() {

        return Objects.hash(masp, tensp, gia);
    }
}

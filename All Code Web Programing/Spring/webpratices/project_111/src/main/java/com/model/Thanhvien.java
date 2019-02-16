package com.model;

import javax.persistence.Basic;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.Id;
import java.util.Objects;

@Entity
public class Thanhvien {
    private String name;
    private String email;
    private String diachi;
    private String matkhau;
    private String ngaytao;

    @Basic
    @Column(name = "name")
    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    @Id
    @Column(name = "email")
    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    @Basic
    @Column(name = "diachi")
    public String getDiachi() {
        return diachi;
    }

    public void setDiachi(String diachi) {
        this.diachi = diachi;
    }

    @Basic
    @Column(name = "matkhau")
    public String getMatkhau() {
        return matkhau;
    }

    public void setMatkhau(String matkhau) {
        this.matkhau = matkhau;
    }

    @Basic
    @Column(name = "ngaytao")
    public String getNgaytao() {
        return ngaytao;
    }

    public void setNgaytao(String ngaytao) {
        this.ngaytao = ngaytao;
    }

    @Override
    public boolean equals(Object o) {
        if (this == o) return true;
        if (o == null || getClass() != o.getClass()) return false;
        Thanhvien thanhvien = (Thanhvien) o;
        return Objects.equals(name, thanhvien.name) &&
                Objects.equals(email, thanhvien.email) &&
                Objects.equals(diachi, thanhvien.diachi) &&
                Objects.equals(matkhau, thanhvien.matkhau) &&
                Objects.equals(ngaytao, thanhvien.ngaytao);
    }

    @Override
    public int hashCode() {

        return Objects.hash(name, email, diachi, matkhau, ngaytao);
    }
}

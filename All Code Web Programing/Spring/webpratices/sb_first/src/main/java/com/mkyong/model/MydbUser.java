package com.mkyong.model;

import javax.persistence.*;
import java.util.Objects;

@Entity
@Table(name = "mydb_user", schema = "mydb")
public class MydbUser {
    private String name;
    private String email;
    private String password;
    private String diachi;
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
    @Column(name = "password")
    public String getPassword() {
        return password;
    }

    public void setPassword(String password) {
        this.password = password;
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
        MydbUser mydbUser = (MydbUser) o;
        return Objects.equals(name, mydbUser.name) &&
                Objects.equals(email, mydbUser.email) &&
                Objects.equals(password, mydbUser.password) &&
                Objects.equals(diachi, mydbUser.diachi) &&
                Objects.equals(ngaytao, mydbUser.ngaytao);
    }

    @Override
    public int hashCode() {
        return Objects.hash(name, email, password, diachi, ngaytao);
    }
}

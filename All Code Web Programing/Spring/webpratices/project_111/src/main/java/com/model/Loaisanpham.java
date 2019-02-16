package com.model;

import javax.persistence.*;
import java.io.Serializable;
import java.util.Objects;

@Entity
@Table(name = "loaisanpham", schema = "mydb")
public class Loaisanpham implements Serializable {
    private String maloai;
    private String tenloai;
    private String loaisp;
    private Sanpham sanphamByLoaisp;

    @Id
    @Column(name = "maloai")
    public String getMaloai() {
        return maloai;
    }

    public void setMaloai(String maloai) {
        this.maloai = maloai;
    }

    @Basic
    @Column(name = "tenloai")
    public String getTenloai() {
        return tenloai;
    }

    public void setTenloai(String tenloai) {
        this.tenloai = tenloai;
    }

    @Basic
    @Column(name = "loaisp")
    public String getLoaisp() {
        return loaisp;
    }

    public void setLoaisp(String loaisp) {
        this.loaisp = loaisp;
    }

    @Override
    public boolean equals(Object o) {
        if (this == o) return true;
        if (o == null || getClass() != o.getClass()) return false;
        Loaisanpham that = (Loaisanpham) o;
        return Objects.equals(maloai, that.maloai) &&
                Objects.equals(tenloai, that.tenloai) &&
                Objects.equals(loaisp, that.loaisp);
    }

    @Override
    public int hashCode() {

        return Objects.hash(maloai, tenloai, loaisp);
    }

    @ManyToOne
    @JoinColumn(name = "loaisp", referencedColumnName = "loaisp", updatable = false , insertable = false)
    public Sanpham getSanphamByLoaisp() {
        return sanphamByLoaisp;
    }

    public void setSanphamByLoaisp(Sanpham sanphamByLoaisp) {
        this.sanphamByLoaisp = sanphamByLoaisp;
    }
}

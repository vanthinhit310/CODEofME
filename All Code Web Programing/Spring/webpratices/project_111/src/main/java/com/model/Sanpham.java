package com.model;

import javax.persistence.*;
import java.io.Serializable;
import java.util.Collection;
import java.util.Objects;

@Entity
@Table(name = "sanpham", schema = "mydb")
public class Sanpham implements Serializable {
    private String masp;
    private String tensp;
    private String hinhanhsp;
    private Integer gia;
    private String loaisp;
    private String motasp;
    private Collection<Loaisanpham> Sanpham;

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
    @Column(name = "hinhanhsp")
    public String getHinhanhsp() {
        return hinhanhsp;
    }

    public void setHinhanhsp(String hinhanhsp) {
        this.hinhanhsp = hinhanhsp;
    }

    @Basic
    @Column(name = "gia")
    public Integer getGia() {
        return gia;
    }

    public void setGia(Integer gia) {
        this.gia = gia;
    }

    @Basic
    @Column(name = "loaisp")
    public String getLoaisp() {
        return loaisp;
    }

    public void setLoaisp(String loaisp) {
        this.loaisp = loaisp;
    }

    @Basic
    @Column(name = "motasp")
    public String getMotasp() {
        return motasp;
    }

    public void setMotasp(String motasp) {
        this.motasp = motasp;
    }

    @Override
    public boolean equals(Object o) {
        if (this == o) return true;
        if (o == null || getClass() != o.getClass()) return false;
        Sanpham sanpham = (Sanpham) o;
        return Objects.equals(masp, sanpham.masp) &&
                Objects.equals(tensp, sanpham.tensp) &&
                Objects.equals(hinhanhsp, sanpham.hinhanhsp) &&
                Objects.equals(gia, sanpham.gia) &&
                Objects.equals(loaisp, sanpham.loaisp) &&
                Objects.equals(motasp, sanpham.motasp);
    }

    @Override
    public int hashCode() {

        return Objects.hash(masp, tensp, hinhanhsp, gia, loaisp, motasp);
    }

    @OneToMany(mappedBy = "sanphamByLoaisp")
    public Collection<Loaisanpham> getSanpham() {
        return Sanpham;
    }

    public void setSanpham(Collection<Loaisanpham> sanpham) {
        Sanpham = sanpham;
    }
}

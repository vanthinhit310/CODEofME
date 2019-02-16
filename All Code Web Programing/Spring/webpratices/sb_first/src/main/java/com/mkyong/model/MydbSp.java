package com.mkyong.model;

import javax.persistence.*;
import java.util.Objects;

@Entity
@Table(name = "mydb_sp", schema = "mydb")
public class MydbSp {
    private String masp;
    private String tensp;
    private String hinhanhsp;
    private String giasp;
    private String lsp;
    private String motasp;

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
    @Column(name = "giasp")
    public String getGiasp() {
        return giasp;
    }

    public void setGiasp(String giasp) {
        this.giasp = giasp;
    }

    @Basic
    @Column(name = "lsp")
    public String getLsp() {
        return lsp;
    }

    public void setLsp(String lsp) {
        this.lsp = lsp;
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
        MydbSp mydbSp = (MydbSp) o;
        return Objects.equals(masp, mydbSp.masp) &&
                Objects.equals(tensp, mydbSp.tensp) &&
                Objects.equals(hinhanhsp, mydbSp.hinhanhsp) &&
                Objects.equals(giasp, mydbSp.giasp) &&
                Objects.equals(lsp, mydbSp.lsp) &&
                Objects.equals(motasp, mydbSp.motasp);
    }

    @Override
    public int hashCode() {
        return Objects.hash(masp, tensp, hinhanhsp, giasp, lsp, motasp);
    }
}

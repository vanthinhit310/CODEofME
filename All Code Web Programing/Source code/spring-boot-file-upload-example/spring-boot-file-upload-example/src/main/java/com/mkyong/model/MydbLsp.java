package com.mkyong.model;

import javax.persistence.*;
import java.util.Objects;

@Entity
@Table(name = "mydb_lsp", schema = "mydb")
public class MydbLsp {
    private String malsp;
    private String tenlsp;
    private String lsp;

    @Id
    @Column(name = "malsp")
    public String getMalsp() {
        return malsp;
    }

    public void setMalsp(String malsp) {
        this.malsp = malsp;
    }

    @Basic
    @Column(name = "tenlsp")
    public String getTenlsp() {
        return tenlsp;
    }

    public void setTenlsp(String tenlsp) {
        this.tenlsp = tenlsp;
    }

    @Basic
    @Column(name = "lsp")
    public String getLsp() {
        return lsp;
    }

    public void setLsp(String lsp) {
        this.lsp = lsp;
    }

    @Override
    public boolean equals(Object o) {
        if (this == o) return true;
        if (o == null || getClass() != o.getClass()) return false;
        MydbLsp mydbLsp = (MydbLsp) o;
        return Objects.equals(malsp, mydbLsp.malsp) &&
                Objects.equals(tenlsp, mydbLsp.tenlsp) &&
                Objects.equals(lsp, mydbLsp.lsp);
    }

    @Override
    public int hashCode() {
        return Objects.hash(malsp, tenlsp, lsp);
    }
}

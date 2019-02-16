package com.model;

import javax.persistence.*;
import java.io.Serializable;
import java.util.Objects;

@Entity
@Table(name = "catalog", schema = "mydatabase")
public class Catalog implements Serializable {
    private int id;
    private String name;
    private Integer cateid;
    private Product productByCateid;

    @Id
    @Column(name = "id")
    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    @Basic
    @Column(name = "name")
    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    @Basic
    @Column(name = "cateid")
    public Integer getCateid() {
        return cateid;
    }

    public void setCateid(Integer cateid) {
        this.cateid = cateid;
    }

    @Override
    public boolean equals(Object o) {
        if (this == o) return true;
        if (o == null || getClass() != o.getClass()) return false;
        Catalog catalog = (Catalog) o;
        return id == catalog.id &&
                Objects.equals(name, catalog.name) &&
                Objects.equals(cateid, catalog.cateid);
    }

    @Override
    public int hashCode() {

        return Objects.hash(id, name, cateid);
    }

    @ManyToOne
    @JoinColumn(name = "cateid", referencedColumnName = "cateid", updatable = false, insertable = false)
    public Product getProductByCateid() {
        return productByCateid;
    }

    public void setProductByCateid(Product productByCateid) {
        this.productByCateid = productByCateid;
    }
}

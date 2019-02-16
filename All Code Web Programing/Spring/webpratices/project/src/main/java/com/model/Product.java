package com.model;

import javax.persistence.*;
import java.io.Serializable;
import java.util.Collection;
import java.util.Objects;

@Entity
@Table(name = "product", schema = "mydatabase")
public class Product implements Serializable {
    private int productid;
    private String productname;
    private String productimage;
    private Integer productprice;
    private Integer cateid;
    private String productdescription;
    private Collection<Catalog> Product;

    @Id
    @Column(name = "productid")
    public int getProductid() {
        return productid;
    }

    public void setProductid(int productid) {
        this.productid = productid;
    }

    @Basic
    @Column(name = "productname")
    public String getProductname() {
        return productname;
    }

    public void setProductname(String productname) {
        this.productname = productname;
    }

    @Basic
    @Column(name = "productimage")
    public String getProductimage() {
        return productimage;
    }

    public void setProductimage(String productimage) {
        this.productimage = productimage;
    }

    @Basic
    @Column(name = "productprice")
    public Integer getProductprice() {
        return productprice;
    }

    public void setProductprice(Integer productprice) {
        this.productprice = productprice;
    }

    @Basic
    @Column(name = "cateid")
    public Integer getCateid() {
        return cateid;
    }

    public void setCateid(Integer cateid) {
        this.cateid = cateid;
    }

    @Basic
    @Column(name = "productdescription")
    public String getProductdescription() {
        return productdescription;
    }

    public void setProductdescription(String productdescription) {
        this.productdescription = productdescription;
    }

    @Override
    public boolean equals(Object o) {
        if (this == o) return true;
        if (o == null || getClass() != o.getClass()) return false;
        Product product = (Product) o;
        return productid == product.productid &&
                Objects.equals(productname, product.productname) &&
                Objects.equals(productimage, product.productimage) &&
                Objects.equals(productprice, product.productprice) &&
                Objects.equals(cateid, product.cateid) &&
                Objects.equals(productdescription, product.productdescription);
    }

    @Override
    public int hashCode() {

        return Objects.hash(productid, productname, productimage, productprice, cateid, productdescription);
    }

    @OneToMany(mappedBy = "productByCateid")
    public Collection<Catalog> getProduct() {
        return Product;
    }

    public void setProduct(Collection<Catalog> product) {
        Product = product;
    }
}

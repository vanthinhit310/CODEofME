package com.mkyong.model;

import javax.persistence.*;
import java.util.Objects;

@Entity
@Table(name = "mydb_order", schema = "mdb", catalog = "")
public class MydbOrder {
    private String orderId;
    private String orderName;
    private String orderAdd;
    private String orderPhone;
    private String orderMail;
    private String orderTime;
    private String orderNameProduct;
    private String orderCountProduct;
    private Integer orderPrice;

    @Id
    @Column(name = "order_id")
    public String getOrderId() {
        return orderId;
    }

    public void setOrderId(String orderId) {
        this.orderId = orderId;
    }

    @Basic
    @Column(name = "order_name")
    public String getOrderName() {
        return orderName;
    }

    public void setOrderName(String orderName) {
        this.orderName = orderName;
    }

    @Basic
    @Column(name = "order_add")
    public String getOrderAdd() {
        return orderAdd;
    }

    public void setOrderAdd(String orderAdd) {
        this.orderAdd = orderAdd;
    }

    @Basic
    @Column(name = "order_phone")
    public String getOrderPhone() {
        return orderPhone;
    }

    public void setOrderPhone(String orderPhone) {
        this.orderPhone = orderPhone;
    }

    @Basic
    @Column(name = "order_mail")
    public String getOrderMail() {
        return orderMail;
    }

    public void setOrderMail(String orderMail) {
        this.orderMail = orderMail;
    }

    @Basic
    @Column(name = "order_time")
    public String getOrderTime() {
        return orderTime;
    }

    public void setOrderTime(String orderTime) {
        this.orderTime = orderTime;
    }

    @Basic
    @Column(name = "order_name_product")
    public String getOrderNameProduct() {
        return orderNameProduct;
    }

    public void setOrderNameProduct(String orderNameProduct) {
        this.orderNameProduct = orderNameProduct;
    }

    @Basic
    @Column(name = "order_count_product")
    public String getOrderCountProduct() {
        return orderCountProduct;
    }

    public void setOrderCountProduct(String orderCountProduct) {
        this.orderCountProduct = orderCountProduct;
    }

    @Basic
    @Column(name = "order_price")
    public Integer getOrderPrice() {
        return orderPrice;
    }

    public void setOrderPrice(Integer orderPrice) {
        this.orderPrice = orderPrice;
    }

    @Override
    public boolean equals(Object o) {
        if (this == o) return true;
        if (o == null || getClass() != o.getClass()) return false;
        MydbOrder mydbOrder = (MydbOrder) o;
        return Objects.equals(orderId, mydbOrder.orderId) &&
                Objects.equals(orderName, mydbOrder.orderName) &&
                Objects.equals(orderAdd, mydbOrder.orderAdd) &&
                Objects.equals(orderPhone, mydbOrder.orderPhone) &&
                Objects.equals(orderMail, mydbOrder.orderMail) &&
                Objects.equals(orderTime, mydbOrder.orderTime) &&
                Objects.equals(orderNameProduct, mydbOrder.orderNameProduct) &&
                Objects.equals(orderCountProduct, mydbOrder.orderCountProduct) &&
                Objects.equals(orderPrice, mydbOrder.orderPrice);
    }

    @Override
    public int hashCode() {
        return Objects.hash(orderId, orderName, orderAdd, orderPhone, orderMail, orderTime, orderNameProduct, orderCountProduct, orderPrice);
    }
}

package com.mkyong.model;

public class ProductInCart {
    public MdbProduct mdbProduct;
    public int count;

    public ProductInCart(MdbProduct mdbProduct, int count) {
        this.mdbProduct = mdbProduct;
        this.count = count;
    }

    public void setMdbProduct(MdbProduct mdbProduct) {
        this.mdbProduct = mdbProduct;
    }

    public void setCount(int count) {
        this.count = count;
    }

    public MdbProduct getMdbProduct() {
        return mdbProduct;
    }

    public int getCount() {
        return count;
    }
}

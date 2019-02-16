package com.mkyong.model;

import javax.persistence.*;
import java.util.Objects;

@Entity
@Table(name = "mdb_color", schema = "mdb", catalog = "")
public class MdbColor {
    private String id;
    private String color;

    @Id
    @Column(name = "id")
    public String getId() {
        return id;
    }

    public void setId(String id) {
        this.id = id;
    }

    @Basic
    @Column(name = "color")
    public String getColor() {
        return color;
    }

    public void setColor(String color) {
        this.color = color;
    }

    @Override
    public boolean equals(Object o) {
        if (this == o) return true;
        if (o == null || getClass() != o.getClass()) return false;
        MdbColor mdbColor = (MdbColor) o;
        return Objects.equals(id, mdbColor.id) &&
                Objects.equals(color, mdbColor.color);
    }

    @Override
    public int hashCode() {
        return Objects.hash(id, color);
    }
}

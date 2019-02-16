package com.mkyong.model;

import javax.persistence.*;
import java.util.Objects;

@Entity
@Table(name = "mdb_user", schema = "mdb", catalog = "")
public class MdbUser {
    private String name;
    private String email;
    private String password;
    private String createdate;
    private Boolean active;
    private String codeverify;

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
    @Column(name = "createdate")
    public String getCreatedate() {
        return createdate;
    }

    public void setCreatedate(String createdate) {
        this.createdate = createdate;
    }

    @Basic
    @Column(name = "active")
    public Boolean getActive() {
        return active;
    }

    public void setActive(Boolean active) {
        this.active = active;
    }

    @Basic
    @Column(name = "codeverify")
    public String getCodeverify() {
        return codeverify;
    }

    public void setCodeverify(String codeverify) {
        this.codeverify = codeverify;
    }

    @Override
    public boolean equals(Object o) {
        if (this == o) return true;
        if (o == null || getClass() != o.getClass()) return false;
        MdbUser user = (MdbUser) o;
        return Objects.equals(name, user.name) &&
                Objects.equals(email, user.email) &&
                Objects.equals(password, user.password) &&
                Objects.equals(createdate, user.createdate) &&
                Objects.equals(active, user.active) &&
                Objects.equals(codeverify, user.codeverify);
    }

    @Override
    public int hashCode() {
        return Objects.hash(name, email, password, createdate, active, codeverify);
    }
}

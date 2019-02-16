package com.controller;

import com.model.Account;
import com.services.AccountServices;
import com.utill.JavaMail;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.HttpHeaders;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;
import org.springframework.web.util.UriComponentsBuilder;

import java.util.List;

@RestController
@RequestMapping(value = "/account")
public class AccountController {
    @Autowired
    AccountServices accountServices;

    @GetMapping("get/email/{email}")
    public ResponseEntity<Boolean> emailUseable(@PathVariable("email")String email){
        boolean b = accountServices.EmailUseable(email);
        return new ResponseEntity<Boolean>(b,HttpStatus.OK);
    }
    @GetMapping("/get")
    public ResponseEntity<List<Account>> getAll() {
        List<Account> list = accountServices.getAll();
        if (list.isEmpty())
            return new ResponseEntity<List<Account>>(HttpStatus.NO_CONTENT);
        return new ResponseEntity<List<Account>>(list, HttpStatus.OK);
    }


    @GetMapping("/get/{id}")
    public ResponseEntity<Account> getAccount(@PathVariable("id") String id) {
        Account account = accountServices.getAccount(id);
        if (account == null)
            return new ResponseEntity<Account>(HttpStatus.NOT_FOUND);
        return new ResponseEntity<Account>(account, HttpStatus.OK);
    }

    @PostMapping("/post")
    public ResponseEntity<Void> add(@RequestBody Account account, UriComponentsBuilder uriComponentsBuilder) {
        boolean add = accountServices.add(account);
        if (!add) {
            return new ResponseEntity<Void>(HttpStatus.CONFLICT);
        }
        HttpHeaders headers = new HttpHeaders();
        JavaMail.senMail(account.getEmail(),"Subject","<a href=\"https://www.facebook.com/\">dissss</a>");
        headers.setLocation(uriComponentsBuilder.path("/get/{id}").buildAndExpand(account.getUserName()).toUri());
        return new ResponseEntity<Void>(headers, HttpStatus.CREATED);
    }

    @PutMapping("/put")
    public ResponseEntity<Void> update(@RequestBody Account account) {
        try {
            accountServices.update(account);
            return new ResponseEntity<Void>(HttpStatus.OK);
        } catch (Exception e) {
            return new ResponseEntity<Void>(HttpStatus.INTERNAL_SERVER_ERROR);
        }
    }

    @DeleteMapping("/delete/{id}")
    public ResponseEntity<Void> delete(@PathVariable("id") String id) {
        try {
            accountServices.delete(id);
            return new ResponseEntity<Void>(HttpStatus.OK);
        } catch (Exception e) {
            return new ResponseEntity<Void>(HttpStatus.INTERNAL_SERVER_ERROR);
        }
    }
}

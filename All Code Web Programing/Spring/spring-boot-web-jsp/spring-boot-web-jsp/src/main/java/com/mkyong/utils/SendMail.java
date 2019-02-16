package com.mkyong.utils;

import javax.mail.*;
import javax.mail.internet.*;
import java.util.Date;
import java.util.Properties;
import java.util.Random;

public class SendMail {
    public static void sendmail(String to, String subject, String htmlMessage) {
        Properties props = new Properties();
        props.put("mail.smtp.auth", "true");
        props.put("mail.smtp.starttls.enable", "true");
        props.put("mail.smtp.host", "smtp.gmail.com");
        props.put("mail.smtp.port", "587");

        Session session = Session.getInstance(props, new javax.mail.Authenticator() {
            protected PasswordAuthentication getPasswordAuthentication() {
                return new PasswordAuthentication(Config.Email, Config.Password);
            }
        });
        try {
            Message msg = new MimeMessage(session);
            msg.setFrom(new InternetAddress(Config.Email, false));

            msg.setRecipients(Message.RecipientType.TO, InternetAddress.parse(to));
            msg.setSubject(subject);
            msg.setContent(htmlMessage, "text/html; charset=utf-8");
            msg.setSentDate(new Date());
            Transport.send(msg);
            System.out.println("Message sent successfully");

        } catch (MessagingException e) {
            throw new RuntimeException(e);
        }
    }

}

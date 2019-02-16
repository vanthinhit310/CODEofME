package com.Util;

import org.springframework.context.annotation.Configuration;

@Configuration
public class SendMailConfig {
        public static final String HOST_NAME = "smtp.gmail.com";

        public static final int SSL_PORT = 465; // Port for SSL

        public static final int TSL_PORT = 587; // Port for TLS/STARTTLS

        public static final String Email = "khoacnttsmt@gmail.com"; // your email

        public static final String Password = "vanthinh041097"; // your password

}

create table contact_us(
id int primary key auto_increment,
name varchar(100),
number varchar(10),
email varchar(255),
subject varchar(250),
description varchar(500),
is_verified int DEFAULT 0,
verification_token VARCHAR(64) DEFAULT NULL,
token_expires_at DATETIME DEFAULT NULL,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
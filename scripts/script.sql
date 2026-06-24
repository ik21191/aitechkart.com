create table contact_us(
id int primary key auto_increment,
name varchar(100),
number varchar(10),
email varchar(150),
subject varchar(250),
description varchar(500),
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
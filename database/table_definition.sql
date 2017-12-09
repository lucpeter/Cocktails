CREATE TABLE users (
customer_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(40) NOT NULL,
password VARCHAR(100) NOT NULL,
first_name VARCHAR(30) NOT NULL,
last_name VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL
);

CREATE TABLE category (
category varchar(255),
PRIMARY KEY (Category)
);

CREATE TABLE cocktails (
entry_id varchar(255),
name varchar(255),
creator varchar(255),
picture_path varchar(255),
category varchar(255),
ingredients varchar(255),
FOREIGN KEY (category) REFERENCES category(category),
FOREIGN KEY (creator) REFERENCES user(CustomerId),
PRIMARY KEY (entry_id)
);

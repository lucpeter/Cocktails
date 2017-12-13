DROP TABLE IF EXISTS cocktails;
DROP TABLE IF EXISTS category;
DROP TABLE IF EXISTS users;

CREATE TABLE users (
password VARCHAR(100) NOT NULL,
first_name VARCHAR(30) DEFAULT NULL,
last_name VARCHAR(30) DEFAULT NULL,
email VARCHAR(50) NOT NULL,
active BOOLEAN DEFAULT 0,
PRIMARY KEY (email)
);

CREATE TABLE category (
category varchar(255),
PRIMARY KEY (Category)
);

CREATE TABLE cocktails (
entry_id INT(6) UNSIGNED AUTO_INCREMENT,
name varchar(255) NOT NULL,
creator varchar(255),
category varchar(255),
description TEXT,
ingredients TEXT,
FOREIGN KEY (category) REFERENCES category(category),
FOREIGN KEY (creator) REFERENCES users(email),
PRIMARY KEY (entry_id)
);

INSERT INTO users(password, first_name, last_name, email)
VALUES ('1234' , 'Luke', 'Peterson', 'lucpeter@mymail.mines.edu');

INSERT INTO category(category)
VALUES ('Rum'), ('Vodka'), ('Tequila'), ('Whiskey'), ('Gin');

INSERT INTO cocktails(name, creator, category, description, ingredients) 
VALUES ('Daquiri' , 'lucpeter@mymail.mines.edu', 'Rum', 'Limey', 'rum,lime,sugar,ice'),
    ('Old Fashioned' , 'lucpeter@mymail.mines.edu', 'Whiskey', 'Strong', 'whiskey,lemon peel,bitters,sugar,ice'),
    ('Strawberry Daquiri' , 'lucpeter@mymail.mines.edu', 'Rum', 'Limey', 'rum,strawberry,lime,sugar,ice'),
    ('Gin Fizz' , 'lucpeter@mymail.mines.edu', 'Gin', 'Limey', 'gin,lime,sugar,ice,egg white'),
    ('Marg' , 'lucpeter@mymail.mines.edu', 'Tequila', 'Limey', 'tequila,orange,lime,sugar,ice'),
    ('Pina Colada' , 'lucpeter@mymail.mines.edu', 'Rum', 'Coconut', 'rum,cococut,pineapple,ice');
    
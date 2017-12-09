DROP TABLE cocktails;
DROP TABLE users;
DROP TABLE category;

CREATE TABLE users (
        name varchar(255),
        email varchar(255),
        password varchar(255),
        PRIMARY KEY (email)
);

CREATE TABLE category (
        category varchar(255),
        PRIMARY KEY (category)
);

CREATE TABLE cocktails (
        entry_id varchar(255),
        name varchar(255),
        creator varchar(255),
        picture_path varchar(255),
        category varchar(255),
        ingredients varchar(255),
        FOREIGN KEY (category) REFERENCES category(category),
        FOREIGN KEY (creator) REFERENCES user(email),
        PRIMARY KEY (entry_id)
);

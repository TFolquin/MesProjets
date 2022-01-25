DROP DATABASE IF EXISTS vitrine;

CREATE DATABASE IF NOT EXISTS vitrine;

USE vitrine;

CREATE TABLE contacts(
    id INT AUTO_INCREMENT,
    name VARCHAR(64) NOT NULL,
    firstname VARCHAR(64) NOT NULL,
    phoneNb INT NOT NULL,
    mail VARCHAR(64),
    message LONGTEXT NOT NULL,
    

    PRIMARY KEY (id)
);
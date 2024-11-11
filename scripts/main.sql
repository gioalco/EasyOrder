CREATE DATABASE IF NOT EXISTS EasyOrder;
USE EasyOrder;

DROP TABLE IF EXISTS profile;
DROP TABLE IF EXISTS person;

CREATE TABLE person (
    id INT NOT NULL AUTO_INCREMENT,
    username VARCHAR(30) NOT NULL,
    pwd VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL,
    authority ENUM('user', 'admin') DEFAULT 'user',
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
  );

CREATE TABLE profile (
    id INT NOT NULL AUTO_INCREMENT,
    person_id INT NOT NULL,
    full_name VARCHAR(255),
    phone VARCHAR(11),
    address VARCHAR(255),
    bio VARCHAR(255),
    PRIMARY KEY (id),
    FOREIGN KEY (person_id) REFERENCES person(id)
);


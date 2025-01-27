DROP DATABASE IF EXISTS login_register;

CREATE DATABASE login_register;
USE login_register;

CREATE TABLE users (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    user_name VARCHAR(255) NOT NULL,
    user_password VARCHAR(255) NOT NULL
);

INSERT INTO users (user_name, user_password)
VALUES
("test", "test");
DROP DATABASE IF EXISTS mismatch;
CREATE DATABASE mismatch;
USE mismatch;
CREATE TABLE users (
    username VARCHAR(20) NOT NULL,
    email VARCHAR(20) NOT NULL,
	password CHAR(40) NOT NULL
);
INSERT INTO users VALUES("radu", "radu@mail.com", SHA("1234"));

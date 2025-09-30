CREATE DATABASE IF NOT EXISTS tp1_db;
USE tp1_db;

CREATE TABLE IF NOT EXISTS students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL
);

INSERT INTO students (name) VALUES
    ('hanane alloui'),
    ('linh nguyen');


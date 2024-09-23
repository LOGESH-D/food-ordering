CREATE DATABASE taste_hunt;

USE taste_hunt;

CREATE TABLE reservations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    food_type VARCHAR(255) NOT NULL,
    biryani_quantity INT NOT NULL,
    table_quantity INT NOT NULL,
    date DATE NOT NULL,
    time TIME NOT NULL,
    message TEXT
);

CREATE TABLE contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    message TEXT NOT NULL
);

CREATE TABLE 

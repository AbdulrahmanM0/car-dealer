-- cars.sql - SQL file to set up the car_dealer database and cars table
-- Run this file in phpMyAdmin or your MySQL client

-- Create database
CREATE DATABASE IF NOT EXISTS car_dealer;
USE car_dealer;

-- Create cars table
CREATE TABLE IF NOT EXISTS cars (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    model VARCHAR(100) NOT NULL,
    year INT NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    image VARCHAR(255),
    description TEXT,
    type ENUM('new','used') NOT NULL,
    engine VARCHAR(50),
    transmission VARCHAR(50),
    mileage VARCHAR(50)
);

-- Insert sample data
INSERT INTO cars (name, model, year, price, image, description, type, engine, transmission, mileage) VALUES
('Toyota Camry', 'LE', 2020, 22000.00, 'images/product-1-720x480.jpg', 'A reliable and comfortable sedan.', 'used', '1800cc', 'Manual', '130 000km'),
('Honda Accord', 'EX', 2019, 21000.00, 'images/product-2-720x480.jpg', 'A stylish and efficient car.', 'new', '1800cc', 'Manual', '130 000km'),
('Ford Mustang', 'GT', 2021, 35000.00, 'images/product-3-720x480.jpg', 'A classic American muscle car.', 'used', '5000cc', 'Manual', '80 000km'),
('Chevrolet Malibu', 'LT', 2018, 18000.00, 'images/product-4-720x480.jpg', 'A spacious and affordable sedan.', 'used', '1600cc', 'Automatic', '150 000km'),
('BMW 3 Series', '330i', 2022, 41000.00, 'images/product-5-720x480.jpg', 'A luxury sports sedan.', 'new', '2000cc', 'Automatic', '10 000km'),
('Audi A4', 'Premium', 2021, 39000.00, 'images/product-6-720x480.jpg', 'A premium compact sedan.', 'new', '2000cc', 'Automatic', '5 000km'); 
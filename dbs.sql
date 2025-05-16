CREATE DATABASE ordersystem;
USE ordersystem;
CREATE TABLE orders (
  id INT AUTO_INCREMENT PRIMARY KEY,
  item VARCHAR(100),
  qty INT,
  price INT,
  total INT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
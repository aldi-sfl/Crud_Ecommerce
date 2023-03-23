
CREATE DATABASE e_commerce;

USE e_commerce;

CREATE TABLE categories (
  category_id INT PRIMARY KEY,
  category_name VARCHAR(50)
);


CREATE TABLE products (
  product_id INT PRIMARY KEY,
  product_name VARCHAR(50),
  description TEXT,
  price DECIMAL(10, 2),
  category_id INT,
  FOREIGN KEY (category_id) REFERENCES categories(category_id)
);


CREATE TABLE customers (
  customer_id INT PRIMARY KEY,
  first_name VARCHAR(50),
  last_name VARCHAR(50),
  email VARCHAR(50),
  password VARCHAR(50)
);


CREATE TABLE orders (
  order_id INT PRIMARY KEY,
  customer_id INT,
  order_date DATETIME,
  total DECIMAL(10, 2),
  FOREIGN KEY (customer_id) REFERENCES customers(customer_id)
);

CREATE TABLE order_details (
  order_id INT,
  product_id INT,
  quantity INT,
  price DECIMAL(10, 2),
  FOREIGN KEY (order_id) REFERENCES orders(order_id),
  FOREIGN KEY (product_id) REFERENCES products(product_id)
);
USE forms_db
-- Create add_client table
CREATE TABLE add_client (
    id INT PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    email VARCHAR(100),
    phone_number VARCHAR(20),
    address VARCHAR(200)
);

-- Create meals table
CREATE TABLE meals (
    id INT PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(100),
    phone_number VARCHAR(20),
    type VARCHAR(50),
    requirement VARCHAR(200)
);

-- Create signup table
CREATE TABLE signup (
    id INT PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(100),
    phone_number VARCHAR(20),
    username VARCHAR(50),
    password VARCHAR(100),
    retype_password VARCHAR(100)
);

-- Create us table
CREATE TABLE us (
    id INT PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(100),
    phone_number VARCHAR(20),
    requirement VARCHAR(200)
);

-- Create users table
CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50),
    password VARCHAR(100),
    role VARCHAR(50)
);

-- Create workouts table
CREATE TABLE workouts (
    id INT PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(100),
    phone_number VARCHAR(20),
    type VARCHAR(50),
    requirement VARCHAR(200)
);

# AfriStaff
A full-stack PHP and MySQL web application for managing staff records with full CRUD functionality.

## Description
AfriStaff is a simple HR directory system built for managing employee records. It allows admins to Create, Read, Update, and Delete staff information using PHP and MySQL.

## Tech Stack
- **PHP**: Backend logic and CRUD operations
- **MySQL**: Database to store staff records
- **XAMPP**: Local server environment
- **phpMyAdmin**: Database management
- **HTML/CSS**: Frontend

## Prerequisites
- XAMPP installed with Apache and MySQL running on port 3307

## Database Setup
1. Open http://localhost:8080/phpmyadmin
2. Run this SQL:
```sql
CREATE DATABASE afristaff_db;
USE afristaff_db;
CREATE TABLE staff (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    department VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

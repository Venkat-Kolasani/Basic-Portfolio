<?php
// This file is for one-time database setup
// Run this file once to create the database and tables

// Database configuration
$servername = "localhost";
$username = "root"; // 
$password = ""; // 

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS portfolio_db";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully<br>";
} else {
    echo "Error creating database: " . $conn->error . "<br>";
}

// Select the database
$conn->select_db("portfolio_db");

// Create contacts table
$sql = "CREATE TABLE IF NOT EXISTS contacts (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    mobile VARCHAR(15) NOT NULL,
    email VARCHAR(100) NOT NULL,
    submission_date DATETIME NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table 'contacts' created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

// Close connection
$conn->close();
echo "Database setup completed!";
?>

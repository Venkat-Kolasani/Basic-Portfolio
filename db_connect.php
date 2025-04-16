<?php
// This file handles database connections
// Include this file in other PHP scripts that need database access

// Database configuration
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "portfolio_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<?php
$host = "localhost";
$port = "3307"; // Replace with your custom port (default is 3306)
$username = "root"; // Default XAMPP user
$password = ""; // No password by default
$database = "user_registration"; // Your database name

// Create connection with custom port
$conn = new mysqli($host, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<?php
// Database configuration
$servername = "localhost"; // Replace with your actual database server name
$username = "root";     // Replace with your actual database username
$password = "";     // Replace with your actual database password
$database = "hotel";     // Replace with your actual database name

// Create a database connection
$conn = new mysqli($servername, $username, $password, $database);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    // echo "Connected successfully";
}
?>
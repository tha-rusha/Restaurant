<?php
// Database connection parameters
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'hotel';

// Create a database connection
$conn = new mysqli($hostname, $username, $password, $database);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to call a stored procedure and display the result
function callProcedure($conn, $procedureName) {
    $sql = "CALL " . $procedureName . "()";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "Name: " . $row["customer"] . " | Orders: " . $row["order_count"] . "<br>";
        }
    } else {
        echo "No data found.";
    }
    
}

// Function to call a stored procedure and display the result
function TopFoodProcedure($conn, $procedureName) {
    $sql = "CALL " . $procedureName . "()";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "Name: " . $row["itemCode"] . " | Orders: " . $row["item_count"] . "<br>";
        }
    } else {
        echo "No data found.";
    }
}

// Call the stored procedures
echo "<h2>Top Customer:</h2>";
callProcedure($conn, 'GetTopCustomer');

echo "<h2>Top Food:</h2>";
TopFoodProcedure($conn, 'GetTopFood');

// Close the database connection
$conn->close();
?>
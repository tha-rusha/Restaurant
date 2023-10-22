<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'hotel';
$conn = new mysqli($hostname, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
function callProcedure($conn, $procedureName) {
    $sql = "CALL " . $procedureName . "()";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "Customer Telephone: " . $row["customer"] . " | Orders: " . $row["order_count"] . "<br>";
        }
    } else {
        echo "No data found.";
    }
}
function TopFoodProcedure($conn, $procedureName) {
    $sql = "CALL " . $procedureName . "()";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "Item Code: " . $row["itemCode"] . " | Orders: " . $row["item_count"] . "<br>";
        }
    } else {
        echo "No data found.";
    }
}
echo "<h2>Top Customer:</h2>";
callProcedure($conn, 'GetTopCustomer');

echo "<h2>Top Food:</h2>";
TopFoodProcedure($conn, 'GetTopFoodItem');
$conn->close();
?>
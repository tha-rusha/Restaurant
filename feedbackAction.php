<?php
// Include your database connection code here
$db = new mysqli("localhost", "root", "", "hotel");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $msgContent = $_POST["msgContent"];

    // Validate data (add your own validation rules)

    // Create an SQL query
    $query = "INSERT INTO feedback (name, tpNumber, email, message) VALUES ('$name', '$mobile', '$email', '$msgContent')";

    if ($db->query($query) === TRUE) {
        // Query executed successfully, display a success message
        echo "Message sent successfully..!";
    } else {
        // Query failed, display an error message
        echo "Error: " . $db->error;
    }

    // Close the database connection
    $db->close();
}
?>


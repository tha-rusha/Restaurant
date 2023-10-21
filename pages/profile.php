<?php 
// Start or resume the PHP session
session_start();

// Check if the user's NIC is stored in the session
if (isset($_SESSION['userEmail'])) {
    // Retrieve the user's NIC
    $userEmail = $_SESSION['userEmail'];
    
    // Now you can use $userNic in your application.php file
} else {
    // If the user's NIC is not found in the session, handle it accordingly (e.g., redirect to a login page)
    header("Location: login.php");
    exit();
}
?>
<html>
<head>
    <title>Profile</title>
</head>
<body>
    <center>
        <h1>Profile</h1>
        <?php
            echo "<p>Welcome, $userEmail</p>";
        ?>
</center>
    </body>
</html>
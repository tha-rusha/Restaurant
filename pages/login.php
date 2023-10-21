<?php
session_start(); // Start a session

// Check if a  message exists in the session
if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    // Clear the success message from the session to display it only once
    unset($_SESSION['message']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Login</title>
    <link rel="stylesheet" type="text/css" href="../css/register.css">
</head>
<body>
    <div class="container">
        <form id="login-form" action="loginAction.php" method="POST">
            <h2>Login for an Account</h2>
            <?php
                if (isset($message)) {
                    echo "<p class='message'>$message</p>";
                }
            ?>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            
            <button type="submit ">Login</button>
        </form>
    </div>
</body>
</html>

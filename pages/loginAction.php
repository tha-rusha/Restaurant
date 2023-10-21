<?php
require_once('../dbConfig.php');

function login($email, $password) {
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=hotel", "root", "");
        $stmt = $pdo->prepare("SELECT * FROM customer WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            $hashedPassword = md5($password);
            if ($hashedPassword === $user['password']) {
                session_start();
                $_SESSION['userEmail'] = $user['email'];
                header("Location: profile.php");
                exit();
            } else {
                echo "Incorrect password.";
            }
        } else {
            echo "User not found. Please sign up.";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    if (empty($email) || empty($password)) {
        echo "Please fill in all fields.";
    } else {
        login($email, $password);
    }
}
?>

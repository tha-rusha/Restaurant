<?php
// Connect to the database
require_once("../dbConfig.php");

$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$telephone = $_POST['telephone'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirm-password'];

if($password == $confirmPassword){
    // $hashPassword = password_hash($password, PASSWORD_DEFAULT);
    $hashPassword = md5($password);

    try{
        // Check if the email already exists in the database
        if (checkUserByEmail($email)) {
            echo "User with email $email already exists.";
            exit();
        }else{
        $sql = "INSERT INTO customer (customerName, email, address, tpNumber, password) VALUES ('$name', '$email', '$address', '$telephone', '$hashPassword')";
        if(mysqli_query($conn, $sql)){
            echo "Registration successful";
            session_start();
            $_SESSION['message'] = "Registration successful. Please login to continue.";    
            header("Location:login.php");
            exit();
        }else{
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        }
    }catch(Exception $e){
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
else{
    echo "Passwords do not match";
    exit();
}  

//Check if the email already exists in the database
function checkUserByEmail($email) {
    try {
        
        $conn = new PDO("mysql:host=localhost;dbname=hotel", "root", "");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM customer WHERE email = :email";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":email", $email, PDO::PARAM_STR);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return ($result !== false);
    } catch (PDOException $e) {
        return false; 
    }
}


?>
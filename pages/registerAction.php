<?php
// Connect to the database
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$telephone = $_POST['telephone'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirm-password'];

    // hash the password
    $password = password_hash($password, PASSWORD_DEFAULT);

$conn = new mysqli("localhost", "root", "", "hotel");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    // echo "Connected successfully";
    $stmt = $conn->prepare("insert into customer(customerName, email, address, tpNumber, password, confirmPassword) values(?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $name, $email, $address, $telephone, $password, $confirmPassword);
    $stmt->execute();
    echo "<script>alert('Registration Successful!')</script>";
    echo "<script>window.location = 'register.php'</script>";
    $stmt->close();
    $conn->close();

   
}

// Check if the passwords match
if ($password != $confirmPassword) {
    echo "<script>alert('Passwords do not match!')</script>";
    echo "<script>window.location = 'register.php'</script>";
    exit();
}

// Hash the



?>
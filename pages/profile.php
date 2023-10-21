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
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>King Meal Restaurant</title>
    <link rel="icon" type="image/x-icon" href="images/title.png" sizes="22x22">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="../css/profile.css">
    <script src="../js/dashboard.js"></script>
</head>
<body>
    <!-- Header section -->
    <header>
        <img src="../images/kingmeal.png" width="140" height="100">
        <ul class="navlist">
            <li><a href="../index.php">Home</a></li>
            <li><a href="#menu">Menu</a></li>
            <li><a href="#services">Promotion & Discount</a></li>
            <div class="dropdown">
                <button class="dropbtn-">Profile</button>
                <div class="dropdown-content">
                    <a href="#" class="active">Profile</a>
                    <a href="register.php">Register</a>
                    <a href="loging.php">Login</a>
                </div>
            </div>
            <li><a href="#contact">Contact</a></li>
            <li><a href="cart.php"><i style="font-size:24px" class="fa">&#xf07a;</i></a></li>
        </ul>
        <div class="bx bx-menu" id="menu-icon"></div>
    </header>

    <!-- Two-column layout with user profile sidebar -->
    <div class="container">
        <!-- Content area with two columns -->
        <main class="content">
            <section class="profile" id="profile">
                <div class="main-text">
                    <h2>Profile <span></span></h2>
                </div>
            </section>
            <section>
                
    <div class="sidenav">
    <div class="logo">
        <img src="../images/profile.png" alt="Your Logo">
        
    </div>
    <?php
                        // Connect to the database and retrieve menu items
                        $db = new mysqli("localhost", "root", "", "hotel");
                        $query = "SELECT * FROM customer WHERE email = '$userEmail'";
                        $result = $db->query($query);

                        // Loop through menu items and display them as cards
                        while ($row = $result->fetch_assoc()) {
                            
                            // echo '<img src="' . $row['itemImage'] . '" alt="' . $row['itemName'] . '">';
                            
                            echo '<p>' . $row['customerName'] . '</p>';
                            echo '<p>' . $row['email'] . '</p>';
                            echo '<p>' . $row['address'] . '</p>';
                            echo '<p>' . $row['tpNumber'] . '</p>';                            
                            echo '</div>';
                        
                        }
                        ?>

</div>
                <!-- Add content for the two columns here -->
                <div class="column">
                    <h3>Column 1</h3>
                    <p>This is the content of the first column.</p>
                </div>
                <div class="column">
                    <h3>Column 2</h3>
                    <p>This is the content of the second column.</p>
                </div>
            </section>
        </main>
    </div>


    <!-- Footer section -->
    <!-- <section class="end">
        <div class="last-text">
            <p style="text-align: center;">© COPYRIGHT 2023 | KING MEAL FAMILY RESTAURANT | ALL RIGHTS RESERVED.</p>
        </div>
    </section> -->
    <!-- Custom JS link -->
    <script type="text/javascript" src="../js/script.js"></script>
</body>
</html>

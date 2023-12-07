<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/dashboard.css">
    <script src="../js/dashboard.js"></script>
</head>

<body>

    <div class="topnav">
        <h1 class="page-name">Dashboard</h1>
        <div class="search-bar">
            <input type="text" placeholder="Search...">
        </div>
    </div>

    <div class="sidenav">
        <div class="logo">
            <img src="../images/kingmeal.png" alt="Your Logo">
            <h1>King Meal<br>Family Restaurant</h1>
        </div>
        <a href="../index.php">Home</a>
        <a href="../index.php#menu">Menu</a>
        <a href="../index.php#contact">Contact</a>
        <a href="chasier.php" >Cashier</a>
        <a href="kitchen.php" >kitchen</a>


        <a href="login.php">Login</a>
        <a href="register.php">Register</a>
        <a href="profile.php">Profile</a>
    </div>

    <div class="main">
        <div class="card-row">
            <!-- Card 1 -->
            <div class="card" data-card-id="1">
                <div class="card-header">
                    <img src="icon.png" alt="Card Icon">
                    <h2>Top Menu Items.</h2>
                </div>
                <!-- Card Content and Footer are removed -->
            </div>

            <!-- Card 2 -->
            <div class="card" data-card-id="2">
                <div class="card-header">
                    <img src="icon.png" alt="Card Icon">
                    <h2>Top Customers</h2>
                </div>
                <!-- Card Content and Footer are removed -->
            </div>

            <!-- Card 3 -->
            <div class="card" data-card-id="3">
                <div class="card-header">
                    <img src="icon.png" alt="Card Icon">
                    <h2>Top Tables</h2>
                </div>
                <!-- Card Content and Footer are removed -->
            </div>

            <!-- Card 4 -->
            <div class="card" data-card-id="4">
                <div class="card-header">
                    <img src="icon.png" alt="Card Icon">
                    <h2>Average Cost</h2>
                </div>
                <!-- Card Content and Footer are removed -->
            </div>

            <!-- Card 5 -->
            <div class="card" data-card-id="5">
                <div class="card-header">
                    <img src="icon.png" alt="Card Icon">
                    <h2>Average Time</h2>
                </div>
                <!-- Card Content and Footer are removed -->
            </div>
        </div>


    </div>

    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2>Database Tables</h2>
            <div id="table-data"></div>
        </div>
    </div>

</body>

</html>
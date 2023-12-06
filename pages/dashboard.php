<!DOCTYPE html>
<html>
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
        <h1>King Meal<br>Family Restuarant</h1>
    </div>
    <a href="../index.php">Home</a>
    <a href="../index.php">Menu</a>
    <a href="../index.php">Contact</a>
    <a href="login.php">Login</a>
    <a href="register.php">Register</a>
    <a href="profile.php">Profile</a>
    <a href="dashboard.php" class="active">Dashboard</a>
</div>

<div class="main">
    <div class="card-row">
        <!-- Card 1 -->
        <div class="card">
            <div class="card-header">
                <img src="icon.png" alt="Card Icon">
                <h2>Top Menu Items.</h2>
            </div>
            <div class="card-content">
                <p>This is the content of the card.</p>
            </div>
            <div class="card-footer">
                <p>Card Footer</p>
            </div>
        </div>
        
        <!-- Card 2 -->
        <div class="card">
            <div class="card-header">
                <img src="icon.png" alt="Card Icon">
                <h2>Top Menu Items.</h2>
            </div>
            <div class="card-content">
                <p>This is the content of the card.</p>
            </div>
            <div class="card-footer">
                <p>Card Footer</p>
            </div>
        </div>
        
        <!-- Card 2 -->
        <div class="card">
            <div class="card-header">
                <img src="../images/promo/kingmeal.png" alt="Card Icon">
                <h2>Top Menu Items.</h2>
            </div>
            <div class="card-content">
                <p>This is the content of the card.</p>
            </div>
            <div class="card-footer">
                <p>Card Footer</p>
            </div>
        </div>
        
        <!-- Card 4 -->
        <div class="card">
            <div class="card-header">
                <img src="icon.png" alt="Card Icon">
                <h2>One Person AVG Cost</h2>
            </div>
            <div class= "card-content">
                <p>This is the content of the card.</p>
            </div>
            <div class="card-footer">
                <p>Card Footer</p>
            </div>
        </div>
        
        <!-- Card 2 -->
        <div class="card">
            <div class="card-header">
                <img src="icon.png" alt="Card Icon">
                <h2>Top Menu Items.</h2>
            </div>
            <div class="card-content">
                <p>This is the content of the card.</p>
            </div>
            <div class="card-footer">
                <p>Card Footer</p>
            </div>
        </div>
    </div>
</div>
<!--
<div class="card" id="database-card">
    <div class="card-header">
        <img src="110.png" alt="Card Icon">
        <h2>Database Tables</h2>
    </div>
    <div class="card-content">
        <button onclick="loadDatabaseTables()">Load Tables</button>
        <div id="table-data"></div>
    </div>
    <div class="card-footer">
        <p>Card Footer</p>
    </div>
</div>-->

<!-- Add this code within your <body> element -->
<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h2>Database Tables</h2>
        <div id="table-data"></div>
    </div>
</div>





</body>
</html>

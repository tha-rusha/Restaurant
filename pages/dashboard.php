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
    <a href="#">Menu</a>
    <a href="#">Contact</a>
    <a href="#">Login</a>
    <a href="#">Register</a>
    <a href="#">Profile</a>
    <a href="#">Dashboard</a>
</div>

<div class="main">
    <div class="card-row">
        <!-- Card 1 -->
        <div class="card">
            <div class="card-header">
                <img src="icon.png" alt="Card Icon">
                <h2>Top Customer.</h2>
            </div>
            <div class="card-content">
                <p>Top Customer.</p>
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
        
        <!-- Card 3 -->
        <div class="card">
            <div class="card-header">
                <img src="icon.png" alt="Card Icon">
                <h2>Top Table</h2>
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
        
        <!-- Card 5 -->
        <div class="card">
            <div class="card-header">
                <img src="icon.png" alt="Card Icon">
                <h2>AVG Order Processing Time</h2>
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
</div>


</body>
</html>

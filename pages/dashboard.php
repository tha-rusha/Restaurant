<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/dashboard.css">
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
        <img src="images/logod.png" alt="Your Logo">
        <h1>Your Restaurant Name</h1>
    </div>
    <a href="#">Dashboard</a>
    <a href="#">Cashier</a>
    <a href="#">Kitchen</a>
    <a href="#">Sign Up</a>
</div>

<div class="main">
    <div class="card-row">
        <!-- Card 1 -->
        <div class="card">
            <div class="card-header">
                <img src="icon.png" alt="Card Icon">
                <h2>Card Title</h2>
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
                <h2>Card Title</h2>
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
                <h2>Card Title</h2>
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
                <h2>Card Title</h2>
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
                <h2>Card Title</h2>
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
        <img src="icon.png" alt="Card Icon">
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

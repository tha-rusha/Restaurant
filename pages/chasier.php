<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/dashboard.css">
    <script src="../js/dashboard.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<header>
    <img src="../images/kingmeal.png" width="140" height="100" >

    
    
        <ul class="navlist">
        <li><a href="pages/chasier.php">Ca </a></li>
        <li><a href="pages/dashboard.php" class="active">admin</a></li>
            <li><a href="../index.php" class="active">Home</a></li>
            <li><a href="#menu">Menu </a></li>
            <li><a href="#services">Promotion & Discount</a></li>
            <div class="dropdown">
  <button class="dropbtn-">Profile</button>
  <div class="dropdown-content">
    <a href="#">Profile</a>
    <a href="pages/register.php">Register</a>
    <a href="pages/loging.php">Login</a>
  </div>
</div>
            <li><a href="#contact">Contact</a></li>  
            <li><a href="pages/cart.php"><i style="font-size:24px" class="fa">&#xf07a;</i></a></li>
        </ul>
        <div class="bx bx-menu" id="menu-icon">    

        <div class="header-content">
        
    </header>
<br>
<section class=search>
<!-- <div class="topnav"> -->
    <h1 class="page-name">Dashboard</h1>
    <div class="search-bar">
        <input type="text" placeholder="Search...">
    </div>
<!-- </div> -->
</section>

<div class="sidenav">
    <div class="logo">
        <img src="../images/kingmeal.png" alt="Your Logo">
        <h1>King Meal<br>Family Restuarant</h1>
    </div>
    <a href="../index.php">Customer</a>
    <a href="#">Menu</a>
    <a href="#">Profile</a>
    <a href="#">Help</a>
</div>

<div class="sidenav-r">
<div class="sidebar right">
    <h2>Order</h2>
      
      <table class="order-table">
        <thead>
          <tr>
            <th>Item</th>
            <th>Quantity</th>
            <th>Price</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <br>
      <h2> Your Order </h2>
      <div class="order-total">
        
        <table class="order-total-table"><br>
          <tr>
            <th></th>
            <td></td>
          </tr>
          <tr>
            <th>Sub Total</th>
            <td>:</td>
          </tr>
          <tr>
            <th>Discount</th>
            <td>:</td>
          </tr>
          <tr>
         <th>Total</th>
            <td>:</td>
          </tr>

        </table>
        
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

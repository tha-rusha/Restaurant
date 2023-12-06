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



    <style>
    .row {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .box {
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        margin: 10px;
    }
</style>

<div class="row">
    <?php
    $imagePaths = array("101.png", "102.png", "103.png", "104.png", "105.png");
    $altTexts = array("Image 1", "Image 2", "Image 3", "Image 4", "Image 5");

    for ($i = 0; $i < count($imagePaths); $i++) {
        echo '<div class="box">';
        echo '<img src="' . $imagePaths[$i] . '" alt="' . $altTexts[$i] . '">';
        echo '</div>';
    }
    ?>
</div>

<div class="row">
    <?php
    $imagePaths = array("image3.jpg", "image3.jpg", "image3.jpg", "image3.jpg", "image3.jpg");
    $altTexts = array("Image 6", "Image 7", "Image 8", "Image 9", "Image 10");

    for ($i = 0; $i < count($imagePaths); $i++) {
        echo '<div class="box">';
        echo '<img src="' . $imagePaths[$i] . '" alt="' . $altTexts[$i] . '">';
        echo '</div>';
    }
    ?>
</div>






<style>
        .search-bar {
            position: absolute;
            top: 100px;
            right: 10px;
        }
    </style>

<header>
    <img src="../images/kingmeal.png" width="140" height="100" >
        <ul class="navlist">
        <li><a href="chasier.php" class="active">Cashier </a></li>
        <li><a href="dashboard.php">admin</a></li>
            <li><a href="../index.php">Home</a></li>
            <li><a href="../index.php#menu">Menu </a></li>
            <li><a href="promo.php">Promotion & Discount</a></li>
            <div class="dropdown">
  <button class="dropbtn-">Profile</button>
  <div class="dropdown-content">
    <a href="profile.php">Profile</a>
    <a href="register.php">Register</a>
    <a href="login.php">Login</a>
  </div>
</div>
            <li><a href="../index.php#contact">Contact</a></li>  
            <li><a href="cart.php"><i style="font-size:24px" class="fa">&#xf07a;</i></a></li>
        </ul>
        <div class="bx bx-menu" id="menu-icon">    

        <div class="header-content">
        
    </header>
<br>
<section class=search>
<!-- <div class="topnav"> -->
   
    <div class="search-bar" >
        <input type="text" placeholder="Search..." >
    </div>
<!-- </div> -->
</section>


<a href="dashboard.php" style="display: inline-block; padding: 10px 20px; background-color: #0077FF; color: #FFFFFF; text-align: center; text-decoration: none; border: 2px solid #0077FF; border-radius: 5px;">
        <img src="/images/kingmeal.png" alt="Button Image" style="width: 100px; height: 100px;">
    </a>

<div class="sidenav">
    <div class="logo">
        <img src="../images/kingmeal.png" alt="Your Logo">
        <h1>King Meal<br>Family Restuarant</h1>
    </div>
    <a href="../index.php" style="margin-top: 10px;">Customer</a>
    <a href="../index.php#menu" style="margin-top: 20px;">Menu</a>
    <a href="profile.php" style="margin-top: 20px;">Profile</a>
    <a href="#" style="margin-top: 20px;">Help</a>
</div>

<!-- Rest of your HTML code -->
<<<<<<< Updated upstream
<div class="menu-cards">
    <?php
        // Connect to the database and retrieve promotion items
        $db = new mysqli("localhost", "root", "", "hotel");
        $query = "SELECT * FROM menu";
        $result = $db->query($query);

        // Loop through promotion items and display them as cards
        while ($row = $result->fetch_assoc()) {
            echo '<div class="menu-card">';
            echo '<img src="../'. $row['itemImage'] . '" alt="' . $row['itemName'] . '">';
            echo '<h3>' . $row['itemName'] . '</h3>';
            echo '<p>' . $row['description'] . '</p>';
            echo '<p>Price: $' . $row['price'] . '</p>';
            echo '<a href=#" class="order-button">Order Now</a>';
            echo '<button class="add-to-cart-button" >Add to Cart</button>';
            echo '</div>';
        }
        ?>
    </div>
=======
<!--

<div class="center" style="text-align: center;">
    <img src="../images/101.png" width="200" height="400" alt="Pasta">
</div>  -->
>>>>>>> Stashed changes

<!-- Rest of your HTML code -->




<div class="sidenav-r" style="width: 250px; height: 100%; position: fixed; top: 0; right: 0; background-color: #333; overflow-y: scroll;">
    <div class="sidebar right" style="padding: 20px; color: #fff;">


    <h2>Order Your Items </h2>
      
    <table class="order-table" style="width: 100%; border-collapse: collapse; margin-top: 20px;">
    <thead>
        <tr>
            <th style="padding: 10px; text-align: left; border-bottom: 1px solid #000;">Item</th>
            <th style="padding: 10px; text-align: center; border-bottom: 1px solid #000;">Quantity</th>
            <th style="padding: 10px; text-align: center; border-bottom: 1px solid #000;">Price</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="padding: 10px; text-align: left; border-bottom: 1px solid #ccc;"></td>
            <td style="padding: 10px; text-align: center; border-bottom: 1px solid #ccc;"></td>
            <td style="padding: 10px; text-align: center; border-bottom: 1px solid #ccc;"></td>
        </tr>
        <tr>
            <td style="padding: 10px; text-align: left; border-bottom: 1px solid #ccc;"></td>
            <td style="padding: 10px; text-align: center; border-bottom: 1px solid #ccc;"></td>
            <td style="padding: 10px; text-align: center; border-bottom: 1px solid #ccc;"></td>
        </tr>
        <tr>
            <td style="padding: 10px; text-align: left; border-bottom: 1px solid #ccc;"></td>
            <td style="padding: 10px; text-align: center; border-bottom: 1px solid #ccc;"></td>
            <td style="padding: 10px; text-align: center; border-bottom: 1px solid #ccc;"></td>
        </tr>
        <tr>
            <td style="padding: 10px; text-align: left; border-bottom: 1px solid #ccc;"></td>
            <td style="padding: 10px; text-align: center; border-bottom: 1px solid #ccc;"></td>
            <td style="padding: 10px; text-align: center; border-bottom: 1px solid #ccc;"></td>
        </tr>
    </tbody>
</table>

<h2 style="margin-top: 20px;"> Your Order </h2>
<div class="order-total">
    <table class="order-total-table" style="width: 100%; border-collapse: collapse; margin-top: 10px;">
        <tr>
            <th style="padding: 20px; text-align: left; border-bottom: 1px solid #000;"></th>
            <td style="padding: 20px; text-align: right; border-bottom: 1px solid #000;"></td>
        </tr>
        <tr>
            <th style="padding: 20px; text-align: left; border-bottom: 1px solid #000;">Sub Total  :</th>
     
        </tr>
        <tr>
            <th style="padding: 20px; text-align: left; border-bottom: 1px solid #000;">Discount  :</th>
            
        </tr>
        <tr>
            <th style="padding: 20px; text-align: left;">Total  :</th>
            
        </tr>
    </table>
</div>

        
      </div>
      
      <button style="background-color: orange; color: black; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; font-size: 16px; font-weight: bold; margin-top: 20px; margin-left: auto; margin-right: auto; display: block;">Place Order</button>


        <!-- Your content here -->
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

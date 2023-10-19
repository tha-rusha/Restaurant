<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>King Meal Restuarant </title>
    <!-- <link rel="icon" href="images/title.png" type="image/gif" sizes="18x18"> -->
    <link rel="icon" type="image/x-icon" href="images/title.png" sizes="22x22">
    <!-- custom css link -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- fonts end -->
    <!-- Multiple font families -->
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
  
    </head>
    <body>

    <!-- header section -->
    <header>
    <img src="images/kingmeal.png" width="140" height="100" >
    
        <ul class="navlist">
            <li><a href="#home">Home</a></li>
            <li><a href="#menu">Menu </a></li>
            <li><a href="#services" class="active">Promotion & Discount</a></li>
            <div class="dropdown">
  <button class="dropbtn">Profile</button>
  <div class="dropdown-content">
    <a href="#">Profile</a>
    <a href="pages/register.php">Register</a>
    <a href="pages/login.php">Login</a>
  </div>
</div>
            <li><a href="#contact">Contact</a></li>
        </ul>

    
        <div class="bx bx-menu" id="menu-icon">
            
    </header>

    <!-- promotion and discount section -->
<section class="services" id="services">
    <div class="main-text">
        <h2>Promotions & <span>Discounts</span></h2>
    </div>
    <div class="promotion-cards">
    <?php
        // Connect to the database and retrieve promotion items
        $db = new mysqli("localhost", "root", "", "hotel");
        $query = "SELECT * FROM promotion";
        $result = $db->query($query);

        // Loop through promotion items and display them as cards
        while ($row = $result->fetch_assoc()) {
            echo '<div class="promotion-card">';
            echo '<img src="' . $row['itemImage'] . '" alt="' . $row['itemName'] . '">';
            echo '<h3>' . $row['itemName'] . '</h3>';
            echo '<p>' . $row['description'] . '</p>';
            echo '<p>Price: $' . $row['price'] . '</p>';
            echo '<a href=#" class="order-button">Order Now</a>';
            echo '<button class="add-to-cart-button" >Add to Cart</button>';
            echo '</div>';
        }
        ?>
    </div>
     
    </section>

    <!-- end section -->
    <section class="end">
        <div class="last-text">
        <p style="text-align: center;"> © COPYRIGHT 2023 | KING MEAL FAMILY RESTUARANT | ALL RIGHTS RESERVED.</p>
        </div>
        

    </section>
      
    <!-- custom js link -->
    <script type="text/javascript" src="js/script.js"></script> 

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>      -->
    </body>
</html>
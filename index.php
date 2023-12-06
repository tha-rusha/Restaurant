

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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
  
    <script type="text/javascript" src="js/tscript.js"></script> 

    </head>
    <body>

    <!-- header section -->
    <header>
    <img src="images/kingmeal.png" width="140" height="100" >
    
        <ul class="navlist">
        <li><a href="pages/chasier.php">Ca </a></li>
        <li><a href="pages/dashboard.php" class="active">admin</a></li>
            <li><a href="#home" class="active">Home</a></li>
            <li><a href="#menu">Menu </a></li>
            <li><a href="pages/promo.php">Promotion & Discount</a></li>
            <div class="dropdown">
  <button class="dropbtn-">Profile</button>
  <div class="dropdown-content">
    <a href="pages/profile.php">Profile</a>
    <a href="pages/register.php">Register</a>
    <a href="pages/login.php">Login</a>
  </div>
</div>
            <li><a href="#contact">Contact</a></li>
            <li><a href="pages/cart.php"><i style="font-size:24px" class="fa">&#xf07a;</i></a></li>

        </ul>

    
        <div class="bx bx-menu" id="menu-icon">
            
    </header>

    <!-- home section  -->
    <section class="home" id="home">
        <div class="home-text">
            <div class="slide">
                <span class="one">Hello,</span>
                
            </div>
            <H1>King Meal Family Restuarant</H1>
            <h2>Welcome to King Meal Restaurant <span class="text"></span></h2>
            <p>Kings Meal is a restaurant that serves a variety of delicious meals. <br>  Royal Culinary Journey Awaits! <br> Indulge in a Feast of Flavors Fit for Kings and Queens.<br> Experience the Magic of Fine Dining at Its Best.
            <div class="buttons">
                <a href="#menu" class="btn">Menu</a>
                <a href="#portfolio" class="btn2"><span><i class='bx bx-play'></i></span>Order Now</a>
        </div>
        <!-- multiple font families js -->
        <script>
            var typed = new Typed('.text', {
                strings: ["Mains","Beverages" , "Starters", "Desserts"],
                typeSpeed: 100,
                backSpeed: 100,
                loop: true
            });
        </script>
        <!-- multiple font families js end -->
    </section>

    <!-- bussiness intelligent section  -->
    <section class="special" id="special">
        <div class="main-text"> 
            <h2>Special <span>Items</span></h2>
        </div>

    <div class="row">
        <div class="column" style="background-color:#aaa;">
            <h2>Today's Special</h2>
                    <div class="special-cards">
                    <!-- Use server-side scripting (e.g., PHP) to fetch and display menu items here -->
                        <?php
                        // Connect to the database and retrieve menu items
                        $db = new mysqli("localhost", "root", "", "hotel");
                        $query = "SELECT * FROM todayspecial WHERE itemCode = '101'";
                        $result = $db->query($query);

                        // Loop through menu items and display them as cards
                        while ($row = $result->fetch_assoc()) {
                            echo '<div class="special-card">';
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
                </div>

  <div class="column" style="background-color:#bbb;">
    <h2>Today Top Pick</h2>
    <p>Some text..</p>
  </div>

  <div class="column" style="background-color:#ccc;">
    <h2>This Month Top Pick</h2>
    <p>Some text..</p>
  </div>
</div>
     
    </section>

     <!-- Menu section  -->

     <section class="menu" id="menu">
        <main>
        <div class="main-text"> 
            <h2>Menu <span>Items</span></h2>
        </div>
        
        
        <div class="menu-cards">
        <ul id="cart-items"></ul>

            <!-- Use server-side scripting (e.g., PHP) to fetch and display menu items here -->
            <!--  Example using PHP: -->
            <?php
                // Connect to the database and retrieve menu items
                $db = new mysqli("localhost", "root", "", "hotel");
                $query = "SELECT * FROM menu";
                $result = $db->query($query);

              

                // Loop through menu items and display them as cards
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="menu-card">';
                    echo '<img src="' . $row['itemImage'] . '" alt="' . $row['itemName'] . '">';
                    echo '<h3>' . $row['itemName'] . '</h3>';
                    echo '<p>' . $row['description'] . '</p>';
                    echo '<p>Price: $' . $row['price'] . '</p>';
                    // Add the "Order Now" button with a link
                    echo '<a href=#" class="order-button">Order Now</a>';
                    $itemCode = $row['itemCode'];
                    $itemName = $row['itemName'];
                    $price = $row['price'];
                    echo '<button class="add-to-cart-button" onclick="addToCart(\'Sunil\',12.50)">Add to Cart</button>';
                    echo '</div>';
                }
            ?>
            <!-- -->
        </div>
        </div>
    </main>

    </section> 
    
    <!-- end section -->
    <!-- Contact section  -->
    
    <section class="contact" id="contact">
        <div class="contact-text">
            <h2>Contact <span>Us!</span></h2>
            <h4>Let's Connect and Collaborate</h4>
            <p>Have a project in mind? Want to collaborate? Or just want to say hello? Feel free to reach out to me via email or social media. I'm always open to new opportunities and connections!</p>
            <div class="list">

                <li><i class='bx bx-mobile-alt'></i> <a href="#">0113 629 630</a></li>
                <li><i class='bx bx-map' ></i><a href="#">King Meals restaurant,<br> No.11/2/1A, <br>Padukka Road,<br> Godagama,<br> Meegoda.</a></li>
                
                
            </div>
            
        </div>
        <div class="contact-form">
            <form action="feedbackAction.php" id="contactForm" method="POST">
                <h2>Feedback<div class="lds-ripple"><div></div><div></div></div></h2><br>
                
                <div class="alert">Your Message Sent !</div>
                <!-- <div class="error">Something Went Wrong !</div> -->
                <div class="inputBox">          
                    <input type="text" id="name" placeholder="Your Name" name="name" required>
                </div>
                <div class="inputBox">
                    <input type="text" id="email" placeholder="Your Email" name="email" required>
                </div>
                <div class="inputBox">
                    <input type="text" id="mobile" placeholder="Your Mobile Number" name="mobile" required>
                </div>
                <div class="inputBox">
                <textarea name="msgContent" id="msgContent" cols="35" rows="10" placeholder="How Can I Help You?" required></textarea>
                </div>
                <div class="inputBox">
                    <button type="submit" value="Send Message" class="btn" required>Submit</button>
                
                </div>
            </form>

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
    <!-- <script type="text/javascript" src="js/tscript.js"></script>  -->


    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>      -->
    <script>
        // Initialize an empty cart array to store selected items
        let cart = [];

        // Function to add an item to the cart
        function testFunc(itemCode, itemName, price) {
            cart.push({ code:itemCode, name: itemName, price: price});
            console.log(cart);
            
            alert("Item added to cart");
        }

        // function feedback(){
        //     arlet ("feedback sent");
        // }

    </script>


</body>
</html>

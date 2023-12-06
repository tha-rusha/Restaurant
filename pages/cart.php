<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>King Meal Restuarant </title>
    <!-- <link rel="icon" href="images/title.png" type="image/gif" sizes="18x18"> -->
    <link rel="icon" type="image/x-icon" href="images/title.png" sizes="22x22">
    <!-- custom css link -->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/cart.css">


    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- fonts end -->
    <!-- Multiple font families -->
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    <!-- Add your CSS styles here -->
   
</head>
<body>


 <!-- header section -->
 <header>
    <img src="../images/kingmeal.png" width="140" height="100" >
    
        <ul class="navlist">
            <li><a href="../index.php">Home</a></li>
            <li><a href="#menu">Menu </a></li>
            <li><a href="promo.php" >Promotion & Discount</a></li>
            <div class="dropdown">
  <button class="dropbtn">Profile</button>
  <div class="dropdown-content">
    <a href="profile.php">Profile</a>
    <a href="pages/register.php">Register</a>
    <a href="pages/login.php">Login</a>
  </div>
</div>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#" class="active"><i style="font-size:24px" class="fa">&#xf07a;</i></a></li>
        </ul>

    
        <div class="bx bx-menu" id="menu-icon">
            
    </header>

    <!-- promotion and discount section -->
<section class="services" id="services">
    <div class="main-text">
        <h2>Cart <span>Items</span></h2>
    </div>



    <div id="cart-container">
        <!-- Cart items will be displayed here dynamically -->
    </div>

    <p>Total: $<span id="cart-total">0.00</span></p>
    

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Retrieve cartItems from localStorage
            const cartItems = getCartFromStorage() || [];

            // Display cart items on the cart.php page
            const cartContainer = document.getElementById('cart-container');
            const cartTotal = document.getElementById('cart-total');

            // Check if the cart is empty
            if (cartItems.length === 0) {
                const emptyCartMessage = document.createElement('p');
                emptyCartMessage.textContent = 'Your cart is empty.';
                cartContainer.appendChild(emptyCartMessage);
            } else {
                // Create an unordered list for cart items
                const cartList = document.createElement('ul');

                // Iterate through each item in the cart
                cartItems.forEach(item => {
                    const listItem = document.createElement('li');
                    listItem.innerHTML = `
                        <div style="border-bottom: 1px solid #ddd">
                            <p>Item Code: ${item.name}</p>
                            <p>Item Name: ${item.price}</p>
                        </div>
                        <button onclick="removeItemFromCart('${item.name}, ${item.price}')">Remove</button>
                    `;
                    cartList.appendChild(listItem);
                });

                // Append the cart list to the container
                cartContainer.appendChild(cartList);
            }

            // Calculate and display the total price
            const total = cartItems.reduce((acc, item) => acc + item.price, 0);
            cartTotal.textContent = total;
        });

        function getCartFromStorage() {
            // Retrieve cartItems from localStorage
            const cartItems = localStorage.getItem('cart');

            // Convert cartItems from JSON to JavaScript object
            const cartItemsObj = JSON.parse(cartItems);

            // Return cartItemsObj
            return cartItemsObj;
        }

        function removeItemFromCart(itemCode) {
            // Retrieve cartItems from localStorage
            let cartItems = getCartFromStorage() || [];

            // Remove the item with the specified code from the cart
            cartItems = cartItems.filter(item => item.code !== itemCode);

            // Save the updated cartItems to localStorage
            localStorage.setItem('cart', JSON.stringify(cartItems));

            // Reload the page to reflect the changes
            location.reload();
        }
    </script>
    
    <!-- end section -->
    <section class="end">
        <div class="last-text">
        <p style="text-align: center;"> © COPYRIGHT 2023 | KING MEAL FAMILY RESTUARANT | ALL RIGHTS RESERVED.</p>
        </div>
    </section>
      
    <!-- custom js link -->
    <script type="text/javascript" src="../js/script.js"></script> 

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>      -->

</body>
</html>

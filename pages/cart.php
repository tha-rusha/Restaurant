<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <!-- Add your CSS styles here -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
        }

        #cart-container {
            width: 80%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            display: flex;
            justify-content: space-between;
        }

        p {
            font-size: 18px;
        }

        #cart-total {
            font-size: 20px;
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <h1>Shopping Cart</h1>

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
                        <div>
                            <p>${item.name}</p>
                            <p>Price: $${item.price.toFixed(2)}</p>
                        </div>
                        <button onclick="removeItem('${item.code}')">Remove</button>
                    `;
                    cartList.appendChild(listItem);
                });

                // Append the cart list to the container
                cartContainer.appendChild(cartList);
            }

            // Calculate and display the total price
            const total = cartItems.reduce((acc, item) => acc + item.price, 0);
            cartTotal.textContent = total.toFixed(2);
        });

        function getCartFromStorage() {
            // Retrieve cartItems from localStorage
            const cartItems = localStorage.getItem('cart');

            // Convert cartItems from JSON to JavaScript object
            const cartItemsObj = JSON.parse(cartItems);

            // Return cartItemsObj
            return cartItemsObj;
        }

        function removeItem(itemCode) {
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

</body>
</html>

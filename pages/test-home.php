<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Restaurant Menu</title>
    <link rel="stylesheet" href="../css/tstyles.css">
</head>
<body>

    <h1>Menu</h1>

    <div class="menu-item" id="item1">
        <h2>Item 1</h2>
        <p>Description of Item 1</p>
        <p>Price: $10.00</p>
        <button onclick="addToCart('Item 1', 10.00)">Add to Cart</button>
    </div>

    <div class="menu-item" id="item2">
        <h2>Item 2</h2>
        <p>Description of Item 2</p>
        <p>Price: $15.00</p>
        <button onclick="addToCart('Item 2', 15.00)">Add to Cart</button>
    </div>

    <!-- Add more menu items as needed -->

    <div id="cart">
        <h2>Shopping Cart</h2>
        <ul id="cart-items">
            <!-- Cart items will be displayed here dynamically -->
        </ul>
        <p>Total: $<span id="cart-total">0.00</span></p>
    </div>

    <script src="../js/tscript.js"></script>
</body>
</html>

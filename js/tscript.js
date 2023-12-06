let cartItems = [];

function addToCart(itemName, itemPrice) {
    const item = { name: itemName, price: itemPrice };
    cartItems.push(item);
    updateCart();
}

function updateCart() {
    const cartList = document.getElementById('cart-items');
    const cartTotal = document.getElementById('cart-total');
    
    // Clear the existing cart items
    cartList.innerHTML = '';

    // Display the updated cart items
    cartItems.forEach(item => {
        const listItem = document.createElement('li');
        listItem.textContent = `${item.name} - $${item.price.toFixed(2)}`;
        cartList.appendChild(listItem);
    });

    // Calculate and display the total price
    const total = cartItems.reduce((acc, item) => acc + item.price, 0);
    cartTotal.textContent = total.toFixed(2);
}

// Define addToCart function
function addToCart(itemName, price) {
    console.log(`Adding to cart: ${itemName} ${price}`);
    const item = { name: itemName, price: price };
    cartItems.push(item);
    saveCartToStorage(cartItems); // Save to localStorage
    console.log('cartItems', cartItems);
}

// Define updateCart function
function updateCart() {
    // Your existing code for updating the cart
}

// Retrieve cartItems from localStorage on page load
let cartItems = getCartFromStorage() || [];

// Save cartItems to localStorage
function saveCartToStorage(cart) {
    localStorage.setItem('cart', JSON.stringify(cart));
}

// Retrieve cartItems from localStorage
function getCartFromStorage() {
    const storedCart = localStorage.getItem('cart');
    return storedCart ? JSON.parse(storedCart) : null;
}




// Define addToCart function
function addToCart(itemCode, itemName, price) {
    console.log(`Adding to cart: ${itemCode} ${itemName} ${price}`);
    const item = { code: itemCode ,name:  itemName, price: price };
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

//Remove item from cart
function removeItemFromCart(itemCode) {
    console.log(`Removing from cart: ${itemCode}`);
    const index = cartItems.findIndex(item => item.code === itemCode);
    cartItems.splice(index, 1);
    saveCartToStorage(cartItems); // Save to localStorage
    console.log('cartItems', cartItems);
    // Your existing code for removing an item from the cart
    
}




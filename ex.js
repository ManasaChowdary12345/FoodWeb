// script.js
document.addEventListener('DOMContentLoaded', () => {
    const cartItemsContainer = document.querySelector('.cart-items');
    const totalElement = document.getElementById('total');
    let cart = [];

    function addItemToCart(name, price) {
        const item = { name, price };
        cart.push(item);
        renderCart();
    }

    function removeItemFromCart(index) {
        cart.splice(index, 1);
        renderCart();
    }

    function calculateTotal() {
        return cart.reduce((total, item) => total + item.price, 0).toFixed(2);
    }

    function renderCart() {
        cartItemsContainer.innerHTML = ''; // Clear previous items
        cart.forEach((item, index) => {
            const cartItem = document.createElement('div');
            cartItem.classList.add('cart-item');
            cartItem.innerHTML = `
                <span>${item.name} - $${item.price.toFixed(2)}</span>
                <button onclick="removeItemFromCart(${index})">Remove</button>
            `;
            cartItemsContainer.appendChild(cartItem);
        });
        totalElement.textContent = calculateTotal();
    }

    // Example items to add to cart
    addItemToCart('Item 1', 10.99);
    addItemToCart('Item 2', 5.49);
    addItemToCart('Item 3', 14.99);

    // Expose removeItemFromCart to global scope
    window.removeItemFromCart = removeItemFromCart;
});
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 
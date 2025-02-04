<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Basket - Flip the Page</title>
    <style>
        /* Reset and base styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header styles */
        header {
            background-color: #000;
            color: #fff;
            padding: 20px 0;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
        }

        nav ul {
            display: flex;
            list-style: none;
        }

        nav ul li {
            margin-left: 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
        }

        /* Main content styles */
        main {
            padding: 40px 0;
        }

        .cart-title {
            font-size: 28px;
            margin-bottom: 20px;
            color: #000;
        }

        .cart-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }

        .cart-item {
            display: flex;
            border-bottom: 1px solid #e0e0e0;
            padding: 20px 0;
        }

        .cart-item:last-child {
            border-bottom: none;
        }

        .item-image {
            width: 100px;
            height: 150px;
            object-fit: cover;
            margin-right: 20px;
        }

        .item-details {
            flex-grow: 1;
        }

        .item-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .item-author {
            color: #666;
            margin-bottom: 10px;
        }

        .item-price {
            font-weight: bold;
            color: #e44d26;
        }

        .item-quantity {
            display: flex;
            align-items: center;
            margin-top: 10px;
        }

        .quantity-btn {
            background-color: #f0f0f0;
            border: none;
            width: 30px;
            height: 30px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .quantity-btn:hover {
            background-color: #e0e0e0;
        }

        .quantity-input {
            width: 40px;
            height: 30px;
            text-align: center;
            border: 1px solid #e0e0e0;
            margin: 0 5px;
        }

        .remove-item {
            color: #666;
            text-decoration: none;
            font-size: 14px;
            margin-top: 10px;
            display: inline-block;
        }

        .remove-item:hover {
            text-decoration: underline;
        }

        .cart-summary {
            margin-top: 30px;
            text-align: right;
        }

        .subtotal, .total {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .total {
            font-weight: bold;
            font-size: 24px;
            color: #e44d26;
        }

        .checkout-btn {
            background-color: #e44d26;
            color: #fff;
            border: none;
            padding: 15px 30px;
            font-size: 18px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .checkout-btn:hover {
            background-color: #d04323;
        }

        /* Delivery and Payment Styles */
        .delivery-payment-container {
            margin-top: 30px;
            border-top: 1px solid #e0e0e0;
            padding-top: 30px;
        }

        .section-tabs {
            display: flex;
            margin-bottom: 20px;
        }

        .section-tab {
            padding: 10px 20px;
            background-color: #f0f0f0;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .section-tab:hover {
            background-color: #e0e0e0;
        }

        .section-tab.active {
            background-color: #e44d26;
            color: #fff;
        }

        .section-content {
            display: none;
        }

        .section-content.active {
            display: block;
        }

        .delivery-option, .payment-option {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #e0e0e0;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .delivery-option:hover, .payment-option:hover {
            background-color: #f9f9f9;
        }

        .delivery-option input, .payment-option input {
            margin-right: 10px;
        }

        /* Footer styles */
        footer {
            background-color: #000;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        /* Responsive styles */
        @media (max-width: 768px) {
            .cart-item {
                flex-direction: column;
            }

            .item-image {
                margin-bottom: 20px;
            }

            .cart-summary {
                text-align: center;
            }

            .section-tabs {
                flex-direction: column;
            }

            .section-tab {
                margin-bottom: 10px;
            }
        }
    </style>
</head>
<body>
    <?php include_once('headerC.php'); ?>

    <main>
        <div class="container">
            <h1 class="cart-title">Your Basket</h1>
            <div class="cart-container">
                <div class="cart-item">
                    <img src="images/9781853260414.jpg" style="height:280px; width:186px;" alt="Book Cover" class="item-image">
                    <div class="item-details">
                        <h2 class="item-title">The Great Gatsby</h2>
                        <p class="item-author">F. Scott Fitzgerald</p>
                        <p class="item-price">₹9.99</p>
                        <div class="item-quantity">
                            <button class="quantity-btn minus">-</button>
                            <input type="number" value="1" min="1" class="quantity-input">
                            <button class="quantity-btn plus">+</button>
                        </div>
                        <a href="#" class="remove-item">Remove</a>
                    </div>
                </div>
                <div class="cart-item">
                    <img src="images/9781784752637.jpg" style="height:280px; width:186px;" alt="Book Cover" class="item-image">
                    <div class="item-details">
                        <h2 class="item-title">To Kill a Mockingbird</h2>
                        <p class="item-author">Harper Lee</p>
                        <p class="item-price">₹8.99</p>
                        <div class="item-quantity">
                            <button class="quantity-btn minus">-</button>
                            <input type="number" value="1" min="1" class="quantity-input">
                            <button class="quantity-btn plus">+</button>
                        </div>
                        <a href="#" class="remove-item">Remove</a>
                    </div>
                </div>
                <div class="cart-summary">
                    <p class="subtotal">Subtotal: ₹18.98</p>
                    <p class="total">Total: ₹18.98</p>
                </div>

                <div class="delivery-payment-container">
                    <div class="section-tabs">
                        <div class="section-tab active" data-section="delivery">Delivery</div>
                        <div class="section-tab" data-section="payment">Payment</div>
                    </div>

                    <div class="section-content active" id="delivery-section">
                        <h2>Choose Delivery Method</h2>
                        <div class="delivery-option">
                            <input type="radio" id="standard" name="delivery" value="standard" checked>
                            <label for="standard">Standard Delivery (3-5 business days) - ₹2.99</label>
                        </div>
                        <div class="delivery-option">
                            <input type="radio" id="express" name="delivery" value="express">
                            <label for="express">Express Delivery (1-2 business days) - ₹5.99</label>
                        </div>
                        <div class="delivery-option">
                            <input type="radio" id="pickup" name="delivery" value="pickup">
                            <label for="pickup">Store Pickup (Free)</label>
                        </div>
                    </div>

                    <div class="section-content" id="payment-section">
                        <h2>Choose Payment Method</h2>
                        <div class="payment-option">
                            <input type="radio" id="credit-card" name="payment" value="credit-card" checked>
                            <label for="credit-card">Credit Card</label>
                        </div>
                        <div class="payment-option">
                            <input type="radio" id="paypal" name="payment" value="paypal">
                            <label for="paypal">PayPal</label>
                        </div>
                        <div class="payment-option">
                            <input type="radio" id="bank-transfer" name="payment" value="bank-transfer">
                            <label for="bank-transfer">Bank Transfer</label>
                        </div>
                    </div>
                </div>

                <div class="cart-summary">
                    <button class="checkout-btn">Proceed to Checkout</button>
                </div>
            </div>
        </div>
    </main>

    <?php include_once('footer.php'); ?>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const quantityInputs = document.querySelectorAll('.quantity-input');
            const minusButtons = document.querySelectorAll('.minus');
            const plusButtons = document.querySelectorAll('.plus');
            const removeButtons = document.querySelectorAll('.remove-item');
            const sectionTabs = document.querySelectorAll('.section-tab');
            const sectionContents = document.querySelectorAll('.section-content');

            function updateTotal() {
                let total = 0;
                document.querySelectorAll('.cart-item').forEach(item => {
                    const price = parseFloat(item.querySelector('.item-price').textContent.replace('₹', ''));
                    const quantity = parseInt(item.querySelector('.quantity-input').value);
                    total += price * quantity;
                });
                document.querySelector('.subtotal').textContent = `Subtotal: ₹${total.toFixed(2)}`;
                document.querySelector('.total').textContent = `Total: ₹${total.toFixed(2)}`;
            }

            quantityInputs.forEach(input => {
                input.addEventListener('change', updateTotal);
            });

            minusButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const input = this.parentNode.querySelector('.quantity-input');
                    if (input.value > 1) {
                        input.value = parseInt(input.value) - 1;
                        updateTotal();
                    }
                });
            });

            plusButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const input = this.parentNode.querySelector('.quantity-input');
                    input.value = parseInt(input.value) + 1;
                    updateTotal();
                });
            });

            removeButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    this.closest('.cart-item').remove();
                    updateTotal();
                });
            });

            sectionTabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    const sectionId = this.getAttribute('data-section');
                    sectionTabs.forEach(t => t.classList.remove('active'));
                    sectionContents.forEach(c => c.classList.remove('active'));
                    this.classList.add('active');
                    document.getElementById(`${sectionId}-section`).classList.add('active');
                });
            });

            document.querySelector('.checkout-btn').addEventListener('click', function() {
                const selectedDelivery = document.querySelector('input[name="delivery"]:checked').value;
                const selectedPayment = document.querySelector('input[name="payment"]:checked').value;
                alert(`Proceeding to checkout with ${selectedDelivery} delivery and ${selectedPayment} payment method.`);
            });
        });
    </script>
</body>
</html>
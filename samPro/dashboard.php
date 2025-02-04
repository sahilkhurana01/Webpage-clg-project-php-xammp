<?php
session_start();

include 'connect.php';

$login_success = true;
if(isset($_POST['email']) && isset($_POST['password'])) {
    $mail = $_POST['email'];
    $pasw = md5($_POST['password']);

   
    $sql = "SELECT * FROM users WHERE email='$mail' AND password='$pasw'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
        $_SESSION['email'] = $row['email'];
        $_SESSION['firstName'] = $row['firstName'];  
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Flip the Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700&family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Open Sans', sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f0f4f8;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

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
            font-family: 'Merriweather', serif;
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
            font-weight: 600;
            transition: color 0.3s ease;
        }

        nav ul li a:hover {
            color: #e44d26;
        }

        main {
            padding: 40px 0;
        }

        .dashboard-grid {
            display: grid;
            grid-template-columns: 1fr 3fr;
            gap: 30px;
        }

        .sidebar {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .user-info {
            text-align: center;
            margin-bottom: 20px;
        }

        .user-avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .user-name {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .user-email {
            font-size: 14px;
            color: #666;
        }

        .sidebar-menu {
            list-style: none;
        }

        .sidebar-menu li {
            margin-bottom: 10px;
        }

        .sidebar-menu a {
            display: block;
            padding: 10px;
            background-color: #f0f4f8;
            color: #333;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .sidebar-menu a:hover {
            background-color: #e44d26;
            color: #fff;
        }

        .main-content {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .section-title {
            font-family: 'Merriweather', serif;
            font-size: 24px;
            margin-bottom: 20px;
            border-bottom: 2px solid #e44d26;
            padding-bottom: 10px;
        }

        .book-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
            gap: 20px;
        }

        .book-card {
            background-color: #f0f4f8;
            border-radius: 8px;
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .book-card:hover {
            transform: translateY(-5px);
        }

        .book-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .book-info {
            padding: 10px;
        }

        .book-title {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .book-author {
            font-size: 14px;
            color: #666;
            margin-bottom: 5px;
        }

        .book-price {
            font-weight: bold;
            color: #e44d26;
        }

        .cart-summary {
            margin-top: 30px;
        }

        .cart-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 0;
            border-bottom: 1px solid #e0e0e0;
        }

        .cart-item:last-child {
            border-bottom: none;
        }

        .cart-total {
            font-weight: bold;
            text-align: right;
            margin-top: 10px;
        }

        .btn {
            display: inline-block;
            background-color: #e44d26;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #d04323;
        }

        .login-success {
            position: fixed;
            top: 20px;
            right: 20px;
            background-color: #4CAF50;
            color: #fff;
            padding: 15px 20px;
            border-radius: 4px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            display: none;
            z-index: 1000;
        }

        @media (max-width: 768px) {
            .dashboard-grid {
                grid-template-columns: 1fr;
            }

            .header-content {
                flex-direction: column;
                align-items: flex-start;
            }

            nav ul {
                margin-top: 20px;
                flex-wrap: wrap;
            }

            nav ul li {
                margin-left: 0;
                margin-right: 20px;
                margin-bottom: 10px;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div class="header-content">
                <div class="logo">Flip the Page</div>
                <nav>
                    <ul>
                        <li><a href="../index.php">Home</a></li>
                        
                        <li><a href="../cart.php">Cart</a></li>
                        <li><a href="../cart.php">Account</a></li>
                        <li><a href="index.php">Logout</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    
    <main>
        <div class="container">
            <div class="dashboard-grid">
                <aside class="sidebar">
                    <div class="user-info">
                        <img src="../images/boy.png" alt="User Avatar" class="user-avatar">
                        <h2 class="user-name">
                            <?php 
                            
                            if (isset($_SESSION['firstName']) && !empty($_SESSION['firstName'])) {
                                    echo htmlspecialchars($_SESSION['firstName']);
                            } else {
                                
                                echo "Guest";
                            }
                            ?>
                        </h2>
                        <p class="user-email">
                            <?php 
                            if (isset($_SESSION['email']) && !empty($_SESSION['email'])) {
                                echo htmlspecialchars($_SESSION['email']);
                            }
                            ?>
                        </p>
                    </div>
                    <ul class="sidebar-menu">
                        <li><a href="dashboard.php">Dashboard</a></li>
                        <li><a href="../cart.php">My Orders</a></li>
                        <li><a href="">Wishlist</a></li>
                        <li><a href="#">Settings</a></li>
                    </ul>
                </aside>
                <div class="main-content">
                    <section>
                        <h2 class="section-title">Featured Books</h2>
                        <div class="book-grid">
                            <div class="book-card">
                                <img src="../images/9781853260414.jpg" style="height:280px; width:186px;" alt="Book 1">
                                <div class="book-info">
                                    <h3 class="book-title">The Great Gatsby</h3>
                                    <p class="book-author">F. Scott Fitzgerald</p>
                                    <p class="book-price">₹9.99</p>
                                </div>
                            </div>
                            <div class="book-card">
                                <img src="../images/9781784752637.jpg" style="height:280px; width:186px;" alt="Book 2">
                                <div class="book-info">
                                    <h3 class="book-title">To Kill a Mockingbird</h3>
                                    <p class="book-author">Harper Lee</p>
                                    <p class="book-price">₹8.99</p>
                                </div>
                            </div>
                            <div class="book-card">
                                <img src="../images/9780241341650.jpg" style="height:280px; width:186px;" alt="Book 3">
                                <div class="book-info">
                                    <h3 class="book-title">1984</h3>
                                    <p class="book-author">George Orwell</p>
                                    <p class="book-price">₹7.99</p>
                                </div>
                            </div>
                            <div class="book-card">
                                <img src="../images/9780141330167.jpg" style="height:280px; width:186px;" alt="Book 4">
                                <div class="book-info">
                                    <h3 class="book-title">Pride and Prejudice</h3>
                                    <p class="book-author">Jane Austen</p>
                                    <p class="book-price">₹6.99</p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="cart-summary">
                        <h2 class="section-title">Your Cart</h2>
                        <div class="cart-item">
                            <span>The Great Gatsby</span>
                            <span>₹9.99</span>
                        </div>
                        <div class="cart-item">
                            <span>To Kill a Mockingbird</span>
                            <span>₹8.99</span>
                        </div>
                        <div class="cart-total">
                            <p>Total: ₹18.98</p>
                        </div>
                        <a href="../cart.php" class="btn">Checkout</a>
                    </section>
                </div>
            </div>
        </div>
    </main>

    <div class="login-success" id="loginSuccess">
        Login successful! Welcome, <?php echo htmlspecialchars($_SESSION['email']); ?>
    </div>

    <script>
    <?php if (isset($login_success) && $login_success): ?>
    document.addEventListener('DOMContentLoaded', function() {
    var loginSuccess = document.getElementById('loginSuccess');
    loginSuccess.style.display = 'block';
    setTimeout(function() {
        loginSuccess.style.display = 'none';
    }, 5000); 
    });
    <?php endif; ?>

    </script>

</body>
</html>

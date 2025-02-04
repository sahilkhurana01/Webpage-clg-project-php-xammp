<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Flip the Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700&family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        /* Reset and base styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Open Sans', sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f8f8f8;
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

        /* Main content styles */
        main {
            padding: 40px 0;
        }

        h1 {
            font-family: 'Merriweather', serif;
            font-size: 32px;
            margin-bottom: 20px;
            color: #000;
        }

        .contact-intro {
            font-size: 18px;
            margin-bottom: 30px;
            max-width: 800px;
        }

        .contact-methods {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }

        .contact-method {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .contact-method:hover {
            transform: translateY(-5px);
        }

        .contact-method h2 {
            font-family: 'Merriweather', serif;
            font-size: 24px;
            margin-bottom: 15px;
            color: #e44d26;
        }

        .contact-method p {
            margin-bottom: 15px;
        }

        .contact-method a {
            color: #e44d26;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .contact-method a:hover {
            color: #000;
        }

        .contact-form {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: 600;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-family: 'Open Sans', sans-serif;
        }

        textarea {
            height: 150px;
        }

        input[type="submit"] {
            background-color: #e44d26;
            color: #fff;
            border: none;
            padding: 12px 20px;
            font-size: 16px;
            font-weight: 600;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #d04323;
        }

        /* Footer styles */
        footer {
            background-color: #000;
            color: #fff;
            padding: 40px 0;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
        }

        .footer-section h3 {
            font-family: 'Merriweather', serif;
            font-size: 18px;
            margin-bottom: 15px;
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section ul li {
            margin-bottom: 10px;
        }

        .footer-section ul li a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-section ul li a:hover {
            color: #e44d26;
        }

        .footer-bottom {
            margin-top: 30px;
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid #333;
        }

        /* Responsive styles */
        @media (max-width: 768px) {
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
                        <li><a href="../categories.php">Books</a></li>
                        <li><a href="../blog.php">About</a></li>
                        <li><a href="indexC.php">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <h1>Contact Us</h1>
            <p class="contact-intro">We're here to help! Whether you have a question about our books, your order, or just want to say hello, we'd love to hear from you. Choose the method that works best for you:</p>

            <div class="contact-methods">
                <div class="contact-method">
                    <h2>Customer Service</h2>
                    <p>Our friendly customer service team is available to assist you with any questions or concerns.</p>
                    <p>Phone: <a href="tel:+441234567890">+44 123 456 7890</a></p>
                    <p>Email: <a href="mailto:customerservice@flipthepage.com">customerservice@flipthepage.com</a></p>
                    <p>Hours: Monday - Friday, 9am - 5pm</p>
                </div>
                <div class="contact-method">
                    <h2>Technical Support</h2>
                    <p>Having trouble with our website or e-books? Our tech team is here to help.</p>
                    <p>Email: <a href="mailto:techsupport@flipthepage.com">techsupport@flipthepage.com</a></p>
                    <p>Hours: Monday - Friday, 9am - 5pm</p>
                </div>
                <div class="contact-method">
                    <h2>Press Inquiries</h2>
                    <p>For media inquiries or interview requests, please contact our press team.</p>
                    <p>Email: <a href="mailto:press@flipthepage.com">press@flipthepage.com</a></p>
                </div>
            </div>

            <div class="contact-form">
                <h2>Send Us a Message</h2>
                <form id="contact-form" method="POST" action="verify.php">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" required></textarea>
                    </div>
                    <input type="submit" name="feedback">Send Message</input>
                </form>
            </div>
        </div>
    </main>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>About Us</h3>
                    <ul>
                        <li><a href="../index.php">Our Story</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Press</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Customer Service</h3>
                    <ul>
                        <li><a href="indexC.php">Contact Us</a></li>
                        <li><a href="indexC.php">FAQs</a></li>
                        <li><a href="indexC.php">Shipping & Returns</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Shop</h3>
                    <ul>
                        <li><a href="../blog.php">New Releases</a></li>
                        <li><a href="../categories.php">Bestsellers</a></li>
                        <li><a href="#">Gift Cards</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Connect</h3>
                    <ul>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Instagram</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Flip the Page. All rights reserved.</p>
            </div>
        </div>
    </footer>

</body>
</html>

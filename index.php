<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flip the Page - Amazing Book Store</title>
    <script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');

        :root {
            --primary-color: #000000;
            --secondary-color: #e74c3c;
            --accent-color: #f39c12;
            --background-color: #f0f3f5;
            --text-color: #2c3e50;
            --light-text-color: #ecf0f1;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            color: var(--text-color);
            background-color: var(--background-color);
        }

        header {
            background-color: var(--primary-color);
            color: white;
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .logo {
            font-size: 2rem;
            font-weight: 700;
            color: var(--light-text-color);
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }

        .nav-links {
            display: flex;
            list-style: none;
        }

        .nav-links li {
            position: relative;
            margin-left: 2rem;
        }

        .nav-links li a {
            color: var(--light-text-color);
            text-decoration: none;
            transition: color 0.3s ease;
            font-weight: 600;
        }

        .nav-links li a:hover {
            color: var(--accent-color);
        }

        .dropdown {
            position: relative;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: var(--primary-color);
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            border-radius: 5px;
        }

        .dropdown-content a {
            color: var(--light-text-color);
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #305974;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .hamburger {
            display: none;
            cursor: pointer;
        }

        .hamburger div {
            width: 25px;
            height: 3px;
            background-color: var(--light-text-color);
            margin: 5px;
            transition: all 0.3s ease;
        }

        main {
            margin-top: 5rem;
        }

        #hero {
            position: relative;
            height: 100vh;
            overflow: hidden;
        }

        .slider {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        .slider.active {
            opacity: 1;
        }

        .slider img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .slider-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: rgb(255, 255, 255);
            z-index: 1;
        }

        .slider-content h1 {
            font-size: 4.5rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .slider-content p {
            font-size: 1.8rem;
            margin-bottom: 2rem;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }

        .cta-button {
            background-color: var(--secondary-color);
            color: white;
            padding: 1rem 2rem;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .cta-button:hover {
            background-color: #c0392b;
            transform: translateY(-3px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        #featured {
            padding: 6rem 2rem;
            background-color: white;
        }

        #featured h2 {
            text-align: center;
            margin-bottom: 3rem;
            font-size: 3rem;
            color: var(--primary-color);
        }

        .book-showcase {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 2rem;
        }

        .book {
            display: flex;
            flex-direction: column;
            width: 300px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            overflow: hidden;
            background-color: white;
            transition: transform 0.3s ease;
        }

        .book:hover {
            transform: translateY(-10px);
        }

        .book-cover img {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }

        .book-info {
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            flex-grow: 1;
        }

        .book-info h3 {
            margin-bottom: 0.5rem;
            font-size: 1.5rem;
            color: var(--primary-color);
        }

        .book-info .author {
            font-style: italic;
            color: var(--accent-color);
            margin-bottom: 1rem;
        }

        .book-info .price {
            font-weight: 600;
            color: var(--secondary-color);
            margin: 1rem 0;
            font-size: 1.2rem;
        }

        .add-to-cart {
            background-color: var(--accent-color);
            color: white;
            border: none;
            padding: 0.8rem 1.5rem;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .add-to-cart:hover {
            background-color: #d35400;
            transform: translateY(-3px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        #categories {
            padding: 6rem 2rem;
            background-color: var(--background-color);
        }

        #categories h2 {
            text-align: center;
            margin-bottom: 3rem;
            font-size: 3rem;
            color: var(--primary-color);
        }

        .category-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .category {
            background-color: white;
            padding: 2rem;
            text-align: center;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .category:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        .category i {
            font-size: 3rem;
            margin-bottom: 1rem;
            color: var(--accent-color);
        }

        footer {
            background-color: var(--primary-color);
            color: var(--light-text-color);
            padding: 4rem 2rem 2rem;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            max-width: 1200px;
            margin: 0 auto;
        }

        .footer-section {
            flex: 1;
            margin-bottom: 2rem;
            min-width: 200px;
        }

        .footer-section h3 {
            margin-bottom: 1rem;
            color: white;
            font-size: 1.2rem;
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section ul li {
            margin-bottom: 0.5rem;
        }

        .footer-section ul li a {
            color: var(--light-text-color);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-section ul li a:hover {
            color: var(--accent-color);
        }

        .social-icons a {
            color: var(--light-text-color);
            font-size: 1.5rem;
            margin-right: 1rem;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .social-icons a:hover {
            color: var(--accent-color);
        }

        .footer-bottom {
            text-align: center;
            margin-top: 2rem;
            padding-top: 2rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 0.9rem;
        }

        @media screen and (max-width: 768px) {
            .nav-links {
                position: fixed;
                right: -100%;
                top: 5rem;
                flex-direction: column;
                background-color: var(--primary-color);
                width: 100%;
                text-align: center;
                transition: 0.3s;
                box-shadow: 0 10px 27px rgba(0, 0, 0, 0.05);
            }

            .nav-links.active {
                right: 0;
            }

            .nav-links li {
                margin: 2.5rem 0;
            }

            .hamburger {
                display: block;
            }

            .hamburger.active .line1 {
                transform: rotate(-45deg) translate(-5px, 6px);
            }

            .hamburger.active .line2 {
                opacity: 0;
            }

            .hamburger.active .line3 {
                transform: rotate(45deg) translate(-5px, -6px);
            }

            .dropdown-content {
                position: static;
                display: none;
                background-color: transparent;
                box-shadow: none;
            }

            .dropdown:hover .dropdown-content {
                display: block;
            }

            .slider-content h1 {
                font-size: 3rem;
            }

            .slider-content p {
                font-size: 1.2rem;
            }
        }
    </style>
</head>
<body>
    <?php include_once('header.php'); ?>

    <main>
        <section id="hero">
            <div class="slider active">
                <img src="images/books.webp" alt="Library" object-fit: cover;">
            </div>
            <div class="slider">
                <img src="images/book1.webp" alt="Bookstore">
            </div>
            <div class="slider">
                <img src="images/book2.webp" alt="Books">
            </div>
            <div class="slider-content">
                <h1>Welcome to Flip the Page</h1>
                <p>Discover your next favorite book</p>
                <a href="#featured" class="cta-button">Explore Books</a>
            </div>
        </section>

        <section id="featured">
            <h2>Featured Books</h2>
            <div class="book-showcase">
                <div class="book">
                    <div class="book-cover">
                        <img src="images/71UGk8Y6QeL.webp" alt="The Midnight Library Cover">
                    </div>
                    <div class="book-info">
                        <h3>48 Laws of Power</h3>
                        <p class="author">By Robert Greene</p>
                        <p class="price">₹19.99</p>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
                <div class="book">
                    <a href="bookD.php" style="text-decoration: none;"><div class="book-cover">
                        <img src="images/bbo.jpg" alt="The Midnight Library Cover">
                    </div>
                    <div class="book-info">
                        <h3>The Pumpkin Spice Cafe - Dream Harbor Book 1</h3>
                        <p class="author">By Laurie Gilmore</p>
                        <p class="price">₹19.99</p></a>
                        <button class="add-to-cart">Add to Cart</button>
                    </div></a>
                </div>
                <div class="book">
                    <div class="book-cover">
                        <img src="images/9781529363494.jpg" alt="The Midnight Library Cover">
                    </div>
                    <div class="book-info">
                        <h3>Rita Hayworth and Shawshank Redemption</h3>
                        <p class="author">By Stephen King</p>
                        <p class="price">₹19.99</p>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
                <div class="book">
                    <div class="book-cover">
                        <img src="images/9781398718982.jpg" alt="The Midnight Library Cover">
                    </div>
                    <div class="book-info">
                        <h3>Resurrection Walk</h3>
                        <p class="author">Michael Connelly</p>
                        <p class="price">₹19.99</p>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
                <div class="book">
                    <div class="book-cover">
                        <img src="images/9780349701479.jpg" alt="The Vanishing Half Cover">
                    </div>
                    <div class="book-info">
                        <h3>The Vanishing Half</h3>
                        <p class="author">By Brit Bennett</p>
                        <p class="price">₹24.99</p>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
                <div class="book">
                    <div class="book-cover">
                        <img src="images/bookt.jpg" alt="Klara and the Sun Cover">
                    </div>
                    <div class="book-info">
                        <h3>Orbital</h3>
                        <p class="author">By Samantha Harvey</p>
                        <p class="price">₹22.99</p>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>
        </section>

        <section id="categories">
            <h2>Book Categories</h2>
            <div class="category-grid">
                <div class="category">
                    <i class="fas fa-book"></i>
                    <h3>Fiction</h3>
                </div>
                <div class="category">
                    <i class="fas fa-landmark"></i>
                    <h3>Non-Fiction</h3>
                </div>
                <div class="category">
                    <i class="fas fa-mask"></i>
                    <h3>Mystery</h3>
                </div>
                <div class="category">
                    <i class="fas fa-rocket"></i>
                    <h3>Sci-Fi</h3>
                </div>
                <div class="category">
                    <i class="fas fa-heart"></i>
                    <h3>Romance</h3>
                </div>
                <div class="category">
                    <i class="fas fa-user-tie"></i>
                    <h3>Biography</h3>
                </div>
            </div>
        </section>
    </main>
    
    <?php include_once('footer.php'); ?>
    

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            
            const sliders = document.querySelectorAll('.slider');
            let currentSlide = 0;

            function showSlide(index) {
                sliders.forEach((slider, i) => {
                    if (i === index) {
                        slider.classList.add('active');
                    } else {
                        slider.classList.remove('active');
                    }
                });
            }

            function nextSlide() {
                currentSlide = (currentSlide + 1) % sliders.length;
                showSlide(currentSlide);
            }

            setInterval(nextSlide, 5000); // Change slide every 5 seconds

            // Hamburger menu functionality
            const hamburger = document.querySelector('.hamburger');
            const navLinks = document.querySelector('.nav-links');

            hamburger.addEventListener('click', () => {
                navLinks.classList.toggle('active');
                hamburger.classList.toggle('active');
            });

            // Close mobile menu when a link is clicked
            document.querySelectorAll('.nav-links li a').forEach(link => {
                link.addEventListener('click', () => {
                    navLinks.classList.remove('active');
                    hamburger.classList.remove('active');
                });
            });

            // Smooth scrolling for navigation links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });

            // Add to cart button animation
            const addToCartBtns = document.querySelectorAll('.add-to-cart');
            addToCartBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    btn.classList.add('added');
                    btn.textContent = 'Added to Cart';
                    setTimeout(() => {
                        btn.classList.remove('added');
                        btn.textContent = 'Add to Cart';
                    }, 2000);
                });
            });

            // Book cover hover effect
            const bookCovers = document.querySelectorAll('.book-cover');
            bookCovers.forEach(cover => {
                cover.addEventListener('mousemove', (e) => {
                    const { left, top, width, height } = cover.getBoundingClientRect();
                    const x = (e.clientX - left) / width;
                    const y = (e.clientY - top) / height;
                    
                    cover.style.transform = `perspective(1000px) rotateY(${x * 10}deg) rotateX(${y * -10}deg)`;
                });

                cover.addEventListener('mouseleave', () => {
                    cover.style.transform = 'perspective(1000px) rotateY(0) rotateX(0)';
                });
            });

            // Category hover effect
            const categories = document.querySelectorAll('.category');
            categories.forEach(category => {
                category.addEventListener('mouseenter', () => {
                    category.style.backgroundColor = '#f0f0f0';
                });
                category.addEventListener('mouseleave', () => {
                    category.style.backgroundColor = 'white';
                });
            });
        });
    </script>
</body>
</html>
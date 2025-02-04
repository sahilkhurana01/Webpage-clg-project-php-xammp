<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books - Flip the Page</title>
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
            background-color: #f8f8f8;
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

        h1 {
            font-family: 'Merriweather', serif;
            font-size: 32px;
            margin-bottom: 20px;
            color: #000;
        }

        .category-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }

        .category-card {
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .category-card:hover {
            transform: translateY(-5px);
        }

        .category-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .category-content {
            padding: 20px;
        }

        .category-content h2 {
            font-family: 'Merriweather', serif;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .category-content p {
            margin-bottom: 15px;
        }

        .category-link {
            display: inline-block;
            background-color: #e44d26;
            color: #fff;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .category-link:hover {
            background-color: #d04323;
        }

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
    </style>
</head>
<body>
    <?php include_once('header.php'); ?>

    <main>
        <div class="container">
            <h1>Book Categories</h1>
            <div class="category-grid">
                <div class="category-card">
                    <img src="images/00388551-280x217.jpeg" alt="Fiction">
                    <div class="category-content">
                        <h2>Fiction</h2>
                        <p>Explore imaginative worlds and compelling stories.</p>
                        <a href="blog.php" class="category-link">View Books</a>
                    </div>
                </div>
                <div class="category-card">
                    <img src="images/00386249-280x217.jpeg" alt="Non-Fiction">
                    <div class="category-content">
                        <h2>Non-Fiction</h2>
                        <p>Discover real-world knowledge and insights.</p>
                        <a href="blog.php" class="category-link">View Books</a>
                    </div>
                </div>
                <div class="category-card">
                    <img src="images/00381203-280x217.jpeg" alt="Mystery">
                    <div class="category-content">
                        <h2>Mystery</h2>
                        <p>Unravel intriguing puzzles and suspenseful plots.</p>
                        <a href="blog.php" class="category-link">View Books</a>
                    </div>
                </div>
                <div class="category-card">
                    <img src="images/00380101-280x217.jpeg" alt="Science Fiction">
                    <div class="category-content">
                        <h2>Science Fiction</h2>
                        <p>Journey into futuristic and speculative worlds.</p>
                        <a href="blog.php" class="category-link">View Books</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include_once('footer.php'); ?>
</body>
</html>
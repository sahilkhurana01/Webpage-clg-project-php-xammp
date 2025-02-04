<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Flip the Page - Book Blog</title>
<style>
    
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        color: #333;
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
        padding: 10px 0;
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
        align-items: center;
    }

    nav ul li {
        margin-left: 20px;
    }

    nav ul li a {
        color: #fff;
        text-decoration: none;
    }

    .cart-icon {
        display: flex;
        align-items: center;
    }

    .cart-icon svg {
        width: 24px;
        height: 24px;
        fill: #fff;
        margin-right: 5px;
    }

    /* Main content styles */
    main {
        padding: 40px 0;
    }

    .section-title {
        font-size: 24px;
        margin-bottom: 20px;
        border-bottom: 2px solid #000;
        padding-bottom: 10px;
    }

    .book-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        gap: 30px;
        margin-bottom: 40px;
    }

    .book-card {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 5px;
        overflow: hidden;
        transition: transform 0.3s ease;
    }

    .book-card:hover {
        transform: translateY(-5px);
    }

    .book-card img {
        width: 100%;
        height: 250px;
        object-fit: cover;
    }

    .book-content {
        padding: 15px;
    }

    .book-title {
        font-size: 16px;
        margin-bottom: 5px;
    }

    .book-author {
        font-size: 14px;
        color: #666;
        margin-bottom: 10px;
    }

    .book-price {
        font-weight: bold;
        color: #e44d26;
    }

    .blog-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 30px;
    }

    .blog-card {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 5px;
        overflow: hidden;
    }

    .blog-card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .blog-content {
        padding: 20px;
    }

    .blog-title {
        font-size: 20px;
        margin-bottom: 10px;
    }

    .blog-excerpt {
        font-size: 14px;
        color: #666;
        margin-bottom: 15px;
    }

    .read-more {
        display: inline-block;
        background-color: #000;
        color: #fff;
        padding: 5px 10px;
        text-decoration: none;
        border-radius: 3px;
        font-size: 14px;
    }

    /* Footer styles */
    footer {
        background-color: #f4f4f4;
        padding: 20px 0;
        text-align: center;
    }

    /* Floating cart icon */
    .floating-cart {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background-color: #000;
        color: #fff;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        transition: background-color 0.3s ease;
    }

    .floating-cart:hover {
        background-color: #333;
    }

    .floating-cart svg {
        width: 30px;
        height: 30px;
        fill: #fff;
    }

    /* Responsive styles */
    @media (max-width: 768px) {
        .header-content {
            flex-direction: column;
            align-items: flex-start;
        }

        nav ul {
            margin-top: 10px;
            flex-wrap: wrap;
        }

        nav ul li {
            margin-left: 0;
            margin-right: 20px;
            margin-bottom: 10px;
        }

        .book-grid, .blog-grid {
            grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
        }
    }
</style>
</head>
<body>
    <?php include_once('header.php'); ?>

<main>
    <div class="container" style="margin-top: 20px; text-align: center;">
        <img src="images\00373934-1024x206.gif" alt="gif" style="width: 80%; height: auto;">
    </div>
    <div class="container" style="margin-top: 20px;">
        <section>
            <h2 class="section-title">Featured Books</h2>
            <div class="book-grid">
                <div class="book-card">
                    <img src="images/9780739121726.jpg" style="height: 250px; width: 260px;" alt="Book 1">
                    <div class="book-content">
                        <h3 class="book-title">The Silent Echo</h3>
                        <p class="book-author">By Sarah Johnson</p>
                        <p class="book-price">₹12.99</p>
                    </div>
                </div>
                <div class="book-card">
                    <img src="images/9781786497666.jpg"   alt="Book 2">
                    <div class="book-content">
                        <h3 class="book-title">Quantum Leap</h3>
                        <p class="book-author">By Michael Chang</p>
                        <p class="book-price">₹15.99</p>
                    </div>
                </div>
                <div class="book-card">
                    <img src="images/9781490850634.jpg" alt="Book 3">
                    <div class="book-content">
                        <h3 class="book-title">Whispers of the Heart</h3>
                        <p class="book-author">By Emily Rose</p>
                        <p class="book-price">₹10.99</p>
                    </div>
                </div>
                <div class="book-card">
                    <img src="images/9781554888047.jpg" alt="Book 4">
                    <div class="book-content">
                        <h3 class="book-title">The Last Frontier</h3>
                        <p class="book-author">By Alex Rider</p>
                        <p class="book-price">₹14.99</p>
                    </div>
                </div>
                <div class="book-card">
                    <img src="images/2928377268923.webp" alt="Book 4">
                    <div class="book-content">
                        <h3 class="book-title">Our Evenings: Signed Edition </h3>
                        <p class="book-author">By Alan Hollinghurst</p>
                        <p class="book-price">₹14.99</p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title">Fiction</h2>
            <div class="blog-grid">
                <article class="blog-card">
                    <img src="images\00386213-374x312.webp" alt="Fiction Review">
                    <div class="blog-content">
                        <h3 class="blog-title">Top 10 Fiction Reads of the Year</h3>
                        <p class="blog-excerpt">Discover the most captivating fictional worlds that have taken readers by storm this year.</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </article>
                <article class="blog-card">
                    <img src="images\00386209-374x312.jpeg" alt="Author Spotlight">
                    <div class="blog-content">
                        <h3 class="blog-title">Spotlight on Bestselling Author: J.K. Rowling</h3>
                        <p class="blog-excerpt">An in-depth look at the life and works of the beloved Harry Potter creator.</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </article>
                <article class="blog-card">
                    <img src="images\00381299-374x312.jpeg" alt="Fiction Trends">
                    <div class="blog-content">
                        <h3 class="blog-title">Emerging Trends in Contemporary Fiction</h3>
                        <p class="blog-excerpt">Explore the latest themes and styles shaping the landscape of modern fiction.</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </article>
            </div>
        </section>

        <section>
            <h2 class="section-title">Non-Fiction</h2>
            <div class="blog-grid">
                <article class="blog-card">
                    <img src="images/00387950-374x312.jpeg" alt="Science Books">
                    <div class="blog-content">
                        <h3 class="blog-title">Must-Read Science Books for Curious Minds</h3>
                        <p class="blog-excerpt">Explore groundbreaking scientific concepts with these accessible and engaging reads.</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </article>
                <article class="blog-card">
                    <img src="images/00374309-374x312.jpeg" alt="Biography Review">
                    <div class="blog-content">
                        <h3 class="blog-title">Inspiring Biographies to Add to Your Reading List</h3>
                        <p class="blog-excerpt">From historical figures to modern-day icons, these life stories will motivate and inspire.</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </article>
                <article class="blog-card">
                    <img src="images/00385087-374x312.jpeg" alt="History Books">
                    <div class="blog-content">
                        <h3 class="blog-title">Unveiling the Past: Top History Books of the Year</h3>
                        <p class="blog-excerpt">Dive into fascinating historical narratives that bring the past to life.</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </article>
            </div>
        </section>
        <div class="container" style="margin-top: 60px; margin-bottom: 40px; text-align: center;">
            <img src="images/00373676-1920x241.jpeg" alt="gif" style="width: 80%; height: auto;">
        </div>
        <section>
            <h2 class="section-title">Romance</h2>
            <div class="blog-grid">
                <article class="blog-card">
                    <img src="images/00384041-374x312.jpeg" alt="Romance Novels">
                    <div class="blog-content">
                        <h3 class="blog-title">Swoon-Worthy Romance Novels for Summer</h3>
                        <p class="blog-excerpt">Fall in love with these heartwarming stories perfect for your beach reading list.</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </article>
                <article class="blog-card">
                    <img src="images/00381166-374x312.jpeg" alt="Author Interview">
                    <div class="blog-content">
                        <h3 class="blog-title">Interview with Romance Author Nora Roberts</h3>
                        <p class="blog-excerpt">The queen of romance shares insights on her writing process and upcoming projects.</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </article>
                <article class="blog-card">
                    <img src="images/00367017-374x312.jpeg" alt="Romance Subgenres">
                    <div class="blog-content">
                        <h3 class="blog-title">Exploring Romance Subgenres: From Historical to Paranormal</h3>
                        <p class="blog-excerpt">Discover the diverse world of romance fiction and find your perfect match.</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </article>
            </div style="margin-bottom: 20px;">
        </section>
        <div class="container" style="margin-top: 60px; margin-bottom: 40px; text-align: center;">
            <img src="images/00373674-1920x241.jpeg" alt="gif" style="width: 80%; height: auto;">
        </div>
        <section>
            <h2 class="section-title" style="margin-top: 20px;">Mystery & Thriller</h2>
            
            <div class="blog-grid">
                <article class="blog-card">
                    <img src="images/00365293-374x312.jpeg" alt="Mystery Books">
                    <div class="blog-content">
                        <h3 class="blog-title">Gripping Mystery Novels That Will Keep You Guessing</h3>
                        <p class="blog-excerpt">Unravel complex plots and shocking twists in these unputdownable mystery reads.</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </article>
                <article class="blog-card">
                    <img src="images/00376962-374x312 (1).jpeg" alt="Thriller Review">
                    <div class="blog-content">
                        <h3 class="blog-title">Heart-Pounding Thrillers for Adrenaline Junkies</h3>
                        <p class="blog-excerpt">Experience edge-of-your-seat suspense with these pulse-racing thriller recommendations.</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </article>
                <article class="blog-card">
                    <img src="images/00354486-374x312.jpeg" alt="Crime Fiction">
                    <div class="blog-content">
                        <h3 class="blog-title">The Best of Crime Fiction: From Cozy to Hardboiled</h3>
                        <p class="blog-excerpt">Explore the diverse world of crime fiction and discover your next favorite detective.</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </article>
            </div>
        </section>

        <section>
            <h2 class="section-title">Science Fiction & Fantasy</h2>
            <div class="blog-grid">
                <article class="blog-card">
                    <img src="images/00383872-374x312.jpeg" alt="Sci-Fi Classics">
                    <div class="blog-content">
                        <h3 class="blog-title">Timeless Science Fiction Classics Every Fan Should Read</h3>
                        <p class="blog-excerpt">Revisit the groundbreaking works that shaped the science fiction genre.</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </article>
                <article class="blog-card">
                    <img src="images/00377465-374x312.jpeg" alt="Fantasy Worlds">
                    <div class="blog-content">
                        <h3 class="blog-title">Immersive Fantasy Worlds to Get Lost In</h3>
                        <p class="blog-excerpt">Escape reality with these richly detailed and magical fantasy realms.</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </article>
                <article class="blog-card">
                    <img src="images/00382524-374x312.jpeg" alt="Sci-Fi Trends">
                    <div class="blog-content">
                        <h3 class="blog-title">The Future of Sci-Fi: Emerging Trends and New Voices</h3>
                        <p class="blog-excerpt">Discover the cutting-edge ideas and fresh perspectives shaping modern science fiction.</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </article>
            </div>
        </section>

        <section>
            <h2 class="section-title">Children's & Young Adult</h2>
            <div class="blog-grid">
                <article class="blog-card">
                    <img src="images/00354509-374x312.jpeg" alt="Children's Books">
                    <div class="blog-content">
                        <h3 class="blog-title">Enchanting Children's Books for All Ages</h3>
                        <p class="blog-excerpt">Discover delightful stories that will captivate young readers and spark their imagination.</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </article>
                <article class="blog-card">
                    <img src="images/00386874-374x312.jpeg" alt="YA Trends">
                    <div class="blog-content">
                        <h3 class="blog-title">Trending Young Adult Novels Everyone's Talking About</h3>
                        <p class="blog-excerpt">Stay up-to-date with the latest YA sensations taking the literary world by storm.</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </article>
                <article class="blog-card">
                    <img src="images/00383985-374x312.jpeg" alt="Middle Grade">
                    <div class="blog-content">
                        <h3 class="blog-title">Must-Read Middle Grade Books for Curious Minds</h3>
                        <p class="blog-excerpt">Explore engaging stories that bridge the gap between children's and young adult literature.</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </article>
            </div>
        </section>
    </div>
</main>

<?php include_once('footer.php'); ?>

<script>
    // Add smooth scrolling to all links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    // Add active class to current nav item
    const currentLocation = location.href;
    const menuItems = document.querySelectorAll('nav ul li a');
    const menuLength = menuItems.length;
    for (let i = 0; i < menuLength; i++) {
        if (menuItems[i].href === currentLocation) {
            menuItems[i].className = "active";
        }
    }

    
</script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Pumpkin Spice Cafe - Flip the Page Bookstore</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');

        :root {
            --primary: #000000;
            --primary-foreground: #ffffff;
            --background: #ffffff;
            --foreground: #020817;
            --muted: #000000;
            --muted-foreground: #ffffff;
            --border: #2a1e1e;
            --input: #e2e8f0;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.5;
            color: var(--foreground);
            background-color: var(--background);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        header {
            background-color: #000000;
            color: #ffffff;
            padding: 1rem 0;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: #ffffff;
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            gap: 1rem;
        }

        .search-input {
            padding: 0.5rem;
            border: 1px solid var(--input);
            border-radius: 0.25rem;
        }

        .btn {
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 0.25rem;
            cursor: pointer;
            font-weight: 500;
        }

        .btn-primary {
            background-color: var(--primary);
            color: var(--primary-foreground);
        }

        .btn-outline {
            background-color: transparent;
            border: 1px solid var(--border);
            color: #ffffff;
        }

        main {
            padding: 2rem 0;
        }

        .book-detail {
            display: flex;
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .book-cover {
            flex: 1;
            max-width: 400px;
        }

        .book-cover img {
            width: 100%;
            height: auto;
            border-radius: 0.5rem;
        }

        .book-info {
            flex: 2;
        }

        .book-title {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .book-author {
            font-size: 1.25rem;
            color: var(--muted-foreground);
            margin-bottom: 1rem;
        }

        .book-rating {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
        }

        .star {
            color: #f59e0b;
            font-size: 1.25rem;
        }

        .book-price {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .book-format {
            display: inline-block;
            padding: 0.25rem 0.5rem;
            background-color: rgb(223,225,226);
            border-radius: 0.25rem;
            font-size: 0.875rem;
            margin-bottom: 1rem;
        }

        .book-actions {
            display: flex;
            gap: 1rem;
            margin-bottom: 1rem;
        }

        .book-links {
            display: flex;
            gap: 1rem;
            font-size: 0.875rem;
            color: var(--muted-foreground);
        }

        .tabs {
            margin-top: 2rem;
        }

        .tab-list {
            display: flex;
            border-bottom: 1px solid var(--border);
        }

        .tab {
            padding: 0.5rem 1rem;
            cursor: pointer;
            border-bottom: 2px solid transparent;
        }

        .tab.active {
            border-bottom-color: var(--primary);
        }

        .tab-content {
            padding: 1rem 0;
        }

        .related-books {
            margin-top: 2rem;
        }

        .related-books h2 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .book-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 1rem;
        }

        .book-card {
            border: 1px solid var(--border);
            border-radius: 0.5rem;
            padding: 1rem;
        }

        .book-card img {
            width: 100%;
            height: auto;
            border-radius: 0.25rem;
            margin-bottom: 0.5rem;
        }

        footer {
            background-color: var(--muted);
            padding: 2rem 0;
            margin-top: 2rem;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            color: #ffffff;
        }

        .footer-section h3 {
            font-size: 1rem;
            margin-bottom: 1rem;
            color: #ffffff;
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section ul li {
            margin-bottom: 0.5rem;
        }

        .footer-section ul li a {
            color: var(--muted-foreground);
            text-decoration: none;
        }

        .social-icons {
            display: flex;
            gap: 1rem;
        }

        .social-icons a {
            color: var(--muted-foreground);
        }

        .footer-bottom {
            text-align: center;
            margin-top: 2rem;
            padding-top: 2rem;
            border-top: 1px solid var(--border);
            font-size: 0.875rem;
            color: var(--muted-foreground);
        }

        @media (max-width: 768px) {
            .book-detail {
                flex-direction: column;
            }

            .book-cover {
                max-width: 100%;
            }

            .book-actions {
                flex-direction: column;
            }

            .footer-content {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <?php include_once('header2.php'); ?>

    <main class="container">
        <div class="book-detail">
            <div class="book-cover">
                <img src="images/bbo.jpg" style=" padding-top: 50px;" alt="The Pumpkin Spice Cafe Book Cover">
            </div>
            <div class="book-info">
                <h1 class="book-title">The Pumpkin Spice Cafe</h1>
                <p class="book-author">Laurie Gilmore</p>
                <div class="book-rating">
                    <span class="star">★★★★★</span>
                    <span>(2 customer reviews)</span>
                </div>
                <p class="book-price">₹8.99</p>
                <span class="book-format">Paperback</span>
                <p>A cosy autumn romance to warm your heart</p>
                <div class="book-actions">
                    <button class="btn btn-primary" >Add to cart</button>
                    <button class="btn btn-outline" style="color: #000000;">Add to wishlist</button>
                </div>
                <div class="book-links">
                    <a href="#">Share</a>
                    <span>|</span>
                    <a href="#">Download free extract</a>
                </div>
                <div class="tabs">
                    <div class="tab-list">
                        <div class="tab active" data-tab="overview">Overview</div>
                        <div class="tab" data-tab="details">Product Details</div>
                    </div>
                    <div class="tab-content" id="overview">
                        <p>Welcome to Pumpkin Spice Cafe, where autumn dreams come true and love is always in season...</p>
                        <p>Maple Falls is famous for its autumn celebrations, and at the heart of it all is the Pumpkin Spice Cafe. For cafe owner Mia Thompson, the season is bittersweet - it marks the anniversary of losing the love of her life. But when charming newcomer Caleb Peterson arrives in town to write a book about small-town autumn traditions, Mia finds herself drawn to his warmth and kindness.</p>
                        <p>As Caleb immerses himself in the town's festivities and becomes a regular at the cafe, Mia begins to feel the first stirrings of new love. But opening her heart again isn't easy, and she's not sure she's ready to let go of the past.</p>
                        <p>Can the magic of autumn - and the sweet aroma of pumpkin spice - help Mia embrace a second chance at love?</p>
                    </div>
                    <div class="tab-content" id="details" style="display: none;">
                        <table>
                            <tr>
                                <td><strong>ISBN</strong></td>
                                <td>9780008610678</td>
                            </tr>
                            <tr>
                                <td><strong>Publisher</strong></td>
                                <td>HarperCollins</td>
                            </tr>
                            <tr>
                                <td><strong>Publication date</strong></td>
                                <td>14 Sep 2023</td>
                            </tr>
                            <tr>
                                <td><strong>Pages</strong></td>
                                <td>384</td>
                            </tr>
                            <tr>
                                <td><strong>Dimensions</strong></td>
                                <td>198 x 129 x 24mm</td>
                            </tr>
                            <tr>
                                <td><strong>Language</strong></td>
                                <td>English</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <section class="related-books">
            <h2>You may also like</h2>
            <div class="book-grid">
                <div class="book-card">
                    <img src="images/71UGk8Y6QeL.webp" alt="Related Book 1">
                    <h3>48 Laws of Power</h3>
                    <p>By Robert Greene</p>
                    <p><strong>₹9.99</strong></p>
                </div>
                <div class="book-card">
                    <img src="images/9780349701479.jpg" alt="Related Book 2">
                    <h3>The Vanishing Half</h3>
                    <p>By Brit Bennett</p>
                    <p><strong>₹9.99</strong></p>
                </div>
                <div class="book-card">
                    <img src="images/9781529363494.jpg" alt="Related Book 3">
                    <h3>Rita Hayworth and Shawshank Redemption</h3>
                    <p>By Stephen King</p>
                    <p><strong>₹9.99</strong></p>
                </div>
                <div class="book-card">
                    <img src="images/9781398718982.jpg" alt="Related Book 4">
                    <h3>The Midnight Library</h3>
                    <p>By Matt Haig</p>
                    <p><strong>₹9.99</strong></p>
                </div>
            </div>
        </section>
    </main>

    <?php include_once('footer2.php'); ?>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Tab functionality
            const tabs = document.querySelectorAll('.tab');
            const tabContents = document.querySelectorAll('.tab-content');

            tabs.forEach(tab => {
                tab.addEventListener('click', () => {
                    const tabId = tab.getAttribute('data-tab');

                    tabs.forEach(t => t.classList.remove('active'));
                    tab.classList.add('active');

                    tabContents.forEach(content => {
                        content.style.display = content.id === tabId ? 'block' : 'none';
                    });
                });
            });

            // Add to basket functionality (for demonstration)
            const addToBasketBtn = document.querySelector('.btn-primary');
            addToBasketBtn.addEventListener('click', () => {
                alert('Book added to basket!');
            });

            // Add to wishlist functionality (for demonstration)
            const addToWishlistBtn = document.querySelector('.btn-outline');
            addToWishlistBtn.addEventListener('click', () => {
                alert('Book added to wishlist!');
            });
        });
    </script>
</body>
</html>
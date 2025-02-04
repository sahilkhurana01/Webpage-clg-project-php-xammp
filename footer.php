<style>@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');

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




<footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>About Us</h3>
                    <p>Flip the Page is your go-to online</p>
                    <p>bookstore for all your</p>
                    <p>reading needs.</p>
                </div>
                <div class="footer-section">
                    <h3>Customer Service</h3>
                    <ul>
                        <li><a href="samPro/indexC.php">Contact Us</a></li>
                        <li><a href="/faq">FAQ</a></li>
                        <li><a href="#shipping">Shipping Information</a></li>
                        <li><a href="samPro/indexC.php">Returns Policy</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>My Account</h3>
                    <ul>
                        <li><a href="samPro\index.php">Sign In</a></li>
                        <li><a href="samPro\index.php">Register</a></li>
                        <li><a href="cart.php">Order History</a></li>
                        <li><a href="cart.php">Wishlist</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Follow Us</h3>
                    <div class="social-icons">
                        <a href="#" aria-label="Facebook">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                        </a>
                        <a href="#" aria-label="Instagram">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                        </a>
                        <a href="#" aria-label="Twitter">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Flip the Page. All rights reserved.</p>
            </div>
        </div>
    </footer>
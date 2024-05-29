<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example Website</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section id="home">
        <h1>Welcome to Our Website</h1>
        <p>This is an example of a simple website.</p>
        <button onclick="showAlert()">Click Me</button>
    </section>

    <section id="about">
        <h2>About Us</h2>
        <p>We are a company that specializes in web development.</p>
    </section>

    <section id="services">
        <h2>Our Services</h2>
        <div class="card-container">
            <div class="card">
                <div class="card-image">
                    <img src="images/service1.jpg" alt="Service 1">
                </div>
                <div class="card-content">
                    <h3>Service 1</h3>
                    <p>Description of service 1.</p>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="images/service2.jpg" alt="Service 2">
                </div>
                <div class="card-content">
                    <h3>Service 2</h3>
                    <p>Description of service 2.</p>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="images/service3.jpg" alt="Service 3">
                </div>
                <div class="card-content">
                    <h3>Service 3</h3>
                    <p>Description of service 3.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <h2>Contact Us</h2>
        <form>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
            <button type="submit">Submit</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 Example Website. All rights reserved.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>

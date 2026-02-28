<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body {
            background: linear-gradient(135deg, #1e293b, #7c3aed, #1e293b);
            min-height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            color: #fff;
        }
        nav {
            background: rgba(255,255,255,0.1);
            border-bottom: 1px solid rgba(255,255,255,0.2);
            padding: 1rem 0;
        }
        nav .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 1rem;
        }
        nav a {
            color: #fff;
            margin-left: 1.5rem;
            text-decoration: none;
            opacity: 0.8;
        }
        nav a:hover {
            opacity: 1;
            text-decoration: underline;
        }
        .hero {
            text-align: center;
            padding: 4rem 1rem 2rem 1rem;
        }
        .hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }
        .hero p {
            font-size: 1.25rem;
            margin-bottom: 2rem;
        }
        .hero .buttons a {
            display: inline-block;
            margin: 0 0.5rem;
            padding: 0.75rem 2rem;
            border-radius: 0.5rem;
            background: #7c3aed;
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            transition: background 0.2s;
        }
        .hero .buttons a.secondary {
            background: transparent;
            border: 2px solid #fff;
        }
        .hero .buttons a:hover {
            background: #5b21b6;
        }
        section {
            max-width: 900px;
            margin: 2rem auto;
            padding: 2rem 1rem;
            background: rgba(255,255,255,0.05);
            border-radius: 1rem;
        }
        h2 {
            text-align: center;
            margin-bottom: 1.5rem;
        }
        .features {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
            justify-content: center;
        }
        .feature {
            flex: 1 1 250px;
            background: rgba(255,255,255,0.08);
            border-radius: 0.75rem;
            padding: 1.5rem;
            text-align: center;
        }
        .feature-icon {
            font-size: 2rem;
            margin-bottom: 0.5rem;
        }
        form label {
            display: block;
            margin-bottom: 0.5rem;
        }
        form input, form textarea {
            width: 100%;
            padding: 0.5rem;
            border-radius: 0.3rem;
            border: none;
            margin-bottom: 1rem;
        }
        form button {
            background: #7c3aed;
            color: #fff;
            padding: 0.75rem 2rem;
            border: none;
            border-radius: 0.5rem;
            font-weight: bold;
            cursor: pointer;
        }
        footer {
            text-align: center;
            padding: 2rem 1rem;
            color: #ccc;
            font-size: 0.95rem;
        }
    </style>
</head>
<body>
    <nav>
        <div class="container">
            <div class="logo">ModernApp</div>
            <div>
                <a href="#features">Features</a>
                <a href="#about">About</a>
                <a href="#contact">Contact</a>
            </div>
        </div>
    </nav>

    <div class="hero">
        <h1>Welcome to ModernApp</h1>
        <p>Create your next project with a beautiful, responsive, and secure web application foundation.</p>
        <div class="buttons">
            <a href="#features">Get Started</a>
            <a href="#about" class="secondary">Learn More</a>
        </div>
    </div>

    <section id="features">
        <h2>Features</h2>
        <div class="features">
            <div class="feature">
                <div class="feature-icon">🚀</div>
                <h3>Fast Performance</h3>
                <p>Lightning-fast load times and smooth user experience</p>
            </div>
            <div class="feature">
                <div class="feature-icon">🎨</div>
                <h3>Modern Design</h3>
                <p>Beautiful and responsive interfaces for all devices</p>
            </div>
            <div class="feature">
                <div class="feature-icon">🔒</div>
                <h3>Secure</h3>
                <p>Enterprise-grade security and data protection</p>
            </div>
        </div>
    </section>

    <section id="about">
        <h2>About ModernApp</h2>
        <p style="text-align:center;">
            ModernApp is a starter template for building robust, scalable, and visually appealing web applications. Focused on performance, security, and user experience, it helps you launch your ideas faster and better.
        </p>
    </section>

    <section id="contact">
        <h2>Contact Us</h2>
        <form>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
            
            <label for="message">Message</label>
            <textarea id="message" name="message" rows="4" required></textarea>
            
            <button type="submit">Send Message</button>
        </form>
    </section>

    <footer>
        &copy; 2024 ModernApp. All rights reserved.
    </footer>
</body>
</html>
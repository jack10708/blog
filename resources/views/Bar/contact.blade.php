@extends('layouts.app')

<style>
    /* contact.css */

            /* Contact Hero */
            .contact-hero {
                padding: 100px;
                text-align: center;
                background-color: #f5f5f5;
            }

            .contact-hero h1 {
                font-size: 48px;
                margin-bottom: 20px;
            }

            .contact-hero p {
                font-size: 24px;
                color: #666;
            }

            /* Contact Form */
            .contact-form {
                padding: 50px;
                max-width: 600px;
                margin: 0 auto;
            }

            .form-group {
                margin-bottom: 20px;
            }

            label {
                display: block;
                font-weight: bold;
                margin-bottom: 5px;
            }

            input,
            textarea {
                width: 100%;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
            }

            .btn-submit {
                display: block;
                width: 100%;
                padding: 10px;
                background-color: #333;
                color: #fff;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }

            .btn-submit:hover {
                background-color: #555;
            }

            /* Form Response */
            .alert {
                padding: 15px;
                margin-bottom: 20px;
                border: 1px solid transparent;
                border-radius: 4px;
            }

            .alert-success {
                color: #3c763d;
                background-color: #dff0d8;
                border-color: #d6e9c6;
            }

            .alert-danger {
                color: #a94442;
                background-color: #f2dede;
                border-color: #ebccd1;
            }

            /* Contact Information */
            .contact-info {
                padding: 50px;
                text-align: center;
                background-color: #f5f5f5;
            }

            .contact-info h2 {
                font-size: 36px;
                margin-bottom: 40px;
            }

            .info-item {
                display: flex;
                align-items: center;
                justify-content: center;
                margin-bottom: 20px;
            }

            .info-item i {
                font-size: 24px;
                color: #333;
                margin-right: 10px;
            }

            .info-item p {
                font-size: 18px;
            }

            /* Map Section */
            .map-section {
                padding: 50px;
                text-align: center;
            }

            .map-section h2 {
                font-size: 36px;
                margin-bottom: 20px;
            }

            #map {
                height: 400px;
                width: 100%;
            }

</style>
</head>
<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <!-- Navigation menu from the home page -->
    </header>

    <div class="contact-hero">
        <h1>Get in Touch</h1>
        <p>Have a question or want to collaborate? Drop us a line!</p>
    </div>

    <div class="contact-form">
        <form id="contact-form">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn-submit">Submit</button>
        </form>
        <div id="form-response"></div>
    </div>

    <div class="contact-info">
        <h2>Contact Information</h2>
        <div class="info-item">
            <i class="fas fa-map-marker-alt"></i>
            <p>123 Main Street, Anytown USA</p>
        </div>
        <div class="info-item">
            <i class="fas fa-phone"></i>
            <p>+1 (555) 123-4567</p>
        </div>
        <div class="info-item">
            <i class="fas fa-envelope"></i>
            <p>info@wanderlustchronicles.com</p>
        </div>
    </div>

    <div class="map-section">
        <h2>Find Us</h2>
        <div id="map"></div>
    </div>

<footer class="footer-distributed">
                <!-- Footer from the home page -->

                <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            // You can add additional validation and sanitization here

            $to = 'info@wanderlustchronicles.com';
            $subject = 'New Contact Form Submission';
            $body = "Name: $name\nEmail: $email\nMessage: $message";

            if (mail($to, $subject, $body)) {
                echo 'Thank you for your message. We will get back to you soon.';
            } else {
                echo 'An error occurred. Please try again later.';
            }
        }
        ?>
</footer>


    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>
    <script src="navbar/js/contact.js"></script>
</body>
</html>

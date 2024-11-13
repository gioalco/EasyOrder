<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyOrder Restaurant</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <script src="components/header.js" defer></script>
    <script src="components/footer.js" defer></script>

    <style>
        #logo {
            height: 90px;
        }

        /* Basic reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            color: #333;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Hero Section */
        .hero {
            background-image: url('img/restaurant.jpg'); /* Ensure file extension is included */
            background-size: cover;
            background-position: center;
            height: 500px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
            padding: 20px;
        }

        .hero h2 {
            font-size: 48px;
            margin-bottom: 10px;
        }

        .hero p {
            font-size: 20px;
            margin-bottom: 20px;
        }

        /* Contact Section */
        .contact-section {
            padding: 40px;
            text-align: center;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin: -100px auto 40px;
            max-width: 800px;
        }

        .contact-section h2 {
            margin-bottom: 20px;
            font-size: 32px;
            color: #333;
        }

        .contact-info {
            margin: 20px 0;
            font-size: 18px;
        }

        .contact-info p {
            margin: 10px 0;
        }

        /* Map Section */
        .map-section {
            display: flex;
            justify-content: center;
            margin: 20px 0;
        }

        .map-embed {
            width: 100%;
            max-width: 800px;
            border: 0;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>

</head>
<body>
<!--HEADER-->
<?php include 'components/header-public.php'; ?>

<!-- Hero Section -->
<section class="hero">
    <div>
        <h2>Contact Us</h2>
        <p>We're here to help! Get in touch with us.</p>
    </div>
</section>

<!-- Contact Section -->
<section class="contact-section">
    <h2>Get in Touch</h2>
    <div class="contact-info">
        <p><strong>Location:</strong> 123 Food Street, Flavor Town, FT 12345</p>
        <p><strong>Email:</strong> contact@easyorder.com</p>
        <p><strong>Contact Number:</strong> (123) 456-7890</p>
    </div>
</section>

<!-- Map Section -->
<section class="map-section">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.5717269109086!2d121.0124462737033!3d14.566466577914252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c9080e6f2abd%3A0x1d5b9be15aad02!2sMap%C3%BAa%20University%20Makati!5e0!3m2!1sen!2sph!4v1731438052328!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

<!-- FOOTER -->
<footer-component></footer-component>
</body>
</html>

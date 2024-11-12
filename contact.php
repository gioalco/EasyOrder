<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyOrder Restaurant</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <script src="components/header.js"></script>
    <script src="components/footer.js"></script>

    <style>
        /* Basic reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            color: #333;
            background-color: #f4f4f4; /* Light background for contrast */
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Ensure body takes at least full height of viewport */
        }

        /* Hero Section */
        .hero {
            background-image: url('https://placehold.co/1920x1080'); /* Replace with actual image */
            background-size: cover;
            background-position: center;
            height: 500px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
            padding: 20px; /* Added padding for better spacing */
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
            background-color: #fff; /* White background for contrast */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin: -100px auto 40px; /* Negative margin to pull it up */
            max-width: 800px; /* Limit the width */
        }

        .contact-section h2 {
            margin-bottom: 20px;
            font-size: 32px; /* Larger font size for the heading */
            color: #333; /* Darker color for better readability */
        }

        .contact-info {
            margin: 20px 0;
            font-size: 18px; /* Larger font size for contact details */
        }
    </style>

</head>
<body>
<!--HEADER-->
<?php include 'components/header-public.php' ?>



<!--    TODO: CHANGE THIS -->
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



<!-- FOOTER -->
<footer-component></footer-component>
</body>
</html>

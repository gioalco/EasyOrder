<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - EasyOrder Restaurant</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="css/header.css" rel="stylesheet">
    <script src="components/header.js"></script>
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
            background-color: #f4f4f4;

            justify-content: center;
            align-items: center;
        }

        /* About Us Content Box */
        .about-container {
            max-width: 800px;
            margin: 50px auto;
            padding: 30px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .about-container h2 {
            color: #333;
            margin-bottom: 20px;
        }

        .about-container p {
            margin: 15px 0;
            line-height: 1.6;
        }

        /* Mission and Values Section */
        .mission-values {
            display: flex;
            justify-content: center;
            padding: 40px 20px;
            background-color: #fff;
            width: 80%;
            margin: 0 auto;
            border-radius: 30px;
        }

        .mission-item {
            /*width: 30%;*/
            width: 45ch;
            text-align: center;
            margin: 0 20px;
            line-height: 1.6;
        }

        .mission-item img {
            width: 80px;
            margin-bottom: 15px;
        }

        .mission-item h3 {
            font-size: 24px;
            color: #333;
            margin-bottom: 10px;
        }

        .mission-item p {
            font-size: 16px;
            color: #666;
        }

    </style>
</head>
<body>
<section class="background">
    <?php
        include('components/header.php');
    ?>

    <!-- About Us Section -->
    <section class="about-container">
        <br><br>

        <h2>About Us</h2>
        <p>
            At EasyOrder Restaurant, we believe in more than just great food – we believe in a great experience. Since our founding, we’ve been committed to serving our customers with the freshest ingredients, unique flavors, and an unforgettable dining experience, whether you're enjoying your meal at our restaurant or ordering online for delivery.
        </p>
        <p>
            Our mission is simple: to bring you closer to quality meals through easy and convenient ordering. With a team that values innovation and customer satisfaction, we ensure every order is crafted to perfection and delivered with care.
        </p>
    </section>

    <!-- Mission and Values Section -->
    <section class="mission-values">
        <div class="mission-item">
            <h3>Our Mission</h3>
            <p>
                To make delicious, quality food accessible to everyone. We aim to make every order feel like an experience worth remembering.
            </p>
        </div>
        <div class="mission-item">
            <h3>Our Vision</h3>
            <p>
                A world where anyone can enjoy high-quality food, conveniently and affordably. EasyOrder strives to make this a reality one order at a time.
            </p>
        </div>
        <div class="mission-item">
            <h3>Our Values</h3>
            <p>
                Integrity, quality, and customer-first service. We take pride in every dish, every delivery, and every satisfied smile.
            </p>
        </div>
    </section>

    <footer-component></footer-component>
</section>
</body>
</html>

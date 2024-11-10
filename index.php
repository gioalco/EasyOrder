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
        }

        .hero h2 {
            font-size: 48px;
            margin-bottom: 10px;
        }

        .hero p {
            font-size: 20px;
            margin-bottom: 20px;
        }

        .hero .btn {
            padding: 10px 20px;
            margin: 5px;
            font-size: 18px;
            text-decoration: none;
            color: white;
            background-color: #FF6347;
            border-radius: 5px;
        }

        /* Highlights Section */
        @media screen and (max-width: 600px) {
            .highlights {
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 2em;
                text-align: center;
                padding: 10%;
            }
            .highlight-item h3 {
                padding: 0.25em;
            }
        }
        @media screen and (min-width: 600px) {
            .highlights {
                display: flex;
                justify-content: center;
                padding: 3em;
                text-align: center;
                width: min(1500px, 100%);
                margin: 0 auto;
                gap: 1em;
                flex-wrap: wrap;
            }
            .highlight-item {
                width: 30%;
            }
            .highlight-item img {
                width: 80px;
                margin-bottom: 15px;
            }
        }

        /* Menu Highlights */
        .menu-highlights {
            padding: 40px;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.25em;;
        }

        .menu-highlights h2 {
            margin-bottom: 20px;
        }

        .menu-highlights .btn {
            padding: 10px 20px;
            color: white;
            background-color: #FF6347;
            border-radius: 5px;
            text-decoration: none;
            width: max-content;
        }

        /* Reservation Banner */
        .reservation-banner {
            background-image: url('https://placehold.co/1920x300'); /* Replace with actual image */
            background-size: cover;
            background-position: center;
            color: white;
            padding: 2.5em;
            text-align: center;
        }

        /* Reviews Section */
        .reviews {
            padding: 40px;
            background-color: #f9f9f9;
            text-align: center;
        }

        .reviews h2 {
            margin-bottom: 20px;
        }

        .review-container {
            display: flex;
            justify-content: center;
        }

        .review {
            margin: 10px;
            padding: 2em;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: inline-block;
            width: clamp(200px, 50vw, 300px);
            vertical-align: top;
        }

        .review img {
            padding-bottom: 0.75em;
        }

        .review p {
            padding-bottom: 0.5em;
        }

        @media screen and (max-width: 600px) {
            .review-container {
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            .review {
                width: max(200px, 65%);
                padding: 2em;
            }
        }

    </style>
</head>
<body>

    <?php
        include('components/header.php');
    ?>

    <!-- Hero Section -->
    <section class="hero">
        <div>
            <h2></h2>
            <p>Delicious food, just a click away.</p>
            <a href="#" class="btn">Order Online</a>

            <a href="#" class="btn">View Menu</a>
        </div>
    </section>

    <!-- Highlights Section -->
    <section class="highlights">
        <div class="highlight-item">
            <img src="https://placehold.co/80" alt="Fresh Ingredients">
            <h3>Fresh Ingredients</h3>
            <p>Only the finest, locally sourced ingredients.</p>
        </div>
        <div class="highlight-item">
            <img src="https://placehold.co/80" alt="Quick Delivery">
            <h3>Quick Delivery</h3>
            <p>Fast and reliable, right to your door.</p>
        </div>
        <div class="highlight-item">
            <img src="https://placehold.co/80" alt="Happy Customers">
            <h3>Customer Satisfaction</h3>
            <p>We pride ourselves on quality and taste.</p>
        </div>
    </section>

    <!-- Menu Highlights Section -->
<!--    <section class="menu-highlights">-->
<!--        <h2>Featured Dishes</h2>-->
<!--        <p>Explore our top picks!</p>-->
<!--        <a href="#" class="btn">View Full Menu</a>-->
<!--    </section>-->

    <!-- Reservation Banner -->
    <section class="reservation-banner">
        <h2>Reserve a Table for an Unforgettable Experience</h2>
        <a href="#" class="btn">Make a Reservation</a>
    </section>

    <!-- Reviews Section -->
    <section class="reviews">
        <h2>What Our Customers Say</h2>
        <div class="review-container">
            <div class="review">
                <img src="https://placehold.co/80" alt="Person">
                <p>"The best food I've had all year!"</p>
                <span>★★★★★</span>
            </div>
            <div class="review">
                <img src="https://placehold.co/80" alt="Person">
                <p>"Fast delivery and delicious meals!"</p>
                <span>★★★★★</span>
            </div>
            <div class="review">
                <img src="https://placehold.co/80" alt="Person">
                <p>"A dining experience to remember!"</p>
                <span>★★★★★</span>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer-component></footer-component>

</body>
</html>

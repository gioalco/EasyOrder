<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/signup_view.inc.php';
require_once 'includes/login_view.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyOrder Restaurant - Sign In / Sign Up</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <script src="components/header.js"></script>
    <script src="components/footer.js"></script>
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
            background-color: #f4f4f4; /* Light background for contrast */
        }

        /* Hero Section */
        .hero {
            background-image: url('img/restaurant.jpg'); /* Replace with actual image */
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

        /* Form Section */
        .form-section {
            padding: 40px;
            text-align: center;
            background-color: #fff; /* White background for contrast */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin: -100px auto 40px; /* Negative margin to pull it up */
            max-width: 800px; /* Limit the width */
        }

        .form-section h2 {
            margin-bottom: 20px;
            font-size: 32px; /* Larger font size for the heading */
            color: #333; /* Darker color for better readability */
        }

        .form-container {
            display: flex;
            justify-content: space-around;
            align-items: flex-start;
            flex-wrap: wrap; /* Allow wrapping on smaller screens */
        }

        .form-container form {
            width: 300px; /* Fixed width for forms */
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #f9f9f9; /* Light background for forms */
            margin: 10px; /* Spacing between forms */
            transition: transform 0.3s; /* Smooth transform transition */
        }

        .form-container form:hover {
            transform: scale(1.02); /* Slightly enlarge on hover */
        }

        .form-container input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px; /* Larger font size for inputs */
        }

        .form-container button {
            padding: 10px;
            color: white;
            background-color: #FF6347;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s; /* Smooth background color transition */
        }

        .form-container button:hover {
            background-color: #e5533d; /* Darker shade on hover */
        }

        .form-error {
            color: gray;
            text-align: right;
        }

        /* Reviews Section */
        .reviews {
            padding: 40px;
            background-color: #f9f9f9;
            text-align: center;
        }

        .reviews h2 {
            margin-bottom: 20px;
            font-size: 32px; /* Larger font size for the heading */
        }

        .review {
            margin: 10px;
            padding: 20px;
        }
    </style>
</head>
<body>
    <?php
        include('components/header-public.php');
    ?>

    <!-- Hero Section -->
    <section class="hero">
        <div>
            <h2>Welcome to EasyOrder</h2>
            <p>Please sign in or sign up to continue.</p>
        </div>
    </section>

    <!-- Form Section -->
    <section class="form-section" id="form-section">
        <h2>Sign In / Sign Up</h2>
        <div class="form-container">
            <!-- Sign In Form -->
            <form id="sign-in-form" action="includes/login.inc.php" method="post">
                <h3>Sign In</h3>
                <input type="text" name="username" placeholder="Username">
                <input type="password" name="pwd"  placeholder="Password">
                <button type="submit">Sign In</button>
                <p class="form-error"><?php check_login_errors(); ?></p>
            </form>

            <!-- Sign Up Form -->
            <form id="sign-up-form" action="includes/signup.inc.php" method="post">
                <h3>Sign Up</h3>
                <?php
                    signup_inputs();
                ?>
                <button type="submit">Sign Up</button>
                <p class="form-error"><?php check_signup_errors(); ?></p>
            </form>

        </div>
    </section>

     <!-- Reviews Section -->
     <section class="reviews">
        <h2>What Our Customers Say</h2>
        <div class="review">
            <p>"The best food I've had all year!"</p>
            <span>★★★★★</span>
        </div>
        <div class="review">
            <p>"Fast delivery and delicious meals!"</p>
            <span>★★★★★</span>
        </div>
        <div class="review">
            <p>"A dining experience to remember!"</p>
            <span>★★★★★</span>
        </div>
    </section>

    <footer-component></footer-component>

</body>
</html>
                
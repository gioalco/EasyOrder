<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile | EasyOrder Restaurant</title>
    <link rel="stylesheet" href="style.css">
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
            background-image: url('about-bg.jpg'); /* Replace with actual image */
            background-size: cover;
            background-position: center;
            height: 500px;
            justify-content: center;
            align-items: center;
        }

        /* Profile Container */
        .profile-container {
            max-width: 500px;
            margin: 40px auto;
            padding: 20px;
            background: #fff;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }

        button {
            background-color: #333;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }

        button:hover {
            background-color: #555;
        }

        /* Footer */
        footer {
            padding: 20px;
            background-color: #333;
            color: white;
            text-align: center;
        }

        footer a {
            color: #FF6347;
            text-decoration: none;
            margin: 0 10px;
            transition: color 0.3s;
        }

        footer a:hover {
            color: #e55341;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <?php
        include("components/header.php");
    ?>
<!--    <header>-->
<!--        <h1>EasyOrder Restaurant</h1>-->
<!--        <nav>-->
<!--            <ul class = "sidebar">-->
<!--                <li onclick=hideSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>-->
<!--                <li><a href="index.html">Home</a></li>-->
<!--                <li><a href="restaurant.html">Restaurant</a></li>-->
<!--                <li><a href="order.html">Order Online</a></li>-->
<!--                <li><a href="contact.html">Contact Us</a></li>-->
<!--                <li><a href="about-us.html">About Us</a></li>-->
<!--                <li><a href="user-profile.html">Profile</a></li>-->
<!--            </ul>-->
<!--            <ul>-->
<!--                <li class = "hideOnMobile"><a href="index.html">Home</a></li>-->
<!--                <li class = "hideOnMobile"><a href="restaurant.html">Restaurant</a></li>-->
<!--                <li class = "hideOnMobile"><a href="order.html">Order Online</a></li>-->
<!--                <li class = "hideOnMobile"><a href="contact.html">Contact Us</a></li>-->
<!--                <li class = "hideOnMobile"><a href="about-us.html">About Us</a></li>-->
<!--                <li class = "hideOnMobile"><a href="user-profile.html">Profile</a></li>-->
<!--                <li class = "menu-button" onclick=showSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26px" viewBox="0 -960 960 960" width="26px" fill="#e8eaed"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li>-->
<!--            </ul>-->
<!--        </nav>-->
<!--    </header>-->

    <!-- Profile Management Section -->
    <div class="profile-container">
        <h2>Edit Profile</h2>
        <form id="profile-form">
            <div class="form-group">
                <label for="full_name">Full Name</label>
                <input type="text" id="full_name" required>
            </div><br>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" id="phone" required>
            </div><br>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="text" id="email" required>
            </div><br>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" id="address" required>
            </div><br>
            <div class="form-group">
                <label for="bio">Bio</label>
                <textarea id="bio">This is my bio...</textarea>
            </div><br>
            <button type="button" onclick="saveProfile()">Save Profile</button>
        </form>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 EasyOrder Restaurant</p>
        <div>
            <a href="index.html">Home</a> |
            <a href="menu.html">Menu</a> |
            <a href="order.html">Order Online</a> |
            <a href="contact.html">Contact Us</a>
        </div>
    </footer>

    <!-- JavaScript to handle form save -->
    <script>
        // function showSidebar(){
        //     const sidebar = document.querySelector('.sidebar')
        //     sidebar.style.display = 'flex'
        // }
        //
        // function hideSidebar(){
        //     const sidebar = document.querySelector('.sidebar')
        //     sidebar.style.display = 'none'
        // }
        
        function saveProfile() {
            const fullName = document.getElementById("full_name").value;
            const phone = document.getElementById("phone").value;
            const address = document.getElementById("address").value;
            const bio = document.getElementById("bio").value;

            // Display profile data in an alert
            alert(`Profile Updated:\n\nFull Name: ${fullName}\nPhone: ${phone}\nAddress: ${address}\nBio: ${bio}`);
        }
    </script>
</body>
</html>

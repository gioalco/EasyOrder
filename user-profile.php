<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile | EasyOrder Restaurant</title>
    <link rel="stylesheet" href="style.css"></link>
    <script src="components/header.js" defer></script>
    <script src="components/footer.js" defer></script>
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
        }

        /* Profile Container */
        .profile-container {
            width: 90%;
            max-width: 500px;
            margin: 5em auto 2em ;
            padding: 20px;
            background: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px 0 rgba(0,0,0,0.1);
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

    </style>
</head>
<body>

<section class="background">
    <header-component></header-component>

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

    <footer-component></footer-component>
    </section>

    <!-- JavaScript to handle form save -->
    <script>
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

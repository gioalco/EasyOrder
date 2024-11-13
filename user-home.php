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
    <title>User Home</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <script src="components/header.js"></script>
    <script src="components/footer.js"></script>
</head>
    <style>
        * {
            transition-timing-function:ease-in;
        }

        a {
            text-decoration: none;
            color: black;
        }

        .column_container {
            display: flex;
            justify-content: center;
            gap: 10em;
        }


        .username {
            padding: 1em;
        }
        .card_container {
            display: grid;
            grid-template-columns: repeat(2, auto);
            /*background-color: orange;*/
            justify-content: center;
            gap: 1em;
        }

        .card {
            display: flex;
            flex-direction: column;
            text-align: center;
            /*border: 1px solid black;*/
            box-shadow: 5px 5px 10px lightgray;
            border-radius: 1em;
            padding: 1em;
        }

        .card:hover {
            transform: scale(1.02)
        }

        .info {
            display: none;
        }

        img {
            width: 120px;
            height: 80px;
        }

        h2 {
            text-align: center;
            padding: 1em;
        }

        #chatbot {
            padding-block: 1em;
            padding-inline: 2em;
            padding-bottom: 4em;
            box-shadow: 5px 5px 30px lightgrey;
            border-radius: 1em;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        #chatbot:hover {
            transform: scale(1.02);
        }
    </style>
<body>
    <?php include 'components/header-user.php' ?>
    <h1 class="username">
        <?php
        output_username();
        ?>
    </h1>

    <div class="column_container">

        <div class="column" id="chatbot">
            <a href="http://localhost:7000" target="_blank">
            <h2>Try our Chatbot</h2>
            <div class="card_container">
<!--                <img src="img/chatbot.png" onclick=toChatbot()>-->
                <img src="img/chatbot.png">
            </div>
            </a>
        </div>

        <div class="column">
            <h2>View Menu</h2>
            <div class="card_container">
                <div class="card">
                    <div class="image"><a href="https://www.chowkingdelivery.com/home" target="_blank"><img src="img/chowking.png"></a></div>
                    <div class="info">Restaurant</div>
                </div>
                <div class="card">
                    <div class="image"><a href="https://www.jollibeedelivery.com/menu" target="_blank"><img src="img/jollibee.png"></a></div>
                    <div class="info">Restaurant</div>
                </div>
                <div class="card">
                    <div class="image"><a href="https://www.manginasal.ph/menu" target="_blank"><img src="img/mang-inasal.png"></a></div>
                    <div class="info">Restaurant</div>
                </div>
                <div class="card">
                    <div class="image"><a href="https://order.greenwich.com.ph/menu" target="_blank"><img src="img/greenwich.png"></a></div>
                    <div class="info">Restaurant</div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
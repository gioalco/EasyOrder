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
<body>
    <?php include 'components/header-user.php' ?>
    <h1>
        <?php
        output_username();
        ?>
    </h1>
    <br><br><br><br><br>
</body>
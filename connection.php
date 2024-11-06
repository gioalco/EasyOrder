<?php

    $database_host = "localhost";
    $database_user = "root";
    $database_pass = "";
    $database_name = "EasyOrderTest";

    try {
        $conn = mysqli_connect($database_host, $database_user, $database_pass, $database_name);
    }
    catch (mysqli_sql_exception $ex){
        echo $ex->getMessage();
    }


    if (!$conn) {
        echo "Connection failed: " . mysqli_connect_error();
    }
    else {
        echo "Connected successfully";
    }

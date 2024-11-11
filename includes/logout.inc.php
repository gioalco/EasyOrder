<?php
# INC stands for includes directory

session_start();
session_unset();
session_destroy();

header("Location: ../index.php");
die();

<?php

// contr stands for Controller as MVC pattern

//declare(strict_types=1);

function is_input_empty($email, $pwd) {
    if (empty($email) || empty($pwd)) {
        return true;
    }
    else {
        return false;
    }
}

function is_email_invalid($email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    }
    else {
        return false;
    }
}

function is_username_taken($pdo, $username) {
    if (get_username($pdo, $username)) {
        return true;
    }
    else {
        return false;
    }
}

function is_email_registered($pdo, $email) {
    if (get_email($pdo, $email)) {
        return true;
    }
    else {
        return false;
    }
}

function create_user($pdo, $pwd, $username, $email) {
    set_user($pdo, $pwd, $username, $email);
}


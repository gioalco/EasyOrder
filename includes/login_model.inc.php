<?php
# INC stands for includes directory

declare(strict_types=1);

function get_user(object $pdo, string $username)
{
    $query = "SELECT * FROM person WHERE username = :username;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

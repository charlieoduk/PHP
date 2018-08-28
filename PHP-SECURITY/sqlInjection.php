<?php

/* Sql injection is a technique used to attack data driven applications
 * Hackers will try to excecute their SQL statements within you application
 * and access your database.
 * We use PDO and prepeared queries in PHP > 5 to protect from SQL injections.
 * Lumen's Eloquent ORM uses PDO to prevent SQL injection out of the box.
 * Below is an example using vanilla PHP
*/


$stmt = $conn->prepare("SELECT * FROM `users` WHERE `email`=:email AND `password` = :password");
$stmt->bindValue(':email', $_POST["email"]);
$stmt->bindValue(':password', $_POST["password"]);
$stmt->execute();

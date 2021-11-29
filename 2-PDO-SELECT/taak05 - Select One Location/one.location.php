<?php

require 'database.php';

$city = "Groningen";

$sql = 'SELECT * FROM locations WHERE city = :city';
$statement = $database_connectie->prepare($sql);
$statement->bindParam(":city", $city);
$statement->execute();
$user = $statement->fetch(); //met fetch haal je 1 rij op uit de database




echo 'naam:'.  $user['name'] . "<br>";
echo 'adres:'.  $user['address'] . "<br>";
echo 'city:'.  $user['city'] . "<br>";

?>
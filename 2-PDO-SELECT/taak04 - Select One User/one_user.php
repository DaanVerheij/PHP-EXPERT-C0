<?php

require 'database.php';

$email = "bart@toolsforever.nl";

$sql = 'SELECT * FROM users WHERE email = :email';
$statement = $database_connectie->prepare($sql);
$statement->bindParam(":email", $email);
$statement->execute();
$user = $statement->fetch(); //met fetch haal je 1 rij op uit de database




echo 'voornaam:'.  $user['firstname'] . "<br>";
echo 'achternaam:'.  $user['lastname'] . "<br>";
echo 'email:'.  $user['email'] . "<br>";



// foreach($user as $key => $value){
//      echo $value;
//  }
?>
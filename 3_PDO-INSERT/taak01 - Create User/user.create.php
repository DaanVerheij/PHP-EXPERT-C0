<?php

echo "<pre>";
var_dump($_POST);


$database_lokatie     = 'localhost';
$database_naam        = 'toolsforever';
$database_gebruiker   = 'root';
$database_wachtwoord  = '';

$database_connectie = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);




//gegevens uit een formulier ophalen met de post method.
$firstname = $_POST['form_firstname'];
$lastname = $_POST['form_lastname'];



// !! De onderstaande code voegt gebruikers toe en geen producten. Pas de code aan.!!
$sql = "INSERT INTO signin (firstname, lastname) VALUES (:ph_firstname , :ph_lastname)" ;//sql query met PLACEHOLDERS
//een ID slaan we niet op, deze wordt automatisch aangemaakt door MySQL
$stmt = $database_connectie->prepare($sql); //stuur naar mysql.
$stmt->bindParam(":ph_firstname", $firstname ); //verbind de waardes
$stmt->bindParam(":ph_lastname", $lastname );


$stmt->execute();


?>
<?php

echo "<pre>";
var_dump($_POST);


$database_lokatie     = 'localhost';
$database_naam        = 'toolsforever';
$database_gebruiker   = 'root';
$database_wachtwoord  = '';

$database_connectie = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);




//gegevens uit een formulier ophalen met de post method.
$name = $_POST['form_name'];
$address= $_POST['form_address'];
$city = $_POST['form_city'];



// !! De onderstaande code voegt gebruikers toe en geen producten. Pas de code aan.!!
$sql = "INSERT INTO locations (name, address, city) VALUES (:ph_name , :ph_address , :ph_city)" ;//sql query met PLACEHOLDERS
//een ID slaan we niet op, deze wordt automatisch aangemaakt door MySQL
$stmt = $database_connectie->prepare($sql); //stuur naar mysql.
$stmt->bindParam(":ph_name", $name ); //verbind de waardes
$stmt->bindParam(":ph_address", $address );
$stmt->bindParam(":ph_city", $city );


$stmt->execute();


?>
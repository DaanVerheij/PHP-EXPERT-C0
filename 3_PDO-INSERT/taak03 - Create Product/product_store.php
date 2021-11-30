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
$purchaseprice= $_POST['form_purchase_price'];
$sellingprice = $_POST['form_selling_price'];



// !! De onderstaande code voegt gebruikers toe en geen producten. Pas de code aan.!!
$sql = "INSERT INTO products (name, purchase_price, selling_price) VALUES (:ph_name , :ph_purchase_price , :ph_selling_price)" ;//sql query met PLACEHOLDERS
//een ID slaan we niet op, deze wordt automatisch aangemaakt door MySQL
$stmt = $database_connectie->prepare($sql); //stuur naar mysql.
$stmt->bindParam(":ph_name", $name ); //verbind de waardes
$stmt->bindParam(":ph_purchase_price", $purchaseprice );
$stmt->bindParam(":ph_selling_price", $sellingprice );


$stmt->execute();


?>
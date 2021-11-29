<?php
require 'database.php';

$sql = 'SELECT * FROM locations';
$statement = $database_connectie->prepare($sql);
$statement->execute();
$all_locations = $statement->fetchAll(); //fetchAll alle rijen die voldoen aan de sql-statemnt

foreach($all_locations as $location){  
    echo '<h2>' . $location['name']. '</h2>';
 echo 'adres:'. $location['address'] . "<br>";
 echo 'stad:' . $location['city'] . "<br>" . "<br>";
}
?>
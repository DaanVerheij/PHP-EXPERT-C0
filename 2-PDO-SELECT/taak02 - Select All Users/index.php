<?php
require 'database.php';

$sql = 'SELECT * FROM users';
$statement = $database_connectie->prepare($sql);
$statement->execute();
$all_users = $statement->fetchAll(); //fetchAll alle rijen die voldoen aan de sql-statemnt

foreach($all_users as $user){  
 echo '<h2>' . $user['firstname']. '</h2>';
 echo '<h2>' . $user['lastname']. '</h2>'; 
 echo $user['email'] . "<br>";
 echo $user['password'] . "<br>";
}
?>
<?php


  
$provincies = array(
    "provincie" => 'Groningen', 
    "hoofdstad" => 'Groningen', 
    "bevolking" => '583990',
    "inwoners_gemeente" => '100.000'

);



foreach($provincies as $provincie ){
    echo '<h2>' . $provincie['provincie']. '</h2>';
    echo '<ul>';
    echo '<li>hoofdstad: ' . $provincie['hoofdstad']. '</li>';
    echo '<li>bevolking: ' . $provincie['bevolking']. '</li>';
    echo '<li>meeste inwoners: ' . $provincie['inwoners_gemeente']. '</li>';
    echo '</ul>';

}

?>
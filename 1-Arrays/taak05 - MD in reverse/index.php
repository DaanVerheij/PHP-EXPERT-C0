<?php


  
$provincies = [
    [
      'provincie' => 'Groningen',
      'hoofdstad' => 'Groningen',
      'bevolking' => '583990',
      'inwoners_gemeente'  => 'Groningen'
    ],
    [
        'provincie' => 'Drenthe',
        'hoofdstad' => 'Assen',
        'bevolking' => '493.682',
        'inwoners_gemeente'  => 'Emmen'
    ],
    [
        'provincie' => 'Noord-Holland',
        'hoofdstad' => 'Amsterdam',
        'bevolking' => '2.879.527',
        'inwoners_gemeente'  => 'Amsterdam'
    ],
    [
        'provincie' => 'Zuid-Holland',
        'hoofdstad' => 'Den Haag',
        'bevolking' => '3.708.696',
        'inwoners_gemeente'  => 'Rotterdam'
    ],


];




foreach($provincies as $provincie ){
    echo '<h2>' . $provincie['provincie']. '</h2>';
    echo '<ul>';
    echo '<li>hoofdstad: ' . $provincie['hoofdstad']. '</li>';
    echo '<li>bevolking: ' . $provincie['bevolking']. '</li>';
    echo '<li>meeste inwoners: ' . $provincie['inwoners_gemeente']. '</li>';
    echo '</ul>';

}

?>
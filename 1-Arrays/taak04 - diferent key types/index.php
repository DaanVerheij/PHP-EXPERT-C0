<?php

$speelgoed = [

    [
        'naam' => 'bal',
        'soort' => 'sport',
        'prijs' => '5.00'
    ],
    [
        'naam' => 'knuffelbeer',
        'soort' => 'knuffels',
        'prijs' => '9.50'
    ],
    [
        'naam' => 'Catan',
        'soort' => 'bordspel',
        'prijs' => '39.00'
    ],
];


$games = [
    'sport' => [
        'naam' => 'Fifa',
        'uitgever' => 'EA',
        'prijs' => '60.00'
    ],
    'action' => [
        'naam' => 'Doom',
        'uitgever' => 'Bethesda',
        'prijs' => '60.00'
    ],
    'fps' => [
        'naam' => 'Left for dead 2',
        'uitgever' => 'Valve',
        'prijs' => '40.00'
    ]
];

foreach($speelgoed as $goed){
    echo '<ul>';
    echo '<li>' .  $goed['naam'] .  '</li>';
    echo '<li>' .  $goed['soort'] .  '</li>';
    echo '<li>' .  $goed['prijs'] .  '</li>';
    echo '</ul>';
}

foreach($games as $spel){
    echo '<ul>';
    echo '<li>' .  $spel['naam'] .  '</li>';
    echo '<li>' .  $spel['uitgever'] .  '</li>';
    echo '<li>' .  $spel['prijs'] .  '</li>';
    echo '</ul>';
}




?>

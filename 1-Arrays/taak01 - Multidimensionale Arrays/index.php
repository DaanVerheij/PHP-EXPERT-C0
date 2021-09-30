<html>




<?php


$medewerkers = [
  [
    'voornaam' => 'Willem',
    'achternaam' => 'van Oranje',
    'tekst' => 'is een',
    'functie'  => 'koning'
  ],
  [
    'voornaam' => 'Donald',
    'achternaam' => 'Trump',
    'tekst' => 'is een',
    'functie'  => 'president'
  ]
];

/* De medewerkers-array heeft twee arrays. Een array op index 0 en een array op index 1
 *  Om een enkele waarde op het scherm te tonen doe je bijvoorbeeld dit.
 *
 *   <--medewerker-> */
echo $medewerkers[0]['voornaam'] ." "; // willem
echo $medewerkers[0]['achternaam']." ";  // van oranje
echo $medewerkers[0]['tekst'] ." "; // is een
echo $medewerkers[0]['functie']; // koning

echo "<br>";

echo $medewerkers[1]['voornaam'] ." ";
echo $medewerkers[1]['achternaam'] ." ";
echo $medewerkers[1]['tekst'] ." ";
echo $medewerkers[1]['functie']; 



?>


</html>
<?php



$medewerkers = [
    [
      'voornaam' => 'Willem',
      'achternaam' => 'van Oranje',
      'functie'  => 'koning'
    ],
    [
      'voornaam' => 'Donald',
      'achternaam' => 'Trump',
      'functie'  => 'president'
    ],
    [
      'voornaam' => 'Homer',
      'achternaam' => 'Simpson',
      'functie'  => 'fabrieksarbeider'
    ],
    [
      'voornaam' => 'Johan',
      'achternaam' => 'Cruyff',
      'functie'  => 'voetbalicoon'
    ]
    ,
    [
      'voornaam' => 'Badr',
      'achternaam' => 'Hari',
      'functie'  => 'Kickboxer'
    ]
  ];
  


  $num=0;

  foreach ($medewerkers as $mensen)
  {
  $num++; 
  echo "<br><b># $num</b><br>";
  foreach ($mensen as $key=>$value)
  {
  echo "$key: $value <br>";
  
  }
  }
  
  ?>

   






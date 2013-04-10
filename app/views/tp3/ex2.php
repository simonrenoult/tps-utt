<?php

  $tabCapitalesUSA = array (
    'Montgomery',
    'Raleigh', 
    'Tallahassee', 
    'Atlanta', 
    'Topeka', 
    'Augusta', 
    'Albany', 
    'Nashville'  
  );
  
  echo 'Affichage avec la balise pre :<br />';
  echo '<pre>';
  print_r ( $tabCapitalesUSA );
  echo '</pre>';
  
  echo 'Affichage via le foreach :<br />';
  echo '<p>';
  foreach ( $tabCapitalesUSA as $value ) {
    echo $value;
    echo ' ';
  }
  echo '</p>';
  
  echo 'Affichage via la fonction implode: <br />';
  echo '<p>';
  echo implode ( ', ', $tabCapitalesUSA );
  echo '</p>';
  
  echo '<p>';
  echo 'Nombre d\'éléments : ' . count ( $tabCapitalesUSA );
  echo '</p>';
  
  natsort ( $tabCapitalesUSA );
  
  echo '<pre>';
  echo 'Alphabetical sorted array :<br />';
  print_r ( $tabCapitalesUSA );
  echo '</pre>';
  
?>

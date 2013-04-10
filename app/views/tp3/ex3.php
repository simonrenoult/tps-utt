<?php

  $hashCapitales = array (
    'France' => 'Paris', 
    'Italie' => 'Rome',
    'Belgique' => 'Bruxelles', 
    'Espagne' => 'Madrid', 
    'Allemagne' => 'Berlin', 
    'Portugal' => 'Lisbonne'  
  );

  echo '<p>';
  echo 'Capitale de la France : ' . $hashCapitales['France'];
  echo '</p>';
    
  echo '<p>';
  echo 'Contenu du tableau associatif (clés).<br />';
  foreach ( $hashCapitales as $key => $value ) {
    echo $key;
    echo '<br />';
  }
  echo '</p>';
  
  echo '<p>';
  echo 'Contenu du tableau associatif (valeurs).<br />';
  foreach ( $hashCapitales as $key => $value ) {
    echo $value;
    echo '<br />';
  }
  echo '</p>';
  
  
?>

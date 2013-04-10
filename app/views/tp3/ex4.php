<?php

  $string = "prof=lemercier,cours=web,salle=C01,date=23/02/2010,cours=php";
  $pairs = explode(',',$string);
  
  $chaine_cle = '';
  $chaine_val = '';
  $premierTour = true;
  
  foreach ( $pairs as $value ) {
    $pair = explode ( '=', $value );
    $key = $pair[0];
    $content = $pair[1];
    
    if ( ! $premierTour ) {
      $chaine_cle .= ' : ';
      $chaine_val .= ' : ';
    }
    
    $premierTour = false;
    $chaine_cle .= $key;
    $chaine_val .= $content; 
  }
  
  echo 'Clés : ' . $chaine_cle;
  echo '<br />';
  echo 'Valeurs : ' . $chaine_val;
  
  $elements = array ( );
  $keys = explode ( ' : ', $chaine_cle );
  $values = explode ( ' : ', $chaine_val );
  for ( $index = 0; $index < count ( $keys ); $index++ ) {
    $elements[$keys[$index]] = $values[$index];
  }
  
  echo 'Nouveau tableau associatif :<br />';
  echo '<pre>';
  print_r ( $elements );
  echo '</pre>';
  
  echo '<p>';
  echo 'On peut remarquer qu\'un des couple clé/valeur a disparu en raison de 
    l\'existence d\'un autre clé portant le même nom.';
  echo 'On peut solutionner ce problème en définissant comme valeur de cette clé
    un tableau de valeurs et non une unique valeur.';
  echo '</p>';
?>

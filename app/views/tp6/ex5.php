<?php

  require_once 'app/tools/listes.php' ;
  
  echo 'Enregistrement des réservations en session' . '<br />';

  $res = listeReservations();
  if ( ! empty ( $res ) ) {
    foreach ( $res as $key => $val ) {
      $_SESSION[$key] = is_array ( $val ) ? serialize( $val ) : $val;
    }    
  }
  
  if ( isset ( $_SESSION ) && ! empty ( $_SESSION ) ) {
    foreach ( $_SESSION as $key => $val ) {
      echo $key . ' ' . $val;
    }
  }
  
?>

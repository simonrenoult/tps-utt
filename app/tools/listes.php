<?php

const PATH = 'public/doc/dates_soutenances.csv';
  
function getCombobox ( $name, Array $data ) {
  $ret = '<select name="' . $name . '" >[content]</select>';
  $content = '';
  foreach ( $data as $val ) {
    $content .= '<option value="'. $val .'">' . $val . '</option>';
  }

  $ret = preg_replace ( '[content]', $content, $ret );
  return $ret;
}

function persistance (  $row, $titles = null, $path = PATH ) {
  if ( file_exists ( $path ) ) {    
    file_put_contents ( $path, $row, FILE_APPEND);
  } else {
    if ( ! is_null ( $titles ) ) {
      file_put_contents ( $path, $titles );
      file_put_contents ( $path, $row, FILE_APPEND);
    }
  }
}

function listeReservations ( $path = PATH ) {
  if ( file_exists ( $path ) ) {
    $content_array = explode ( "\n", file_get_contents ( $path ) );
    $content = array_slice ( $content_array, 1 );
    return $content;
  }
}
  
function listeHeures ( ) {
  $data = [];
  for ( $heure = 8 ; $heure < 19 ; $heure++ ) {
    for ( $minute = 0; $minute < 60 ; $minute += 20 ) {
      if ( $heure < 18 || ( $heure == 18 && $minute == 0 ) ) {
        $val = preg_replace ( '/h0$/', 'h00', $heure . 'h' . $minute );
        $data[$val] = $val;
      }
    } 
  }

  return $data;
}

function listeJoursSemaine ( ) {
  return [
    "lundi" => "Lundi",
    "mardi" => "Mardi",
    "mercredi" => "Mercredi",
    "jeudi" => "Jeudi",
    "vendredi" => "Vendredi",
    "samedi" => "Samedi",
    "dimanche" => "Dimanche"
  ];
}

function listeJoursMois ( ) {
  $data = [];
  for ( $jour = 1; $jour < 32 ; $jour++ ) {
    $data[$jour] = $jour;
  }

  return $data;
}

function listeMois ( ) {
  return [
     "janvier" => "Janvier",
     "février" => "Février",
     "mars" => "Mars",
     "avril" => "Avril",
     "mai" => "Mai",
     "juin" => "Juin",
     "juillet" => "Juillet",
     "août" => "Août",
     "septembre" => "Septembre",
     "octobre" => "Octobre",
     "novembre" => "Novembre",
     "décembre" => "Décembre"
  ];
}

function listeAnnees ( ) {
  $data = [];
  for ( $index = intval ( date ( "Y" ) ) ; $index < intval ( date ( "Y" ) ) + 10 ; $index++ ) {
    $data[$index] = $index;
  }

  return $data;
}
?>

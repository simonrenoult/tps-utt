<?php

  require_once 'app/tools/listes.php' ;

  if ( isset ( $_POST ) && ! empty ( $_POST ) ) {
    $content = $_POST['jour_semaine'] . ',' 
          . $_POST['jour_mois'] . ','
          . $_POST['mois'] . ','
          . $_POST['annee'] . ','
          . $_POST['horaire'] . "\n";
    
    $titles = 'Jour de la semaine, Jour dans le mois, Mois, Année, Horaire' . "\n";
    persistance ( $content, $titles, 'public/doc/dates_soutenances.csv'  );
  }
  
?>

<form method="POST" action="index.php?tp=5&ex=1" >
  
  <?php

    echo getCombobox ( 'jour_semaine', listeJoursSemaine ( ) );
    echo getCombobox ( 'jour_mois', listeJoursMois ( ) );
    echo getCombobox ( 'mois', listeMois ( ) );
    echo getCombobox ( 'annee', listeAnnees ( ) );
    echo getCombobox ( 'horaire', listeHeures ( ) );

  ?>
  
  <input type="submit" value="Valider" />
</form>

<div>
  <h3>Réservations déjà effectuées</h3>
  <p>
    <?php
      if ( file_exists ( PATH ) ) {
        foreach ( listeReservations ( ) as $row ) {
          echo $row . '<br />';
        }
      }
    ?>
  </p>
</div>
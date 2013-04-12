<?php

require_once 'app/tools/listes.php' ;

?>

<fieldset>
  <legend>Inscription soutenance</legend>
  <form method="POST" action="index.php?tp=5&ex=2">
    <input type="text" name="prenom" placeholder=" Prénom..." required="required" /> <br />
    <input type="text" name="nom" placeholder=" Nom..." required="required" /> <br />
    <?php echo getCombobox ( "soutenances", listeReservations ( ) )?> <br />
    <input type="submit" value="Valider" />
  </form>
</fieldset>

<hr />

<fieldset>
  <legend>Affichage inscrptions soutenances</legend>
  <?php
     if ( isset ( $_POST ) && ! empty ( $_POST ) ) {               
        $titles = 'Nom, Prenom, Jour de la semaine, Jour dans le mois, Mois, Année, Horaire' . "\n";
        $content = $_POST['nom'] . ',' . $_POST['prenom'] . ',' .$_POST['soutenances'] . "\n";
        persistance ( $content, $titles, 'public/doc/personnes_soutenances.csv' );
     }
     
     foreach ( listeReservations ( 'public/doc/personnes_soutenances.csv' ) as $row ) {
       echo preg_replace ( "/,/", " ", $row );
       echo '<br />';
     }
     
     
  ?>
</fieldset>

<?php
  
  echo '<div id="breadcrumb">';
  echo '<a href="index.php">Accueil</a>';
  
  const SEPARATOR = ' :: ';
  
  if ( isset ( $_GET['tp'] ) ) {
    $url = 'index.php?tp=' . $_GET['tp'];
    $name = 'TP' . $_GET['tp'];
    echo SEPARATOR . '<a href="' . $url . '">' . $name . '</a>';
  }
  
  if ( isset ( $_GET['ex'] ) ) {
    $url = 'index.php?tp=' . $_GET['tp'] . '&ex=' . $_GET['tp'];
    $name = 'Ex' . $_GET['ex'];
    
    echo SEPARATOR . '<a href="' . $url . '">' . $name . '</a>';
  }
  
  if ( isset ( $_GET['projet'] ) ) {
    $url = 'index.php?projet=true';
    $name = 'Projet';
    
    echo SEPARATOR . '<a href="' . $url . '">' . $name . '</a>';
  }
  
  echo '</div>';
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

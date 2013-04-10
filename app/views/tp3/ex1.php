<?php

  const NOM = 'Renoult';
  const PRENOM = 'Simon';
  const AGE = 22;

  echo 'Bonjour à tous !';
  
  echo '
    <ul>
      <li>' . NOM . '</li>
      <li>' . PRENOM . '</li>
      <li>' . AGE . '</li>
    </ul>
  ';
    
  echo '<p>URL d\'accès : ' . $_SERVER['REQUEST_URI'] . '<br />';
  echo 'Il n\'y a pas d\'instructions PHP visibles sur le client.
    Celles-ci sont stockées et interprétées sur le serveur.</p>';
?>

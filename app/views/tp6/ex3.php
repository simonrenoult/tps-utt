<?php

  setcookie ( 'utt', 'troyes' );
  setcookie ( 'utseus', 'shanghai' );

?>

<p>Définition des cookies...</p>
<form method="GET" action="index.php?tp=6&ex=1" >
  
  <input type="hidden" name="tp" value="6" />
  <input type="hidden" name="ex" value="1" />
  
  <input type="submit" value="Voir cookies" />
</form>

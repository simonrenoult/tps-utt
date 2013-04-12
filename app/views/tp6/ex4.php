<form method="POST" action="index.php?tp=6&ex=4">
  
  <fieldset>
    <legend>Informations personelles</legend>
    
    <input type="hidden" name="tp" value="6" />
    <input type="hidden" name="ex" value="4" />
    
    <input name="nom" type="text" placeholder="Nom"/><br />
    <input name="prenom" type="text" placeholder="Prénom"/><br />    
    Sexe 
    <input type="radio" name="sexe" value="m" id="m"/><label for="m"> Homme</label>
    <input type="radio" name="sexe" value="f" id="f"/><label for="f"> Femme</label><br />
  </fieldset>
  <fieldset>
    <legend>Informations téléphoniques</legend>
    FAI
    <input type="checkbox" name="fai[]" value="sfr" id="sfr"/><label for="sfr"> SFR</label>
    <input type="checkbox" name="fai[]" value="orange" id="orange"/><label for="orange"> Orange</label>
    <input type="checkbox" name="fai[]" value="bouygues" id="bouygues"/><label for="bouygues"> Bouygues</label>
    <input type="checkbox" name="fai[]" value="free" id="free"/><label for="free"> Free</label>
    <input type="checkbox" name="fai[]" value="virgin" id="virgin"/><label for="virgin"> Virgin</label>
    <input type="checkbox" name="fai[]" value="autre" id="autre"/><label for="autre"> Autre</label><br />
    Forfait
    <input type="checkbox" name="forfait[]" value="10" id="10"/><label for="10"> 10€</label>
    <input type="checkbox" name="forfait[]" value="20" id="20"/><label for="20"> 20€</label>
    <input type="checkbox" name="forfait[]" value="30" id="30"/><label for="30"> 30€</label>
    <input type="checkbox" name="forfait[]" value="40" id="40"/><label for="40"> 40€</label><br />
  </fieldset>
  <input type="submit" value="Valider" />
  <input type="reset" value="Reset" />
</form>

<?php
  if ( isset ( $_POST ) && ! empty ( $_POST ) ) {
    foreach ( $_POST as $key => $val ) {
      setcookie( $key, is_array ( $val ) ? serialize( $val ) : $val );
    }
    echo '
    <p>Définition des cookies...</p>
    <form method="GET" action="index.php?tp=6&ex=1" >

      <input type="hidden" name="tp" value="6" />
      <input type="hidden" name="ex" value="1" />

      <input type="submit" value="Voir cookies" />
    </form>  
    ';
  }
?>
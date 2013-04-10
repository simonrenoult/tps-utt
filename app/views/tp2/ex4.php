<form method="GET" >
  
  <fieldset>
    <legend>Contact</legend>
    <input name="nom" id="nom" type="text" placeholder="Nom"/><br />
    <input name="prenom" id="prenom" type="text" placeholder="Prénom"/><br />    
    Sexe 
    <input type="radio" name="sexe" value="m" id="m"/><label for="m"> Homme</label>
    <input type="radio" name="sexe" value="f" id="f"/><label for="f"> Femme</label><br />
    Téléphone
    <input type="checkbox" name="tel" value="sfr" id="sfr"/><label for="sfr"> SFR</label>
    <input type="checkbox" name="tel" value="orange" id="orange"/><label for="orange"> Orange</label>
    <input type="checkbox" name="tel" value="bouygues" id="bouygues"/><label for="bouygues"> Bouygues</label>
    <input type="checkbox" name="tel" value="free" id="free"/><label for="free"> Free</label>
    <input type="checkbox" name="tel" value="virgin" id="virgin"/><label for="virgin"> Virgin</label>
    <input type="checkbox" name="tel" value="autre" id="autre"/><label for="autre"> Autre</label><br />
    Forfait
    <input type="checkbox" name="forfait" value="10" id="10"/><label for="10"> 10€</label>
    <input type="checkbox" name="forfait" value="20" id="20"/><label for="20"> 20€</label>
    <input type="checkbox" name="forfait" value="30" id="30"/><label for="30"> 30€</label>
    <input type="checkbox" name="forfait" value="40" id="40"/><label for="40"> 40€</label><br />
    <input type="submit" value="Submit" />
    <input type="reset" value="Reset" />
    
  </fieldset>
  
  <p>Quels sont les nouveaux éléments de formulaires proposés par HTML5 ?<br/>
  HTML5 propose de nouveaux types pour les input (email, tel, etc., une valeur par défaut pour un champ (placeholder, etc.).
  </p>
  <p>Comment choisir les éléments les plus adaptés pour la saisie des informations ?<br />
  Le choix se fait en fonction de la donnée attendue : email pour une adresse email, tel pour un numéro de téléphone, etc. <br />
  Cela permet notamment aux téléphones mobiles d'afficher le champ de saisie adéquat (un pavé numérique pour un champ "tel" par exemple).
  </p>
  
  <p>
  Comment construire des formulaires dynamiques avec des listes qui peuvent dépendre de l'utilisateur ou d'autres critères ?<br />
  Via des scripts PHP ou Javascripts.
  </p>
  
</form>
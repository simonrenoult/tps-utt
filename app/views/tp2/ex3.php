<form id="tp2ex3" method='GET' >
  <fieldset>
    <legend>Contact</legend>
    <input name="nom" id="nom" type="text" placeholder="Nom" /><br />
    <input name="prenom" id="prenom" type="text" placeholder="Prénom" /><br />
    <input name="email" id="email" type="email"  placeholder="Email"/><br />
    <input name="login" id="login" type="text"  placeholder="Login"/><br />
    <input name="mdp" id="mdp" type="password"  placeholder="Mot de passe"/><br />
    <textarea name="message" id="message"  placeholder="Votre message"></textarea><br />
    <fieldset>
      <legend>Fruits</legend>
      <input type="radio" name="fruit" value="Tomate" id="tomate"/><label for="tomate"> Tomate</label><br />
      <input type="radio" name="fruit" value="Mangue" id="mangue"/><label for="mangue"> Mangue</label><br />
    </fieldset>
    <fieldset>
      <legend>Légumes</legend>
      <input type="radio" name="legume" value="Courgette" id="courgette"/><label for="courgette"> Courgette</label><br />
      <input type="radio" name="legume" value="Carotte" id="carotte"/><label for="carotte"> Carotte</label><br />
    </fieldset>
    <input type="submit" value="Submit" />
    <input type="reset" value="Reset" />
  </fieldset>  
</form>

<p>Que se passe-t-il si un élément du formulaire n'est pas rempli par le visiteur ?<br />
Rien, la valeur du paramètre correspondant dans la requête GET sera vide (nom=).</p>
<p>Que pensez-vous de la méthode get vis-à-vis du champ de saisie du mot de passe ?<br />
Mauvaise, en effet celui-ci apparaît alors en clair dans la requête GET visible dans la barre d'adresse.</p>
<p>Que se passe-t-il si un élément du formulaire ne dispose pas de l'attribut name ?<br />
Il n'est pas passé comme paramètre dans la requête GET.</p>
<p>Etudiez l'URL construit par le formulaire à la suite d'une pression sur le bouton submit.<br />
Quel est le rôle de l'attribut value de la balise utilisée ?<br />
Value permet de récupérer la valeur correspondant au bouton radio.
</p>
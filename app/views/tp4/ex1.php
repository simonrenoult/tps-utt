<form method='GET' action="index.php">
  <fieldset>
    <legend>TP 1</legend>
    
    <input type="hidden" name="tp" value="4" />
    <input type="hidden" name="ex" value="1" />
    
    <input name="nom" type="text" placeholder="Nom" /><br />
    <input name="prenom" type="text" placeholder="Prénom" /><br />
    <input name="email" type="email"  placeholder="Email"/><br />
    <input name="login" type="text"  placeholder="Login"/><br />
    <input name="mdp" type="password"  placeholder="Mot de passe"/><br />
    <input type="submit" value="Submit" />
    <input type="reset" value="Reset" />
  </fieldset>  
</form>

<div>  
  Nom : <?php echo isset ( $_GET['nom'] ) ? $_GET['nom'] : "Inconnu" ?> <br />
  Pr&eacute;nom : <?php isset ( $_GET['prenom'] ) ? $_GET['prenom'] : "Inconnu" ?> <br />
  Email : <?php echo isset ( $_GET['email'] ) ? $_GET['email'] : "Inconnu" ?> <br />
  Login : <?php echo isset ( $_GET['login'] ) ? $_GET['login'] : "Inconnu" ?> <br />
  Mot de passe : <?php isset ( $_GET['mdp'] ) ? $_GET['mdp'] : "Inconnu" ?>
</div>

<div>
  <p>
    Que se passe-t-il si un élément du formulaire n'est pas rempli par le visiteur ? <br />
    Le champ name correspondant sera vide (mais présent) dans l'URL.
  </p>
  <p>
    Que se passe-t-il si un élément du formulaire ne dispose pas de l'attribut name ?<br />
    Cet élément n'apparaît pas dans l'URL (donc dans la variable $_GET).
  </p>
</div>
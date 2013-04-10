<form method="POST" action="index.php?tp=4&ex=2" enctype="multipart/form-data">
  <fieldset>
    <legend>Image upload</legend>
    <input type="text" name="nom" placeholder="Nom" /> <br />
    <input type="text" name="prenom" placeholder="Prénom" /> <br />
    <input type="email" name="email" placeholder="Email" /> <br />
    <input type="file" name="file1" /> <br />
    <input type="file" name="file2" /> <br />
    <input type="file" name="file3" /> <br />
    <input type="submit" value="Envoyer" />
  </fieldset>
</form>

<div>
  <?php
    foreach ( $_FILES as $file ) {
      echo '<p>';
      echo 'Nom : ' . $file['name'] . '<br />';
      echo 'Type : ' . $file['type'] . '<br />';
      echo 'Chemin serveur : ' . $file['tmp_name'] . '<br />';
      echo 'Taille : ' . $file['size'] . '<br />';
      
      if ( $file['error'] > 0 ) {
        echo 'Erreur : ' . $file['error'] ;
      } else {
        move_uploaded_file ( $file['tmp_name'], './public/doc/' . md5 ( $file['tmp_name' ] ) );
      }
      
      echo '</p>';
    }
    
   ?>
</div>
<!DOCTYPE html>
<html>
  <head>
    <title>Simon RENOULT - TPs LO07</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="icon" type="image/png" href="public/img/favicon.png" />
    <link href="public/css/main.css" type="text/css" rel="stylesheet" media="screen" />
    <link href="public/css/base.css"  type="text/css" rel="stylesheet" media="screen" />
    <link href="public/css/modele07.css"  type="text/css" rel="stylesheet" media="screen" />
    <link href="public/css/breadcrumb.css"  type="text/css" rel="stylesheet" media="screen" />
  </head>
  
  <body id="global">
    <header id="entete">
      <h1>
        <img src="public/img/me.png" alt="Cartoon image"/>
        <span><a href="index.php">Simon RENOULT - TPs LO07</a></span>
      </h1>
      <p id="sous-titre">
        &Eacute;tudiant à l'<abbr title="Université de Technolgies de Troyes">U.T.T.</abbr> en Informatique et Système d'Information.
      </p>
    </header>

    <hr style="margin-top: 10px;"/>
    
    <div id="centre">
      <nav id="navigation">
        <ul>
          <li><a href="index.php">Accueil</a></li>
          <li><a href="index.php?tp=1">TP01</a></li>
          <li><a href="index.php?tp=2">TP02</a></li>
          <li><a href="index.php?tp=3">TP03</a></li>
          <li><a href="index.php?tp=4">TP04</a></li>
          <li><a href="index.php?tp=5">TP05</a></li>
          <li><a href="index.php?projet=true">Projet</a></li>
        </ul>
      </nav>

      <div id="contenu">
        <?php
          require_once './app/views/misc/breadcrumb.php'; 
          
          echo '<hr />';
          
          require_once Router :: resolve ( $_GET );
        ?>
      </div>
    </div>
    
    <hr />

    <footer id="pied">
      <span id="copyright">2013 - Design and content by Simon RENOULT.</span>
    </footer>

  </body>
</html>

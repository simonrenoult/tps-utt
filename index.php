<?php
  
  define ( 'CONFIG_FILE_PATH', './app/config/config.ini' );
  require_once ( './app/tools/ConfigFile.php' );
  
  $conf = ConfigFile::read ( );
 
  require_once ( './app/tools/Router.php' );
  require_once ( './app/views/layout.php' );

  ?>
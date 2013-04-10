<?php

/**
 * Description of Router
 *
 * @author g4llic4
 */
class Router {
  
  // ------------ CONSTANTS ------------ //
  
  const ROOT = 'app/views/';
  
  // ------------ ATTRIBUTES ------------ //
    
  // ------------ CONSTRUCTORS ------------ //
  
  // ------------ METHODS ------------ //
  
  public static function resolve ( $url ) {
    $fileName = null;
    if ( isset ( $url ) && ! empty ( $url ) ) {
      if ( isset ( $url['tp'] ) && ! empty ( $url['tp'] ) ) {
        $filePath = self :: ROOT . 'tp' . $url['tp'] . DIRECTORY_SEPARATOR;
        if ( isset ( $url['ex'] ) && ! empty ( $url['ex'] ) ) {
          $fileName = $filePath . 'ex' . $url['ex'];
        } else {
          $fileName = $filePath . 'index';
        }
      } else if ( isset ( $url['projet'] ) && ! empty ( $url['projet'] ) ) {
        $fileName = self :: ROOT . 'misc' . DIRECTORY_SEPARATOR . 'projet';
      }
      
      $fileName .= '.php';
      
      if ( file_exists ( $fileName ) ) {
        return $fileName;
      } else {
        return self :: ROOT . 'misc' . DIRECTORY_SEPARATOR . '404.php';
      }
    } else {
      return self :: ROOT . 'misc' . DIRECTORY_SEPARATOR . 'default.php';
    }
  }
}

?>

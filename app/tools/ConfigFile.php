<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ConfigFileParser
 *
 * @author g4llic4
 */
class ConfigFile {
  
  // ------------ CONSTANTS ------------ //
  
  
  // ------------ METHODS ------------ //
  
  public static function read ( ) {
    return parse_ini_file ( CONFIG_FILE_PATH );
  }
  
}

?>

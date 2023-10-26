<?php 

// Config file
require_once("__config.php");


//Autoloader
function myAutoload($class__name){
  require_once 'lib/'.$class__name. '.php';
}
spl_autoload_register('myAutoload');

?>
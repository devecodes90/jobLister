<?php 
// Session Start
session_start();

// Config file
require_once("__config.php");

//Include helpers
require_once("helpers/system_helper.php");


//Autoloader
function myAutoload($class__name){
  require_once 'lib/'.$class__name. '.php';
}
spl_autoload_register('myAutoload');

?>
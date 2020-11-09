<?php

ob_start();

session_start();

defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR); 

defined("TEMPLATE_FRONT") ? null : define("TEMPLATE_FRONT", __DIR__ . DS . "templates/front"); 

defined("TEMPLATE_BACK") ? null : define("TEMPLATE_BACK", __DIR__ . DS . "templates/back"); 

defined("DB_SERVER") ? null : define("DB_SERVER", "localhost"); 

defined("DB_USER") ? null : define("DB_USER", "root"); 

defined("DB_PASSWORD") ? null : define("DB_PASSWORD", ""); 

defined("DB_DATABASE") ? null : define("DB_DATABASE", ""); 


 $connection = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE);
 require_once("functions.php");

?>
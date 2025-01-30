<?php

$path = $_SERVER['REQUEST_SCHEME'] . "://".$_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF'];
$path = str_replace("index.php","",$path);

define('PATH',$path);



use \core\App;

session_start();


require "../app/init.php";

define('ROOTPATH',__DIR__.DIRECTORY_SEPARATOR);



$app = new App();

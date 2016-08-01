<?php
$uri = $_SERVER['REQUEST_URI'];
$arrUri = explode("/", $uri); 
unset($arrUri[0]);
$path = implode("/", $arrUri);
$path = preg_replace('/\/$/', "", $path);
include_once("./app/head.php");
include_once("./app/nav.php");
include_once("./app/$path.php");
include_once("./app/bottom.php");

?>

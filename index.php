<?php 
include_once('_config.php');
MyAutoload::start();

$request = $_GET['r'];

$routeur = new Routeur($request);
$routeur->renderController();



?>
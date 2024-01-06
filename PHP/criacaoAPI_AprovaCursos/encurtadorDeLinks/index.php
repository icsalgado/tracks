<?php


include_once('class/Redirecionar.php');

$url = explode('/',$_SERVER['REQUEST_URI']);
$id = $url[$GLOBALS['contaBarra']];


$redirecionar = new Redirecionar();

$link = $redirecionar->retornaMaior($id);

header('location: '.$link);

?>
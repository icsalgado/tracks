<?php
function __autoload($class)
{
	//die("$class");
	include_once("class/$class.class.php");
}


$html = new Html;
$my = new Mysql;
$ms = new Mssql;
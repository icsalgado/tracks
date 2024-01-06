<?php
/*
include_once("class/Html.class.php");
include_once("class/Mysql.class.php");
include_once("class/Mssql.class.php");
*/
function __autoload($class)
{
	include("class/$class.class.php");
}
$html = new Html;
$my = new Mysql;
$ms = new Mssql;
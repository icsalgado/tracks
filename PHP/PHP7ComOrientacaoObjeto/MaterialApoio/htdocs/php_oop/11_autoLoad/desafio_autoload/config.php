<?php 
function myAutoloader($class)
{
		$class = str_replace("\\", "/", $class);
		$class = $class.'.class.php';
		if(file_exists("$class")){
			include_once("$class");
			return true;
		}
}
spl_autoload_register('myAutoloader');
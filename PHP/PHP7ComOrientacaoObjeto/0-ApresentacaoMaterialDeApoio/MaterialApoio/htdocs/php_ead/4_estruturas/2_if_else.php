<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$nota = 6;
if($nota >= 7){
	echo "Aprovado<br>";
}else{
	echo "Reprovado<br>";	
}
echo "<hr>";
if($nota >= 7):
	echo "Aprovado<br>";
else:
	echo "Reprovado<br>";	
endif;

echo "<hr>";
if($nota >= 7)	echo "Aprovado<br>";
else echo "Reprovado<br>";	


?>
</body>
</html>
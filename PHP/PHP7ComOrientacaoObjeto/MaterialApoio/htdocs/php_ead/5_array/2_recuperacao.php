<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$carros=['Jimmy','Renegade','CRV','Toro','Duster'];

echo sizeof($carros);//5
echo count($carros);

echo "<hr>";
for($i = 0 ; $i < sizeof($carros) ; $i++){
	echo "\$carros[$i] = $carros[$i]<br>";
}
echo "<hr>";
$carros2=[	'Suzuki'=>'Jimmy',
			'Jeep'=>'Renegade',
			'Honda'=>'CRV',
			'Fiat'=>'Toro',
			'Renault'=>'Duster',
		];

foreach($carros2 as $indice => $conteudo){
	echo "$indice - $conteudo <br>";
}

echo "<hr>";
foreach($carros2 as $conteudo){
	echo "$conteudo <br>";
}
###########################################
echo "<hr>";
$string=implode(",",$carros2);
echo $string;

echo "<hr>";
list($a,$b,$c,$d,$e)=$carros;
echo $b;


echo "<hr>";
extract($carros2);
echo $Fiat;
?>
</body>
</html>
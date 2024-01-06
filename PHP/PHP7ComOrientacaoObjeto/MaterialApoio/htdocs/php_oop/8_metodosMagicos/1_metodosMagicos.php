<?php
class MinhaData extends DateTime
{
	function __toString()
	{
		return $this->format("d/m/Y");
	}
}

$agora = new MinhaDAta();
//echo $agora->format("d/m/Y");

echo $agora;

echo "<pre>";
var_dump($agora);
echo "<pre>";
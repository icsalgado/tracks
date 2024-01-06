<?php
class Upload
{
	static public function verificaTamanho($arquivo,$tamanho)
	{
			return ($arquivo['size'] <= $tamanho);
	}
	static public function verificaTipo($arquivo,$tipos)
	{
			foreach($tipos as $tipo){
				if($arquivo['type'] == $tipo){
					return true;
				}
			}
			return false;
	}
	static public function subir($arquivo,$tamanho,$tipos)
	{
		//verificar o tamanho
		if(!self::verificaTamanho($arquivo,$tamanho)){
			return "Tamanho Invalido";
		}
		//verificar o tipo
		if(!self::verificaTipo($arquivo,$tipos)){
			return "Tipo Invalido";
		}
		//subir
		move_uploaded_file($arquivo['tmp_name'], "imagens/$arquivo[name]");
		return "ok";
	}
}
<?php 
include_once 'config.php';

use \classes\Usuario as U;
use \classes\util\Usuario as U2;
use \classes\util\Tempo;
use \classes\util\Conexao;

$user = new U;
$conn = new Conexao;
$agora = new Tempo;
$user2 = new U2;
?>
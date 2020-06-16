<?php
sleep(2);
session_start();
include_once "../funcoes/banco_bd/banco_bd.php";
require '../funcoes/altera_user.php';
$acao = filter_input(INPUT_POST, 'acao', FILTER_SANITIZE_STRING);

switch ($acao){
	case 'altera':
		$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
		if(altera($nome, $id)){
			//Criar sessão
			//$_SESSION['email'] = $email;
			//$_SESSION['usuarios'] = pegaLogin($email);
		}

	break;
	
	default:
		 echo 'erro';
		break;
}

?>
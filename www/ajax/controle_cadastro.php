<?php
sleep(2);
session_start();
include_once "../funcoes/banco_bd/banco_bd.php";
require '../funcoes/cadastro.php';
$acao = filter_input(INPUT_POST, 'acao', FILTER_SANITIZE_STRING);

switch ($acao){
	case 'email':
		$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
		$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
		$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
		$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
		if(cadastro($nome, $email, $cidade, $senha)){
			//Criar sessão
			$_SESSION['email'] = $email;
			//$_SESSION['usuarios'] = pegaLogin($email);
		}else{
			$dados = pegaCadastro($email);
			if ($dados){
				//mensagem de erro
				echo 'emailexiste';
			}else if(strlen($senha)<8){
					//senha muito pequena erro
					echo 'pequena';
				}
		}
	break;
	
	default:
		 echo 'erro';
		break;
}

?>
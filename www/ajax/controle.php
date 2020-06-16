<?php
sleep(2);
session_start();
include_once "../funcoes/banco_bd/banco_bd.php";
require '../funcoes/login.php';
$acao = filter_input(INPUT_POST, 'acao', FILTER_SANITIZE_STRING);

switch ($acao){
	case 'email':
		$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
		$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
		if(login($email, $senha)){
			//Criar sessão
			$_SESSION['usuarios'] = pegaLogin($email);
			$_SESSION['nome'] = $_SESSION['usuarios']['nome'];
			$_SESSION['email'] = $_SESSION['usuarios']['email'];
			$_SESSION['cidade'] = $_SESSION['usuarios']['cidade'];
			$_SESSION['id'] = $_SESSION['usuarios']['id_usuarios'];
			$_SESSION['cod_rep'] = $_SESSION['usuarios']['cod_republica'];
			$_SESSION['foto'] = $_SESSION['usuarios']['fotos'];
			$_SESSION['logado'] = "ok";
		}else{
			$dados = pegaLogin($email);
			if (!$dados){
				echo 'noemail';
			}elseif($dados['senha'] != $senha){
				echo 'nosenha';			
			}
			
		}
		
		

		break;
	
	default:
		 echo 'erro';
		break;
}

?>
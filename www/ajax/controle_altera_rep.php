<?php
sleep(2);
session_start();
include_once "../funcoes/banco_bd/banco_bd.php";
require '../funcoes/altera_rep.php';
$acao = filter_input(INPUT_POST, 'acao', FILTER_SANITIZE_STRING);

switch ($acao){
	case 'altera':
		$nomerep = filter_input(INPUT_POST, 'nomerep', FILTER_SANITIZE_STRING);
		$rua = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_STRING);
		$bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
		$numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_STRING);
		$celular = filter_input(INPUT_POST, 'celular', FILTER_SANITIZE_STRING);
		$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
		$faculdade = filter_input(INPUT_POST, 'faculdade', FILTER_SANITIZE_STRING);
		$genero = filter_input(INPUT_POST, 'genero', FILTER_SANITIZE_STRING);
		$preferencia = filter_input(INPUT_POST, 'preferencia', FILTER_SANITIZE_STRING);
		$vagas = filter_input(INPUT_POST, 'vagas', FILTER_SANITIZE_STRING);
		if(alterarep($nomerep, $rua, $bairro, $numero, $celular, $cidade, $faculdade, $genero, $preferencia, $vagas, $cod_republica)){
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
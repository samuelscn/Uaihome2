<?php
sleep(2);
session_start();
include_once "../funcoes/banco_bd/banco_bd.php";
require '../funcoes/cadastro_republica.php';
$acao = filter_input(INPUT_POST, 'acao', FILTER_SANITIZE_STRING);

switch ($acao){
	case 'email':
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
		if(cadastrorep($nomerep, $rua, $bairro, $numero, $celular, $cidade, $faculdade, $genero, $preferencia, $vagas, $fotos_rep, $id_republica)){
			//Criar sessão
			$_SESSION['nomerep'] = $nomerep;
			$_SESSION['bairro'] = $bairro;
			$_SESSION['rua'] = $rua;
			$_SESSION['numero'] = $numero;
			$_SESSION['celular'] = $celular;
			$_SESSION['cidade'] = $cidade;
			$_SESSION['faculdade'] = $faculdade;
			$_SESSION['genero'] = $genero;
			$_SESSION['preferencia'] = $preferencia;
			$_SESSION['vagas'] = $vagas;
			$_SESSION['fotos_rep'] = $fotos_rep;
			//$_SESSION['usuarios'] = pegaLogin($email);
		}
	break;
	
	default:
		 echo 'erro';
		break;
}

?>
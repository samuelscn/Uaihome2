<?php
sleep(4);
session_start();
include_once "../funcoes/banco_bd/banco_bd.php";
require '../funcoes/procurar_republica.php';
$acao = filter_input(INPUT_POST, 'acao', FILTER_SANITIZE_STRING);

switch ($acao){
	case 'procurar':
		$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
		$faculdade = filter_input(INPUT_POST, 'faculdade', FILTER_SANITIZE_STRING);
		$genero = filter_input(INPUT_POST, 'genero', FILTER_SANITIZE_STRING);
		$preferencia = filter_input(INPUT_POST, 'preferencia', FILTER_SANITIZE_STRING);
		$vagas = filter_input(INPUT_POST, 'vagas', FILTER_SANITIZE_STRING);
		if(procurar($cidade, $faculdade, $genero, $preferencia, $vagas)){
			//Criar sessão
			$_SESSION['filtro_city'] = $cidade;
			$_SESSION['filtro_facul'] = $faculdade;
			$_SESSION['filtro_gender'] = $genero;
			$_SESSION['filtro_preferencia'] = $preferencia;
			$_SESSION['filtro_vagas'] = $vagas;
			//$_SESSION['usuarios'] = pegaLogin($email);
		}else{
			echo "naoencontrado";
		}
	break;
	
	default:
		 echo 'erro';
		break;
}

?>
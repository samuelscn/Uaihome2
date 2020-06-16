<?php


//Função de Login
function alterarep($nomerep, $rua, $bairro, $numero, $celular, $cidade, $faculdade, $genero, $preferencia, $vagas, $cod_republica){
	session_start();
	require 'banco_bd/banco_bd.php';

	try{
		$nomerep = $_POST['nomerep'];
		$bairro = $_POST['bairro'];
		$rua = $_POST['rua'];
		$numero = $_POST['numero'];
		$celular = $_POST['celular'];
		$cidade = $_POST['cidade'];
		$faculdade = $_POST['faculdade'];
		$genero = $_POST['genero'];
		$preferencia = $_POST['preferencia'];
		$vagas = $_POST['vagas'];
		$cod_republica = $_SESSION['cod_rep'];
		$alterar = "UPDATE republicas SET nomerep = '$nomerep', bairro = '$bairro', numero = '$numero', celular = '$celular', cidade = '$cidade', faculdade = '$faculdade', genero = '$genero', preferencia = '$preferencia', vagas = '$vagas' WHERE id_republica = '$cod_republica'";
		mysqli_query($conexao, $alterar);
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
		return TRUE;

	}catch(PDOException $e){
		echo $e->getMessage();
	}

}

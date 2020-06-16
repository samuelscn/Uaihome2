<?php



//Função de Login
function cadastrorep($nomerep, $rua, $bairro, $numero, $celular, $cidade, $faculdade, $genero, $preferencia, $vagas, $fotos_rep, $id_republica){
	require 'banco_bd/banco_bd.php';

	try{
		$id_republica = $_POST['id_rep'];
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
		$fotos_rep = "casa.jpg";
		$cadastrar = "INSERT INTO republicas(nomerep, bairro, rua, numero, celular, cidade, faculdade, genero, preferencia, vagas, fotos_rep) values('$nomerep', '$bairro', '$rua', '$numero', '$celular', '$cidade', '$faculdade', '$genero', '$preferencia', '$vagas', '$fotos_rep')";
		$salvar = mysqli_query($conexao, $cadastrar);
			if($salvar){
				return TRUE;
			}
	}catch(PDOException $e){
		echo $e->getMessage();
	}

}





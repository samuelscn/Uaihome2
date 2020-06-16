<?php



//Função de Login
function procurar($cidade, $faculdade, $genero, $preferencia, $vagas){
	require 'banco_bd/banco_bd.php';

	try{
		$cidade = $_POST['cidade'];
		$faculdade = $_POST['faculdade'];
		$genero = $_POST['genero'];
		$preferencia = $_POST['preferencia'];
		$vagas = $_POST['vagas'];
		$procurar = mysqli_query($conexao, "SELECT * FROM republicas WHERE cidade = '$cidade' AND faculdade = '$faculdade' AND preferencia = '$preferencia' AND vagas = '$vagas'");
		$buscar = mysqli_fetch_array($procurar);
				if($buscar){
					return TRUE;
				}else{
					return FALSE;
				}
	}catch(PDOException $e){
		echo $e->getMessage();
	}

}


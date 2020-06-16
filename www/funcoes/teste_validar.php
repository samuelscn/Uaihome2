<?php



//Função de Login
function testeValidar($cod_rep, $id){
	//session_start();
	require 'banco_bd/banco_bd.php';

	try{
		$cod_rep = $_SESSION['cod_rep'];
		$id = $_SESSION['id'];
		$sql = mysqli_query($conexao, "SELECT * FROM usuarios WHERE id_usuarios = '$id' AND cod_republica = '$cod_rep'");
		$buscar = mysqli_fetch_array($sql);
				if($buscar){
					return TRUE;
				}else{
					return FALSE;
				}
	}catch(PDOException $e){
		echo $e->getMessage();
	}

}



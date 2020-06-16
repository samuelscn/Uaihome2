<?php



//Função de Login
function login($email, $senha){
	require 'banco_bd/banco_bd.php';

	try{
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		$logar = mysqli_query($conexao, "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'");
		$buscar = mysqli_fetch_array($logar);
				if($buscar){
					return TRUE;
				}else{
					return FALSE;
				}
	}catch(PDOException $e){
		echo $e->getMessage();
	}

}

//Pega Login
function pegaLogin($email){

	require 'banco_bd/banco_bd.php';

	try{
		$email = $_POST['email'];
		$bylogar = mysqli_query($conexao, "SELECT * FROM usuarios WHERE email = '$email'");
		$bybuscar = mysqli_fetch_array($bylogar);
				if($bybuscar){
					return $bybuscar;
				}else{
					return FALSE;
				}
	}catch(PDOException $e){
		echo $e->getMessage();
	}

}


<?php



//Função de Login
function cadastro($nome, $email, $cidade, $senha){
	require 'banco_bd/banco_bd.php';

	try{
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$cidade = $_POST['cidade'];
		$senha = $_POST['senha'];
		$data = mysqli_query($conexao, "SELECT * FROM usuarios WHERE email = '$email'");
		$procurar = mysqli_num_rows($data);
			if($procurar > 0){
				return FALSE;
			}else if(strlen($senha)<8){
				return FALSE;
			}else{
				$guardar = "INSERT INTO usuarios(nome, email, cidade, senha) values('$nome', '$email', '$cidade', '$senha')";
				$inserir = mysqli_query($conexao, $guardar);
				return TRUE;
			}
	}catch(PDOException $e){
		echo $e->getMessage();
	}

}

function pegaCadastro($email){
	require 'banco_bd/banco_bd.php';

	try{
		$email = $_POST['email'];
		$byguardar = mysqli_query($conexao, "SELECT * FROM usuarios WHERE email = '$email'");
		$byinserir = mysqli_fetch_array($byguardar);
				if($byinserir){
					return $byinserir;
				}else{
					return FALSE;
				}
	}catch(PDOException $e){
		echo $e->getMessage();
	}

}




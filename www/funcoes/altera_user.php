<?php


//Função de Login
function altera($nome, $id){
	session_start();
	require 'banco_bd/banco_bd.php';

	try{
		$nome = $_POST['nome'];
		$id = $_SESSION['id'];
		$alterar = "UPDATE usuarios SET nome = '$nome' WHERE id_usuarios = '$id'";
		mysqli_query($conexao, $alterar);
		$_SESSION['nome'] = $nome;
		return TRUE;

	}catch(PDOException $e){
		echo $e->getMessage();
	}

}



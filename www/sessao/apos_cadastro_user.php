<?php

//Iniciando sessão
session_start();

//Conectar ao BD
require "../funcoes/banco_bd/banco_bd.php";

//Armazenando em uma Sessão o id do usuario após o Cadastro
$email = $_SESSION['email'];
$sql = mysqli_query($conexao, "SELECT * FROM usuarios WHERE email = '$email'");
$buscar = mysqli_fetch_array($sql);
				if($buscar){
					$_SESSION['nome'] = $buscar['nome'];
					$_SESSION['cidade'] = $buscar['cidade'];
					$_SESSION['id'] = $buscar['id_usuarios'];
					$_SESSION['cod_rep'] = $buscar['cod_republica'];
					$_SESSION['foto'] = $buscar['fotos'];
					$_SESSION['logado'] = "ok";
					header("Location: ../menu.php");
				}



?>
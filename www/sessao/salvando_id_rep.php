<?php

session_start();
//Iniciando a Sessão
require '../funcoes/banco_bd/banco_bd.php';


//Armazenando em uma Sessão o id da Republica
$nomerep = $_SESSION['nomerep']; 
$sql = mysqli_query($conexao, "SELECT * FROM republicas WHERE nomerep = '$nomerep'");
$buscar = mysqli_fetch_array($sql);
				if($buscar){
					$_SESSION['id_rep'] = $buscar['id_republica'];
					header("Location: update_dados.php");
					//$_SESSION['idr'] = $buscar['id_republica'];
					//header("Location: update_dados.php");
				}




?>
<?php


session_start();

//Conectar ao BD
require "../funcoes/banco_bd/banco_bd.php";

//Dando update no id republica da tabela usuarios
$codrepublica = $_SESSION['id_rep'];
$id = $_SESSION['id'];
$modificar = "UPDATE usuarios SET cod_republica = '$codrepublica' WHERE id_usuarios = '$id'";
mysqli_query($conexao, $modificar);
$_SESSION['cod_rep'] = $codrepublica;
header("Location: ../menu.php");


?>
<?php

session_start();
include_once "../funcoes/banco_bd/banco_bd.php";
require '../funcoes/teste_validar.php';

$cod_rep = $_SESSION['cod_rep'];
$id = $_SESSION['id'];

if(testeValidar($cod_rep, $id)){
	//encaminhar
	echo 'possui';
}else{
	echo 'naopossui';
}



?>
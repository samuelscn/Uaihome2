<?php

session_start();
include_once "../funcoes/banco_bd/banco_bd.php";
require '../funcoes/validar_rep.php';

$cod_rep = $_SESSION['cod_rep'];
$id = $_SESSION['id'];

if(validarRep($cod_rep, $id)){
	//encaminhar
	echo 'possui';
}else{
	echo 'naopossui';
}



?>
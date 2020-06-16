<?php 

session_start();

require '../funcoes/banco_bd/banco_bd.php';

$nomecity = $_POST['cidade'];
$sql = mysqli_query($conexao, "SELECT * FROM cidades WHERE nome_city = '$nomecity'");
$slc = mysqli_fetch_array($sql);
	if($slc){
		$_SESSION['guardar_city'] = $slc['id_city'];
		print_r($_SESSION['guardar_city']);
	}



?>
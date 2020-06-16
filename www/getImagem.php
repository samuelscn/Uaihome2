<?php
	require "funcoes/banco_bd/banco_bd.php";

	$PicNum = $_GET["PicNum"];

	$result=mysqli_query($conexao, "SELECT * FROM pessoas WHERE id_pessoa=$PicNum"); 
	$row=mysqli_fetch_object($result); 
	Header( "Content-type: image/gif");
	echo $row->img_pessoa; 
?>
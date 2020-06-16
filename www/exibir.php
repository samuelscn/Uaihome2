<?php

require "funcoes/banco_bd/banco_bd.php";

$result=mysqli_query($conexao, "SELECT * FROM pessoas"); 

while($row=mysqli_fetch_object($result)) { 
	echo "<img src='getImagem.php?PicNum=$row->id_pessoa' \">"; 
} 

$PicNum = $_GET["PicNum"];

	$result=mysqli_query($conexao, "SELECT * FROM pessoas WHERE id_pessoa=$PicNum"); 
	$row=mysqli_fetch_object($result); 
	Header( "Content-type: image/gif");
	echo $row->img_pessoa; 
?>
<?php 

//Conexao com o Banco de Dados
$conexao = new mysqli("localhost", "root", "", "cadastro");

//Erro ao conectar
if( $conexao->connect_errno == true){
	
	echo "Erro ao conectar!";

}

?>
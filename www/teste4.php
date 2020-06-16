<?php

//Conectando Banco de Dados
include_once "funcoes/banco_bd/banco_bd.php";
		
		//if($_POST != NULL){
			//echo "me salva";
		//}
?>


<!DOCTYPE html>
<html>
<head>
	<title>teste usando o alert</title>
	<script src="sweetalert.min.js"></script>
	<link rel="stylesheet" type="text/css" href="sweetalert.css">
	<style>
		#backpag{
			width: 100%;
			height: 100%;
			background-color: #fff;
		}
		#box-login{
			margin-top: 150px;
			background-color: #0695ED;
			box-shadow: 2px 2px 2px 2px gray;
			border-radius: 5px;
			width: 480px;
			border-bottom: 1px solid #FFF;
			border-top: 1px solid #FFF;
			border-left: 1px solid #FFF;
			border-right: 1px solid #FFF;
			font-family: "sdsans-fillone";
		}
		#email{
			border-radius: 5px;
			outline: none;
			padding: 5px;
		}
		#senha{
			border-radius: 5px;
			outline: none;
			padding: 5px;
		}
		#botao{
			border-radius:5px;
			background-color: #FEBD00;
			color: #fff;
			margin-top: 10px;
			padding: 5px;
			margin-left: 5px;
			margin-bottom: 10px;
			font-size: 15px;
			box-shadow: 2px 2px 0px gray;
			border: none;
			font-family: "sdsans-fillone";
		}
		#dlgbox{
			display: none;
			margin-top: 100px;
			margin-left: 10px;
			border-radius: 10px;
			background-color: #0695ED;
			width: 90%;
			position: fixed;
			box-shadow: 2px 2px 2px 2px gray;
			color: black;
			z-index: 9999;
		}
		#dlg-body{
			color: #fff;
			text-align: center;
			margin-top:15px;
			font-family: "sdsans-fillone";
		}
		#dlg-botao{
			text-align: center;
			padding: 10px;
		}
		#dlg-botao button{
			border-radius: 5px;
			color: #fff;
			background-color: #FEBD00;
			box-shadow: 2px 2px 0px gray;
			border:0px;
			padding: 5px;
			width: 80px;
			font-family: "sdsans-fillone";
			outline: none;
		}
		@font-face{
				font-family: "sdsans-fillone";
				src: url("sunshine/sdsans-fillone.otf") format("truetype")
			}
	</style>
	<script>
		function dlgok(){
			var dlg = document.getElementById("dlgbox");
			dlg.style.display = "none";
			location.href = "teste5.php";
		}

		function mostrarcaixa(){
			var dlg = document.getElementById("dlgbox");
			dlg.style.display = "block";
		}
	</script>
</head>
<body>
		<div id="dlgbox">
			<div id="dlg-body">Login efetuado com sucesso!</div>
			<div id="dlg-botao">
				<button onClick="dlgok()">Ok</button>
			</div>
		</div>
		<div id="backpag">
			<center><div id="box-login">	
				<div><h1>Login Teste</h1></div>
				<form method="post" name="form_teste">
					<div id="email">
						<input type="email" name="email" id="email" required placeholder="email">
					</div>
					<div id="senha">
						<input type="password" name="senha" id="senha" required placeholder="senha">
					</div>
					<button type="submit" id="botao">Enviar</button> 
				</form>
			</div></center>
		</div>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="custom.js"></script>
</body>
</html>
<?php

//Impedir mensagens de alerta
error_reporting(1);

//iniciar sessao
session_start();

if($_SESSION['logado'] != "ok"){
	echo $_SESSION['logado'];
	header("Location: teste.php");
}

//Conectar ao BD
$conexao = new mysqli("localhost", "root", "", "cadastro");

?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>U.A.I home</title>
		<meta name="description" content="Aplicativo para otimizar na procura de Republicas">
		<meta name="keywords" content="Aplicativo, Republica">
		<meta name="robots" content="index, follow">
		<meta name="author" content="Samuel Silva">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
		<link rel="icon" href="img/icon-170x200.png">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<style>
			#perfil{
				width: 120px;
				margin-top: -20px;
				margin-left: 0px;
				background-color: #FFF;
				border-bottom: 1px solid #FFF;
				border-top: 1px solid #FFF;
				border-right: 1px solid #FFF;
				border-left: 1px solid #FFF;
				outline: none;
			}
			#perfil01{
				width: 120px;
				margin-top: -20px;
				margin-left: 0px;
				background-color: #FFF;
				border-bottom: 1px solid #FFF;
				border-top: 1px solid #FFF;
				border-right: 1px solid #FFF;
				border-left: 1px solid #FFF;
				outline: none;
			}
			#perfil02{
				width: 120px;
				margin-top: 0px;
				margin-left: 0px;
				background-color: #FFF;
				border-bottom: 1px solid #FFF;
				border-top: 1px solid #FFF;
				border-right: 1px solid #FFF;
				border-left: 1px solid #FFF;
				outline: none;
			}
			#perfil03{
				width: 120px;
				margin-top: 0px;
				margin-left: 0px;
				background-color: #FFF;
				border-bottom: 1px solid #FFF;
				border-top: 1px solid #FFF;
				border-right: 1px solid #FFF;
				border-left: 1px solid #FFF;
				outline: none;
			}
			#perfil04{
				float: left;
				margin-top: 20px;
				margin-left: 60px;
				background-color: #FAFAFA;
				border-bottom: 1px solid #FAFAFA;
				border-top: 1px solid #FAFAFA;
				border-right: 1px solid #FAFAFA;
				border-left: 1px solid #FAFAFA;
				outline: none;
			}
			#perfil05{
				margin-top: 20px;
				margin-left: 20px;
				background-color: #FAFAFA;
				border-bottom: 1px solid #FAFAFA;
				border-top: 1px solid #FAFAFA;
				border-right: 1px solid #FAFAFA;
				border-left: 1px solid #FAFAFA;
				outline: none;
			}
			#perfil06{
				float: right;
				margin-top: 20px;
				margin-left: 0px;
				margin-right: 60px;
				background-color: #FAFAFA;
				border-bottom: 1px solid #FAFAFA;
				border-top: 1px solid #FAFAFA;
				border-right: 1px solid #FAFAFA;
				border-left: 1px solid #FAFAFA;
				outline: none;
			}
			#cabecalho{
				color: #A0A0A0;
				font-family: "sdsans-fillone";
				margin-left: 30px;
				margin-top: 0px;
				font-size:18px;
				height: 50px;
			}
			.tex-1{
				color: #686868;
				font-family: "sdsans-fillone";
				font-size:18px;
				margin-left: 0px;
				margin-top: 0px;
				margin-bottom: -20px;
			}
			.tex-2{
				color: #686868;
				font-family: "sdsans-fillone";
				font-size:18px;
				margin-left: 0px;
				margin-top: 0px;
				margin-bottom: -30px;
			}
			.tex-3{
				color: #686868;
				font-family: "sdsans-fillone";
				font-size:18px;
				margin-left: 8px;
				margin-top: 0px;
				margin-bottom: -20px;
			}
			.tex-4{
				color: #686868;
				font-family: "sdsans-fillone";
				font-size:18px;
				margin-left: 0px;
				margin-top: 0px;
				margin-bottom: -20px;
			}
			@font-face{
				font-family: "sdsans-fillone";
				src: url("sunshine/sdsans-fillone.otf") format("truetype")
			}
			.quadrado01{
				background-color: red;
				margin-top: 10px;
				margin-left: 20px;
				margin-right: 20px;
				border-radius: 10px;
				background-color: #FFF;
			}
			.quadrado00{
				background-color: #FAFAFA;
			}
			.quadrado02{
				background-color: #FAFAFA;
				margin-bottom:0px;
			}
		</style>
	</head>
	<body bgcolor="#FFF">
	<div class="quadrado00">
	<header id="cabecalho">Menu
	</header></div>	
		<div class="quadrado01">
			<center>
				<button id="perfil" onClick=window.location="procurar.html">
					<div class="tex-1">Procurar</div>
					<img src="img/lupa-170x200.png">
				</button>
			</center>
			<center>
				<button id="perfil01" onClick=window.location="cad-republica.html">
					<div class="tex-2">Cadastrar</div>
					<img src="img/casinha-170x200.png">
				</button>
				<button id="perfil02">
					<div class="tex-3">Chat</div>
					<img src="img/balao1.png">
				</button>
			</center>
			<center>
				<button id="perfil03" onClick=window.location="bugs.html">
					<div class="tex-4">Bug</div>
					<img src="img/bug-170x200.png">
				</button>
			</center>
		</div>
		<input type="button" name="sair" value="sair" onClick=window.location="teste2.php">
	<div class="quadrado02">
		<center><button id="perfil04" onClick=window.location="perfil-user.html">
			<i class="fa fa-user fa-3x" style="color: #D82E30;" aria-hidden="true"></i>
		</button>
			<button id="perfil05" onClick=window.location="adm-republica.html">
			<i class="fa fa-home fa-3x" style="color: #0695ED;" aria-hidden="true"></i>
		</button>
		<button id="perfil06">
			<i class="fa fa-user-plus fa-3x" style="color: #EBAA00;" aria-hidden="true"></i>
		</button>
		</center>
	</div>

	</body>
</html>
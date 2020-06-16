<?php

//Conectando Banco de Dados
require "funcoes/banco_bd/banco_bd.php";

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
		<link rel="icon" href="img/icon-170x200.png">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<script src="sweetalert.min.js"></script>
		<link rel="stylesheet" type="text/css" href="sweetalert.css">
		<style>
			#voltarpag{
				float: left;
				margin-right: 10px;
				margin-left: -20px;
				background-color: #0695ED;
				border-bottom: 1px solid #0695ED;
				border-top: 1px solid #0695ED;
				border-right: 1px solid #0695ED;
				border-left: 1px solid #0695ED;
				margin-top: 3px;
				outline: none;
			}
			#cabecalho{
				color: #FFF;
				font-family: "sdsans-fillone";
				margin-left: 30px;
				margin-top: 20px;
				font-size:18px;
			}
			#barrabranca{
				margin-top: 40px;
				width: 90%;
				height: 36px;
				border-radius: 4px;
				background-color: #FFF;
				box-shadow: 2px 3px 0px #A0A0A0;
			}
			#barrabranca01{
				margin-top: 10px;
				width: 90%;
				height: 36px;
				border-radius: 4px;
				background-color: #FFF;
				box-shadow: 2px 3px 0px #A0A0A0;
			}
			.texto{
				width: 95%;
				height: 28px;
				border-radius: 5px;
				background-color: #FFF;
				border-bottom: 1px solid #FFF;
				border-top: 1px solid #FFF;
				border-left: 1px solid #FFF;
				border-right: 1px solid #FFF;
				font-family: bold;
				font-weight: bold;
				font-size: 14px;
				color: #686868;
				outline: none;
			}
			.texto01{
				width: 95%;
				height: 28px;
				border-radius: 5px;
				background-color: #FFF;
				border-bottom: 1px solid #FFF;
				border-top: 1px solid #FFF;
				border-left: 1px solid #FFF;
				border-right: 1px solid #FFF;
				color: #686868;
				font-size: 14px;
				font-family: bold;
				font-weight: bold;
				outline: none;
			}
			.botao{
				width: 65%;
				height: 40px;
				border-radius: 4px;
				background-color: #FEBD00;
				margin-top: 30px;
				color: #FFF;
				box-shadow: 0px 3px 0px #A0A0A0;
				border: none;
				font-family: "sdsans-fillone";
				font-size:18px;
				outline: none;
			}
			.botao01{
				width: 50%;
				height: 20px;
				background-color: #0695ED;
				margin-top: 10px;
				color: #FFF;
				border: none;
				font-family: "sdsans-fillone";
				font-size:15px;
				outline: none;
			}
			.load{
				margin-top: 20px;
			}
			@font-face{
				font-family: "sdsans-fillone";
				src: url("sunshine/sdsans-fillone.otf") format("truetype")
			}

		</style>
		<script>
			function rodarefeito(){
				swal({
				  title: "Esqueci minha senha!",
				  text: "Entre com seu e-mail:",
				  type: "input",
				  showCancelButton: true,
				  closeOnConfirm: false,
				  animation: "slide-from-top",
				  inputPlaceholder: "E-mail"
				},
				function(inputValue){
				  if (inputValue === false) 
				  	return false;
				  
				  if (inputValue === "") {
				    swal.showInputError("Você precisa digitar algo!");
				    return false
				  }
				  
				  swal("Ótimo!", "E-mail enviado: " + inputValue, "success");
				});
			}
		</script>
	</head>
	<body bgcolor="#0695ED" class="body">
	<header id="cabecalho">
		Login
		<button id="voltarpag">
			<i class="fa fa-arrow-left fa-lg" style="color: #FFF;" aria-hidden="true"></i>
		</button>
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script>
			$('#voltarpag').click(function(){
				$.ajax({
					url:"ajax/controle_falso.php"
				}).done(function(msg){
					$('.body').hide('slow');
					setTimeout(function(){
						$(location).attr('href', 'index.html');
					},500)
				});
			});
		</script>
	</header>
	   <form name="form_teste" method="post">
			<center><div id="barrabranca">
				<input type="email" class="texto" name="email" placeholder="Email" required>
			</div></center>
			<center><div id="barrabranca01">
				<input type="password" class="texto01" name="senha" placeholder="Senha" required>
			</div></center>
			<center>
				<button type="submit" class="botao">Entrar</button>
			</center>
		</form>
		<center>
			<button class="botao01" onClick="rodarefeito();">Esqueci a senha</button>
		</center>
		<center><img src="img/loadi.gif" class="load" alt="Carregando" style="display: none"/></center>
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="custom.js"></script>
	</body>
</html>
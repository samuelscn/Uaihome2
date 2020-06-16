<?php


session_start();

//Verificando se está logado
if($_SESSION['logado'] != "ok"){
	echo $_SESSION['logado'];
	header("Location: teste.php");
}

//Conectar ao BD
require "funcoes/banco_bd/banco_bd.php";

//Armazenando dados em variaveis
$nomerep = $_SESSION['nomerep'];
$bairro = $_SESSION['bairro'];
$rua = $_SESSION['rua'];
$numero = $_SESSION['numero'];
$celular = $_SESSION['celular'];
$cidade = $_SESSION['cidade'];
$faculdade = $_SESSION['faculdade'];
$genero = $_SESSION['genero'];
$preferencia = $_SESSION['preferencia'];
$vagas = $_SESSION['vagas'];

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
			#voltarpag{
				float: left;
				margin-right: 10px;
				margin-left: -20px;
				background-color: #78C70A;
				border-bottom: 1px solid #78C70A;
				border-top: 1px solid #78C70A;
				border-right: 1px solid #78C70A;
				border-left: 1px solid #78C70A;
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
			.tex-0{
				margin-left: 30px;
				color: #FFF;
				font-family: "sdsans-fillone";
				font-size: 15px;
			}
			#barrabranca02{
				margin-top: 10px;
				width: 90%;
				height: 36px;
				border-radius: 4px;
				background-color: #FFF;
				box-shadow: 2px 3px 0px #A0A0A0;
				margin-left: 25px;
			}
			.tex-1{
				margin-left: 30px;
				color: #FFF;
				font-family: "sdsans-fillone";
				font-size: 15px;
			}
			#barrabranca03{
				margin-top: 10px;
				width: 90%;
				height: 36px;
				border-radius: 4px;
				background-color: #FFF;
				box-shadow: 2px 3px 0px #A0A0A0;
				margin-left: 25px;
			}
			.tex-2{
				margin-left: 30px;
				color: #FFF;
				font-family: "sdsans-fillone";
				font-size: 15px;
			}
			#barrabranca04{
				margin-top: 10px;
				width: 90%;
				height: 36px;
				border-radius: 4px;
				background-color: #FFF;
				box-shadow: 2px 3px 0px #A0A0A0;
				margin-left: 25px;
			}
			.tex-3{
				margin-left: 30px;
				color: #FFF;
				font-family: "sdsans-fillone";
				font-size: 15px;
				margin-top: 5px;
			}
			#barrabranca05{
				margin-top: 15px;
				width: 90%;
				height: 36px;
				border-radius: 4px;
				background-color: #FFF;
				box-shadow: 2px 3px 0px #A0A0A0;
				margin-left: 25px;
			}
			.tex-4{
				margin-left: 30px;
				color: #FFF;
				font-family: "sdsans-fillone";
				font-size: 15px;
				margin-top: 5px;
			}
			#barrabranca06{
				margin-top: 15px;
				width: 90%;
				height: 36px;
				border-radius: 4px;
				background-color: #FFF;
				box-shadow: 2px 3px 0px #A0A0A0;
				margin-left: 25px;
			}
			.tex-5{
				margin-left: 30px;
				color: #FFF;
				font-family: "sdsans-fillone";
				font-size: 15px;
				margin-top: 10px;
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
				font-family: "sdsans-fillone";
				color: #686868;
				outline: none;
			}
			.texto02{
				width: 95%;
				height: 28px;
				border-radius: 5px;
				background-color: #FFF;
				border-bottom: 1px solid #FFF;
				border-top: 1px solid #FFF;
				border-left: 1px solid #FFF;
				border-right: 1px solid #FFF;
				font-family: "sdsans-fillone";
				color: #686868;
				margin-left: 5px;

			}
			.texto03{
				width: 95%;
				height: 28px;
				border-radius: 5px;
				background-color: #FFF;
				border-bottom: 1px solid #FFF;
				border-top: 1px solid #FFF;
				border-left: 1px solid #FFF;
				border-right: 1px solid #FFF;
				font-family: "sdsans-fillone";
				color: #686868;
				margin-left: 5px;

			}
			.texto04{
				width: 95%;
				height: 28px;
				border-radius: 5px;
				background-color: #FFF;
				border-bottom: 1px solid #FFF;
				border-top: 1px solid #FFF;
				border-left: 1px solid #FFF;
				border-right: 1px solid #FFF;
				font-family: "sdsans-fillone";
				color: #686868;
				margin-left: 5px;

			}
			.texto05{
				width: 95%;
				height: 28px;
				border-radius: 5px;
				background-color: #FFF;
				border-bottom: 1px solid #FFF;
				border-top: 1px solid #FFF;
				border-left: 1px solid #FFF;
				border-right: 1px solid #FFF;
				font-family: "sdsans-fillone";
				color: #686868;
				margin-left: 5px;

			}

			.texto06{
				width: 95%;
				height: 28px;
				border-radius: 5px;
				background-color: #FFF;
				border-bottom: 1px solid #FFF;
				border-top: 1px solid #FFF;
				border-left: 1px solid #FFF;
				border-right: 1px solid #FFF;
				font-family: "sdsans-fillone";
				color: #686868;
				margin-left: 5px;
			}

			.texto07{
				width: 95%;
				height: 28px;
				border-radius: 5px;
				background-color: #FFF;
				border-bottom: 1px solid #FFF;
				border-top: 1px solid #FFF;
				border-left: 1px solid #FFF;
				border-right: 1px solid #FFF;
				font-family: "sdsans-fillone";
				color: #686868;
				margin-left: 5px;
			}

			.texto08{
				width: 95%;
				height: 28px;
				border-radius: 5px;
				background-color: #FFF;
				border-bottom: 1px solid #FFF;
				border-top: 1px solid #FFF;
				border-left: 1px solid #FFF;
				border-right: 1px solid #FFF;
				font-family: "sdsans-fillone";
				color: #686868;
				margin-left: 5px;
			}

			.texto09{
				width: 95%;
				height: 28px;
				border-radius: 5px;
				background-color: #FFF;
				border-bottom: 1px solid #FFF;
				border-top: 1px solid #FFF;
				border-left: 1px solid #FFF;
				border-right: 1px solid #FFF;
				font-family: "sdsans-fillone";
				color: #686868;
				margin-left: 5px;
			}

			.texto10{
				width: 95%;
				height: 28px;
				border-radius: 5px;
				background-color: #FFF;
				border-bottom: 1px solid #FFF;
				border-top: 1px solid #FFF;
				border-left: 1px solid #FFF;
				border-right: 1px solid #FFF;
				font-family: "sdsans-fillone";
				color: #686868;
				margin-left: 5px;
			}

			.texto11{
				width: 95%;
				height: 28px;
				border-radius: 5px;
				background-color: #FFF;
				border-bottom: 1px solid #FFF;
				border-top: 1px solid #FFF;
				border-left: 1px solid #FFF;
				border-right: 1px solid #FFF;
				font-family: "sdsans-fillone";
				color: #686868;
				margin-left: 5px;
			}

			.selectbox01{
				margin-top: 10px;
				width: 90%;
				height: 36px;
				border-radius: 4px;
				background-color: #FFF;
				box-shadow: 2px 3px 0px #A0A0A0;
				font-family: "sdsans-fillone";
				margin-left: 25px;
			}
			.tex-6{
				margin-left: 30px;
				color: #FFF;
				font-family: "sdsans-fillone";
				font-size: 15px;
				margin-top: 10px;
			}
			.selectbox02{
				margin-top: 10px;
				width: 90%;
				height: 36px;
				border-radius: 4px;
				background-color: #FFF;
				box-shadow: 2px 3px 0px #A0A0A0;
				font-family: "sdsans-fillone";
				margin-left: 25px;
			}
			.tex-7{
				margin-left: 30px;
				color: #FFF;
				font-family: "sdsans-fillone";
				font-size: 15px;
				margin-top: 10px;
			}
			.selectbox03{
				margin-top: 10px;
				width: 90%;
				height: 36px;
				border-radius: 4px;
				background-color: #FFF;
				box-shadow: 2px 3px 0px #A0A0A0;
				font-family: "sdsans-fillone";
				margin-left: 25px;
			}
			.tex-8{
				margin-left: 30px;
				color: #FFF;
				font-family: "sdsans-fillone";
				font-size: 15px;
				margin-top: 10px;
			}
			.selectbox04{
				margin-top: 10px;
				width: 90%;
				height: 36px;
				border-radius: 4px;
				background-color: #FFF;
				box-shadow: 2px 3px 0px #A0A0A0;
				font-family: "sdsans-fillone";
				margin-left: 25px;
			}
			.tex-9{
				margin-left: 30px;
				color: #FFF;
				font-family: "sdsans-fillone";
				font-size: 15px;
				margin-top: 10px;
			}
			.selectbox05{
				margin-top: 10px;
				width: 90%;
				height: 36px;
				border-radius: 4px;
				background-color: #FFF;
				box-shadow: 2px 3px 0px #A0A0A0;
				font-family: "sdsans-fillone";
				margin-left: 25px;;
			}
			.quadrado{
				margin-top: 40px;
				background-color: #78C70A;
			}
			@font-face{
				font-family: "sdsans-fillone";
				src: url("sunshine/sdsans-fillone.otf") format("truetype")
			}

		</style>
	</head>
	<body bgcolor="#78C70A" class="body">
	<header id="cabecalho">
		Perfil da República
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
						$(location).attr('href', 'resultado_procura.php');
					},500)
				});
			});
		</script>
	</header>
		<div class="quadrado">
			<div class="tex-0">Nome da República
			</div>
			<div id="barrabranca02">
				<left><div class="texto02" name="nomerep"><?php echo $nomerep; ?></div></left>
			</div>
			<div class="tex-1">Bairro
			</div>
			<div id="barrabranca03">
				<div class="texto03" name="bairro"><?php echo $bairro; ?></div>
			</div>
			<div class="tex-2">Rua
			</div>
			<div id="barrabranca04">
				<div class="texto04" name="rua"><?php echo $rua; ?></div>
			</div>
			<div class="tex-3">Número
			</div>
			<div id="barrabranca05">
				<div class="texto05" name="numero"><?php echo $numero; ?></div>
			</div>
			<div class="tex-4">Celular
			</div>
			<div id="barrabranca06">
				<div class="texto06" name="celular"><?php echo $celular; ?></div>
			</div>
			<div class="tex-5">Cidade
			</div>
			<div class="selectbox01">
				<div class="texto07" name="cidade"><?php echo $cidade; ?></div>
			</div>
			<div class="tex-6">Faculdade
			</div>
			<div class="selectbox02">
				<div class="texto08" name="faculdade"><?php echo $faculdade; ?></div>
			</div>
			<div class="tex-7">Gênero da República
			</div>
			<div class="selectbox03">
				<div class="texto09" name="genero"><?php echo $genero; ?></div>
			</div>
			<div class="tex-8">Preferência
			</div>
			<div class="selectbox04">
				<div class="texto10" name="preferencia"><?php echo $preferencia; ?></div>
			</div>
			<div class="tex-9">Vagas
			</div>
			<div class="selectbox05">
				<div class="texto11" name="vagas"><?php echo $vagas; ?></div>
			</div>
			</div>
	</body>
</html>
<?php

//Iniciando a sessão
session_start();

//Verificando se está logado
if($_SESSION['logado'] != "ok"){
	echo $_SESSION['logado'];
	header("Location: teste.php");
}

//Conectar ao BD
require "funcoes/banco_bd/banco_bd.php";

//clicou em Cadastrar
/*if($_POST != NULL){

	$id_republica = $_POST['id_rep'];
	$nomerep = $_POST['nomerep'];
	$bairro = $_POST['bairro'];
	$rua = $_POST['rua'];
	$numero = $_POST['numero'];
	$celular = $_POST['celular'];
	$cidade = $_POST['cidade'];
	$faculdade = $_POST['faculdade'];
	$genero = $_POST['genero'];
	$preferencia = $_POST['preferencia'];
	$vagas = $_POST['vagas'];

		if(empty($nomerep) || empty($bairro) || empty($rua) || empty($numero) || empty($celular) || empty($cidade) || empty($faculdade) || empty($genero) || empty($preferencia) || empty($vagas)){
			echo "<center>
					<script> alert('Preencha os campos!'); </script>
				</center>";
		}else{
				//Guardando os dados recebidos no BD
				$cadastrar = "INSERT INTO republicas(nomerep, bairro, rua, numero, celular, cidade, faculdade, genero, preferencia, vagas) values('$nomerep', '$bairro', '$rua', '$numero', '$celular', '$cidade', '$faculdade', '$genero', '$preferencia', '$vagas')";
				$salvar = mysqli_query($conexao, $cadastrar);
				//Salvando os dados da republica em Sessões
				$_SESSION['nomerep'] = $nomerep;
				$_SESSION['bairro'] = $bairro;
				$_SESSION['rua'] = $rua;
				$_SESSION['numero'] = $numero;
				$_SESSION['celular'] = $celular;
				$_SESSION['cidade'] = $cidade;
				$_SESSION['faculdade'] = $faculdade;
				$_SESSION['genero'] = $genero;
				$_SESSION['preferencia'] = $preferencia;
				$_SESSION['vagas'] = $vagas;
				$_SESSION['id_rep'] = $id_republica;

				//Exibindo uma mensagem e enviando o usuario para o Menu
				echo "<center>
						<script> 
							alert('Cadastro efetuado com sucesso!');
							location.href = 'teste01.php';
						</script>
					</center>";
			}
				
}*/

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
		<script src="sweetalert.min.js"></script>
		<link rel="stylesheet" type="text/css" href="sweetalert.css">
		<style>
			#voltarpag{
				float: left;
				margin-right: 10px;
				margin-left: -20px;
				background-color: #EBAA00;
				border-bottom: 1px solid #EBAA00;
				border-top: 1px solid #EBAA00;
				border-right: 1px solid #EBAA00;
				border-left: 1px solid #EBAA00;
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
				font-family: bold;
				font-weight: bold;
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
				font-family: bold;
				font-weight: bold;
				color: #686868;
				outline: none;
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
				font-family: bold;
				font-weight: bold;
				color: #686868;
				outline: none;
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
				font-family: bold;
				font-weight: bold;
				color: #686868;
				outline: none;
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
				font-family: bold;
				font-weight: bold;
				color: #686868;
				outline: none;
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
				font-family: bold;
				font-weight: bold;
				color: #686868;
				outline: none;
			}
			.selectbox01{
				margin-top: 10px;
				width: 90%;
				height: 36px;
				border-radius: 4px;
				background-color: #FFF;
				box-shadow: 2px 3px 0px #A0A0A0;
				font-family: "sdsans-fillone";
				outline: none;
				color: #686868;
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
				outline: none;
				color: #686868;
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
				outline: none;
				color: #686868;
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
				outline: none;
				color: #686868;
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
				outline: none;
				color: #686868;
			}
			.botao{
				width: 65%;
				height: 40px;
				border-radius: 4px;
				background-color: #E1EDD2;
				margin-top: 30px;
				margin-bottom: 20px;
				color: #FFF;
				box-shadow: 0px 3px 0px #A0A0A0;
				border: none;
				font-family: "sdsans-fillone";
				font-size:18px;
				outline: none;
				color: #EBAA00;
			}
			.quadrado{
				background-color: red;
				margin-top: 40px;
				background-color: #EBAA00;
			}
			@font-face{
				font-family: "sdsans-fillone";
				src: url("sunshine/sdsans-fillone.otf") format("truetype")
			}
			.load{
				width: 100%;
				height: 100%;
				position: fixed;
				background-color: rgba(0,0,0,0.9);
				top: 0;
				left: 0;
			}
			.btn-menu{
				margin-top: 220px;
			}
		</style>
	</head>
	<body bgcolor="#EBAA00" class="body">
	<header id="cabecalho">
		Cadastro de república
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
						$(location).attr('href', 'menu.php');
					},500)
				});
			});
		</script>
	</header>
		<div class="quadrado">
		<form name="form_rep" method="post">
			<div class="tex-0">Nome da República
			</div>
			<center><div id="barrabranca02">
				<input type="hidden" name="id_rep" required>
				<input type="text" class="texto02" name="nomerep" required>
			</div></center>
			<div class="tex-1">Bairro
			</div>
			<center><div id="barrabranca03">
				<input type="text" class="texto03" name="bairro" required>
			</div></center>
			<div class="tex-2">Rua
			</div>
			<center><div id="barrabranca04">
				<input type="text" class="texto04" name="rua" required>
			</div></center>
			<div class="tex-3">Número
			</div>
			<center><div id="barrabranca05">
				<input type="text" class="texto05" name="numero" required>
			</div></center>
			<div class="tex-4">Celular
			</div>
			<center><div id="barrabranca06">
				<input type="text" class="texto06" name="celular" required>
			</div></center>
			<div class="tex-5">Cidade
			</div>
			<center><select  id="city" class="selectbox01" name="cidade">
					<option></option>
					<?php 
						$busca = "SELECT * FROM cidades";
						$receber = mysqli_query($conexao, $busca);
							while($row = mysqli_fetch_assoc($receber)){ ?>
								<option value="<?php echo $row['nome_city']; ?>"> <?php echo $row['nome_city'] ?> </option> <?php
							}
					?>
			</select></center>
			<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
			<script>
				$('.selectbox01').change(function(){
					var forma = $(this);
					var caixa = $('#selectbox02');
					$.ajax({
						type: 'POST',
						url:"ajax/controle_disable.php",
						data: "acao=cidade&"+forma.serialize(),
					}).done(function(msg){
						$('#refresh').load('refresh_cad_rep.php');
						console.log(msg);
					  });
				});
			</script>
			<div class="tex-6">Faculdade
			</div>
			<center><div id="refresh"><select class="selectbox02" name="faculdade" disabled="disabled">
				<option>Selecione uma cidade...</option>
				<?php 
					$guardar_city = $_SESSION['guardar_city'];
					$busca = "SELECT * FROM faculdades WHERE cod_city = '$guardar_city'";
					$receber = mysqli_query($conexao, $busca);
						while($row = mysqli_fetch_assoc($receber)){ ?>
							<option value="<?php echo $row['nome_facul']; ?>"> <?php echo $row['nome_facul'] ?> </option> <?php
						}
				?>
			</select></div></center>
			<div class="tex-7">Gênero da República
			</div>
			<center><select class="selectbox03" name="genero" required>
				<option></option>
				<option>Masculina</option>
				<option>Feminina</option>
				<option>Mista</option>
			</select></center>
			<div class="tex-8">Preferência
			</div>
			<center><select class="selectbox04" name="preferencia" required>
				<option></option>
				<option>Gamer</option>
				<option>Golo</option>
				<option>Musicista</option>
			</select></center>
			<div class="tex-9">Vagas
			</div>
			<center><select class="selectbox05" name="vagas" required>
				<option>00</option>
				<option>01</option>
				<option>02</option>
				<option>03</option>
				<option>04</option>
				<option>05</option>
			</select></center>
			</div>
			<center>
				<button type="submit" class="botao">Cadastrar</button>
			</center>
		</form>
		<div class="load" style="display: none;"/>
			<center><img src="img/loadiclaro.gif" class="btn-menu" alt="Carregando""/></center>
		</div>
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="customcadrep.js"></script>
	</body>
</html>
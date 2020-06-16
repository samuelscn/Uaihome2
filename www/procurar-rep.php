<?php 


//Iniciando uma sessão
session_start();

//Verificando se está logado
if($_SESSION['logado'] != "ok"){
	echo $_SESSION['logado'];
	header("Location: teste.php");
}

//Conectar ao BD
require "funcoes/banco_bd/banco_bd.php";

//Apos clicar em procurar
/*if ($_POST != NULL) {
	$cidade1 = $_POST['cidade1'];
	$faculdade1 = $_POST['faculdade1'];
	$genero1 = $_POST['genero1'];
	$preferencia1 = $_POST['preferencia1'];
	$vagas1 = $_POST['vagas1'];
	$aux1 = mysqli_query($conexao, "SELECT * FROM faculdades WHERE nome_facul = '$faculdade1'");
	$aux2 = mysqli_fetch_array($aux1);
		if($aux2){
			$cod_city = $aux2['cod_city'];
		}
	$aux3 = mysqli_query($conexao, "SELECT * FROM cidades WHERE nome_city = '$cidade1'");
	$aux4 = mysqli_fetch_array($aux3);
		if($aux4){
			$id_city = $aux4['id_city'];
		}
			if($cod_city != $id_city){
			    echo "<script>
						 alert('Faculdade é inexistente na região escolhida!');
					</script>";
					$faculdade1 = "";
					$cidade1 = "";
					$genero1 = "";
					$preferencia1 = "";
					$vagas1 = "";
			}else{
					$_SESSION['filtro_city'] = $cidade1;
					$_SESSION['filtro_facul'] = $faculdade1;
					$_SESSION['filtro_gender'] = $genero1;
					$_SESSION['filtro_preferencia'] = $preferencia1;
					$_SESSION['filtro_vagas'] = $vagas1;
					header("Location: procurarteste.php");
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
			.tex-5{
				margin-left: 30px;
				color: #FFF;
				font-family: "sdsans-fillone";
				font-size: 15px;
				margin-top: 10px;
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
				background-color: #0695ED;
				margin-top: 30px;
				margin-bottom: 20px;
				color: #FFF;
				box-shadow: 0px 3px 0px #A0A0A0;
				border: none;
				font-family: "sdsans-fillone";
				font-size:18px;
				outline: none;
				color: #FFF;
			}
			.quadrado{
				margin-top: 40px;
				background-color: #78C70A;
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
	<body bgcolor="#78C70A" class="body">
	<header id="cabecalho">
		Procurar República
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
		<form name="form_procurar" method="post">
			<div class="tex-5">Cidade
			</div>
			<center><select class="selectbox01" name="cidade" required>
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
						url:"ajax/controle_disable_procurar.php",
						data: "acao=cidade&"+forma.serialize(),
					}).done(function(msg){
						$('#refresh').load('refresh_procurar.php');
						console.log(msg);
					  });
				});
			</script>
			<div class="tex-6">Faculdade
			</div>
			<center><div id="refresh" ><select class="selectbox02" name="faculdade" disabled="disabled">
				<option>*Selecione uma Cidade...</option>
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
				<option></option>
				<option>01</option>
				<option>02</option>
				<option>03</option>
				<option>04</option>
				<option>05</option>
			</select></center>
			</div>
			<center>
				<button type="submit" class="botao">Procurar</button>
			</center>
		</form>
		<div class="load" style="display: none;"/>
			<center><img src="img/loadiblue.gif" class="btn-menu" alt="Carregando""/></center>
		</div>
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="customprocurar.js"></script>
	</body>
</html>
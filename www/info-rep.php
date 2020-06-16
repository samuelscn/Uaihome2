<?php

//Iniciando sessao
session_start();

//Verificando se está logado
if($_SESSION['logado'] != "ok"){
	echo $_SESSION['logado'];
	header("Location: teste.php");
}

//Conectar ao BD
require "funcoes/banco_bd/banco_bd.php";

$codrepublica = $_SESSION['cod_rep'];

//Armazenando dados em variaveis
$sql = mysqli_query($conexao, "SELECT * FROM republicas WHERE id_republica = '$codrepublica'");
$procurar = mysqli_fetch_array($sql);
	if($procurar){
		$nomerep = $procurar['nomerep'];
		$bairro = $procurar['bairro'];
		$rua = $procurar['rua'];
		$numero = $procurar['numero'];
		$celular = $procurar['celular'];
		$cidade = $procurar['cidade'];
		$faculdade = $procurar['faculdade'];
		$_SESSION['university'] = $procurar['faculdade'];
		$genero = $procurar['genero'];
		$preferencia = $procurar['preferencia'];
		$vagas = $procurar['vagas'];
	}


$by_sql = mysqli_query($conexao, "SELECT * FROM faculdades WHERE nome_facul = '$faculdade'");
$by_procurar = mysqli_fetch_array($by_sql);
	if($by_procurar){
		$_SESSION['guardar_city'] = $by_procurar['cod_city'];
		$guardar_city = $by_procurar['cod_city'];
	}

/*if ($_POST != NULL) {
	$nome = $_POST['nome'];
	$id = $_SESSION['id'];
	$alterar = "UPDATE usuarios SET nome = '$nome' WHERE id_usuarios = '$id'";
	mysqli_query($conexao, $alterar);
	$_SESSION['nome'] = $nome;
	echo "<script>
			 alert('Alteração feita com sucesso!');
		</script>";
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
		<script>
		//Liberar um campo so após o outro estar preenchido
			function liberar(){
				var city = document.getElementById("cidade");	
				var facul = document.getElementById("faculdade");

				if(nome.value != "<?php  ?>"){
				
					sobre.disabled=false;
				}
			}
		</script>
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
						$(location).attr('href', 'adm-rep.php');
					},500)
				});
			});
		</script>
	</header>
		<div class="quadrado">
		<form name="form_info_rep" method="post">
			<div class="tex-0">Nome da República
			</div>
			<center><div id="barrabranca02">
				<input type="text" class="texto02" name="nomerep" value="<?php echo $nomerep; ?>" required>
			</div></center>
			<div class="tex-1">Bairro
			</div>
			<center><div id="barrabranca03">
				<input type="text" class="texto03" name="bairro" value="<?php echo $bairro; ?>" required>
			</div></center>
			<div class="tex-2">Rua
			</div>
			<center><div id="barrabranca04">
				<input type="text" class="texto04" name="rua" value="<?php echo $rua; ?>" required>
			</div></center>
			<div class="tex-3">Número
			</div>
			<center><div id="barrabranca05">
				<input type="text" class="texto05" name="numero" value="<?php echo $numero; ?>" required>
			</div></center>
			<div class="tex-4">Celular
			</div>
			<center><div id="barrabranca06">
				<input type="text" class="texto06" name="celular" value="<?php echo $celular; ?>" required>
			</div></center>
			<div class="tex-5">Cidade
			</div>
			
				<center><select  id="city" class="selectbox01" name="cidade">
					<option><?php echo $cidade; ?></option>
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
						$('#refresh').load('refresh.php');
						console.log(msg);
					  });
				});
			</script>
			<div class="tex-6">Faculdade
			</div>
			<center><div id="refresh"><select class="selectbox02" name="faculdade">
				<option><?php echo $faculdade; ?></option>
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
			<center><select class="selectbox03" name="genero">
				<option><?php echo $genero; ?></option>
				<option>Masculino</option>
				<option>Feminina</option>
				<option>Mista</option>
			</select></center>
			<div class="tex-8">Preferência
			</div>
			<center><select class="selectbox04" name="preferencia">
				<option><?php echo $preferencia; ?></option>
				<option>Gamer</option>
				<option>Golo</option>
				<option>Musicista</option>
			</select></center>
			<div class="tex-9">Vagas
			</div>
			<center><select class="selectbox05" name="vagas">
				<option><?php echo $vagas; ?></option>
				<option>00</option>
				<option>01</option>
				<option>02</option>
				<option>03</option>
				<option>04</option>
				<option>05</option>
			</select></center>
			</div>
			<center>
				<button type="submit" class="botao">Alterar</button>
			</center>
		</form>
		<div class="load" style="display: none;"/>
			<center><img src="img/loadiblue.gif" class="btn-menu" alt="Carregando""/></center>
		</div>
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="custominforep.js"></script>
	</body>
</html>
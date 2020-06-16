<?php

//Impedir mensagem de alerta
error_reporting(1);

//Iniciando a sessão
session_start();

//Conectar ao BD
$conexao = new mysqli("localhost", "root", "", "cadastro");

//clicou em Cadastrar
if($_POST != NULL){

	$id_usuario = $_POST['id_user'];
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$cidade = $_POST['cidade'];
	$senha = $_POST['senha'];
	$receber = mysqli_query($conexao, "SELECT * FROM usuarios WHERE email = '$email'");
	$buscar = mysqli_num_rows($receber);

		if(empty($nome) || empty($email) || empty($cidade) || empty($senha)){
			echo "<center>
					<script> alert('Preencha os campos!'); </script>
				</center>";
		}else{
			if(filter_var($email, FILTER_VALIDATE_EMAIL)){
				if ($buscar<0 || $buscar == 0) {
					if(strlen($senha)<8){
						echo "<center>
								<script> alert('Digite sua senha com no minimo 8 caracteres!'); </script>
							</center>";
					}else{
						// Guardando os dados recebidos no BD
						$cadastrar = "INSERT INTO usuarios(nome, email, cidade, senha) values('$nome', '$email', '$cidade', '$senha')";
						$salvar = mysqli_query($conexao, $cadastrar);
						//Salvando o ID do usuario em uma Sessão
						$_SESSION['id_usuario'] = $id_usuario;
						$_SESSION['logado'] = "ok";
						//Exibindo uma mensagem e enviando o usuario para o Menu
						echo "<center>
								<script> 
									alert('Cadastro efetuado com sucesso!');
									location.href = 'teste1.php'; 
								</script>
							</center>";
					}
				}else{
					echo "<center>
						<script> alert('Email existente!'); </script>
					</center>";	
				}
			}else{
				echo "<center>
						<script> alert('Email incorreto!'); </script>
					</center>";	
			 }
			}	

}

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
			#barrabranca02{
				margin-top: 10px;
				width: 90%;
				height: 36px;
				border-radius: 4px;
				background-color: #FFF;
				box-shadow: 2px 3px 0px #A0A0A0;
			}
			#barrabranca03{
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
				font-family: "sdsans-fillone";
				color: #CCCCCC;
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
				font-family: "sdsans-fillone";
				color: #CCCCCC;
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
				color: #CCCCCC;
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
				font-family: "sdsans-fillone";
				color: #CCCCCC;
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
			@font-face{
				font-family: "sdsans-fillone";
				src: url("sunshine/sdsans-fillone.otf") format("truetype")
			}

		</style>
	</head>
	<body bgcolor="#0695ED">
	<header id="cabecalho">
		Cadastro
		<button id="voltarpag" onClick=window.location="index.html">
					<i class="fa fa-arrow-left fa-lg" style="color: #FFF;" aria-hidden="true"></i>
				</button>
	</header>
		<form name="cadastroform" method="post">
			<center><div id="barrabranca">
				<input type="hidden" name="id_user" required>
				<input type="text" class="texto" name="nome" placeholder="Nome" required>
			</div></center>
			<center><div id="barrabranca01">
				<input type="text" class="texto01" name="email" placeholder="Email" required>
			</div></center>
			<center><div id="barrabranca02">
				<input type="text" class="texto02" name="cidade" placeholder="Cidade" required>
			</div></center>
			<center><div id="barrabranca03">
				<input type="password" class="texto03" name="senha" placeholder="Senha" required>
			</div></center>
			<center>
				<input type="submit" class="botao" value="Cadastrar">
			</center>
		</form>
	</body>
</html>
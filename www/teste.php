<?php

//Impedir mensagens de alerta
error_reporting(1);

//Iniciando a Sessão
session_start();

//Conectar ao BD
$conexao = new mysqli("localhost", "root", "", "cadastro");

//Cliclou em Entrar?
if ($_POST != NULL) {
	
	//Recebe dados digitados
	$email = $_POST['email'];
	$senha = $_POST['senha'];

    //Buscando no banco
	$sql = mysqli_query($conexao, "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'");

	//Armazenando no banco
	$buscar = mysqli_fetch_array($sql);
				if($buscar){
					// criar variaves na sessão
					$_SESSION['logado'] = "ok";
					$_SESSION['id_usuario'] = $buscar['id_usuarios'];
					$_SESSION['email'] = $buscar['email'];
					$_SESSION['senha'] = $buscar['senha'];
					//exibindo uma msg e redirecionando para pagina principal
					echo "<script>
					 alert('Login efetuado com sucesso!');
					 location.href = 'teste1.php';
					</script>";
				}else{
					echo "<script>
					 alert('Erro ao logar, E-mail ou Senha invalidos!');
					</script>";
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
			@font-face{
				font-family: "sdsans-fillone";
				src: url("sunshine/sdsans-fillone.otf") format("truetype")
			}

		</style>
	</head>
	<body bgcolor="#0695ED">
	<header id="cabecalho">
		Login
		<button id="voltarpag" onClick=window.location="index.html">
					<i class="fa fa-arrow-left fa-lg" style="color: #FFF;" aria-hidden="true"></i>
				</button>
	</header>
	   <form name="loginform" method="post">
			<center><div id="barrabranca">
				<input type="text" class="texto" name="email" placeholder="Email" required>
			</div></center>
			<center><div id="barrabranca01">
				<input type="password" class="texto01" name="senha" placeholder="Senha" required>
			</div></center>
			<center>
				<input type="submit" class="botao" value="Entrar">
			</center>
		</form>
		<center>
			<input type="button" class="botao01" onClick=window.location="cad.html" value="não possuo cadastro">
		</center>
		
	</body>
</html>
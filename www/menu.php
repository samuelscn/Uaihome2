<?php



session_start();

//Verificando se está logado
if($_SESSION['logado'] != "ok"){
	echo $_SESSION['logado'];
	header("Location: loginteste.php");
}

//Conectar ao BD
require "funcoes/banco_bd/banco_bd.php";

$cod_rep = $_SESSION['cod_rep'];
$id = $_SESSION['id'];

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
			#btn-menu{
				outline: none;
				float: right;
				margin-top: 5px;
				border-bottom: 1px solid #FAFAFA;
				border-top: 1px solid #FAFAFA;
				border-right: 1px solid #FAFAFA;
				border-left: 1px solid #FAFAFA;
				background-color: #FAFAFA;
				margin-right: 5px;
			}
			.caixa-btn-menu{
				width: 150px;
				height: 100px;
				background-color: #FAFAFA;
				box-shadow: 0px 2px 2px 2px #A0A0A0;
				margin-bottom: 30px;
				margin-top: -50px;
				border-radius: 2px;
				z-index: 9999;
				float: right;
				display: none;
			}
			.btn-info{
				color: #686868;
				font-family: "sdsans-fillone";
				margin-left: 10px;
				text-decoration: none;
			}
			.btn-sair{
				color: #686868;
				font-family: "sdsans-fillone";
				margin-left: 10px;
				text-decoration: none;
			}
			.caixa-btn-menu a:hover {
				background-color: #C6C6C6;
			}
			.full{
				width: 100%;
				height: 100%;
			}
		</style>
	</head>
	<body class="body" bgcolor="#FFF">
	<div class="full">
	<div class="quadrado00">
	<header id="cabecalho">Menu
	<button id="btn-menu"> <i class="fa fa-ellipsis-v fa-2x" aria-hidden="true"> </i></button>
	</header></div>	
	<nav class="caixa-btn-menu">
		</br><a href="#" class="btn-info" >Info</a></br></br>
		<a href="deslogar.php" onClick=window.location="deslogar.php" class="btn-sair" >Sair</a>
	</nav>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script>
		$('#btn-menu').click(function(){
			$('.caixa-btn-menu').slideDown('slow').show();
			return false;
		});
		$('.full').click(function(){
			$('.caixa-btn-menu').hide();
			return false;
		});
	</script>
		<div class="quadrado01">
			<center>
				<button id="perfil">
					<div class="tex-1">Procurar</div>
					<img src="img/lupa-170x200.png">
				</button>
				<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
				<script>
					$('#perfil').click(function(){
						$.ajax({
							url:"ajax/controle_falso.php"
						}).done(function(msg){
							$('.body').hide('slow');
							setTimeout(function(){
								$(location).attr('href', 'procurar-rep.php');
							},500)
						});
					});
				</script>
			</center>
			<center>
				<button id="perfil01">
					<div class="tex-2">República</div>
					<img src="img/casinha-170x200.png">
					<input type="hidden" name="cod" id="cod" value="<?php echo $cod_rep; ?>">
					<input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
				</button>
				<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
				<script>
					$('#perfil01').click(function(){
						$.ajax({
							url:"ajax/controle_validar.php",
							data: {
								cod: $('#cod').val(),
								id: $('#id').val(),
							}
						}).done(function(msg){
							console.log(msg);
							if(msg === 'possui'){
								$( ".body" ).hide( "slow" );
								setTimeout(function(){
									$(location).attr('href', 'adm-rep.php');
								}, 500)
							}
							if(msg === 'naopossui'){
								swal("Desculpe!", "Você ainda não pertence à nenhuma república!", "error")
							}
							});
					});
				</script>
				<button id="perfil02">
					<div class="tex-3">Chat</div>
					<img src="img/balao1.png">
				</button>
			</center>
			<center>
				<button id="perfil03">
					<div class="tex-4">Bug</div>
					<img src="img/bug-170x200.png">
				</button>
				<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
				<script>
					$('#perfil03').click(function(){
						$.ajax({
							url:"ajax/controle_falso.php"
						}).done(function(msg){
							$('.body').hide('slow');
							setTimeout(function(){
								$(location).attr('href', 'bugs.php');
							},500)
						});
					});
				</script>
			</center>
		</div>
	<div class="quadrado02">
		<center><button id="perfil04">
			<i class="fa fa-user fa-3x" style="color: #D82E30;" aria-hidden="true"></i>
		</button>
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script>
			$('#perfil04').click(function(){
				$.ajax({
					url:"ajax/controle_falso.php"
				}).done(function(msg){
					$('.body').hide('slow');
					setTimeout(function(){
						$(location).attr('href', 'perfil-usuario.php');
					},500)
				});
			});
		</script>
				<button id="perfil05">
				<i class="fa fa-home fa-3x" style="color: #0695ED;" aria-hidden="true"></i>
				<input type="hidden" name="cod" id="cod" value="<?php echo $cod_rep; ?>">
				<input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
			</button>
			<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
				<script>
					$('#perfil05').click(function(){
						$.ajax({
							url:"ajax/controle_validar_rep.php",
							data: {
								cod: $('#cod').val(),
								id: $('#id').val(),
							}
						}).done(function(msg){
							console.log(msg);
							if(msg === 'naopossui'){
								$( ".body" ).hide( "slow" );
								setTimeout(function(){
									$(location).attr('href', 'cad-rep.php');
								}, 500)
							}
							if(msg === 'possui'){
								swal("Desculpe!", "Você já pertence à alguma república!", "error")
							}
							});
					});
				</script>
		<button id="perfil06">
			<i class="fa fa-user-plus fa-3x" style="color: #EBAA00;" aria-hidden="true"></i>
		</button>
		</center>
	</div>
</div>
	</body>
</html>
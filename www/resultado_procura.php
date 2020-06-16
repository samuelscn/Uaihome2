<?php 


//Iniciando uma sessão
session_start();

//Conectar ao BD
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
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
		<link rel="icon" href="img/icon-170x200.png">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<style>
			table {
				background-color: #78C70A;
				border-radius: 5px;
				width: 100%;
				overflow: hidden;
				border: #fff;
			}

			table tr{
				width: 100%;
			}

			table tr th{
				background: #3e3e3e;
				color: #fff !important;
			}

			 table tr td{
				border-radius: 5px;
				padding: 10px;
				color: #999;
			}

			table tr td{
				border-bottom: 20px solid #fff;
				background-color: #F1F1F1;
				border-radius: 5px;
				text-align: center;
			}

			a{
				text-decoration: none;
				color: #0695ED;
			}

			#perfil{
				padding: 10px;
				border-bottom: 1px solid #fff;
				background-color: #FAFAFA;
				border-right: 1px solid #fff;
				border-left: 1px solid #fff;
				border-top: 1px solid#fff;
				outline: none;
			}
			.perfil_box{
				margin-top: 30px;
				overflow: hidden;
				width: 50px;
				height: 50px;
				border: 3px solid #02BBD2;
				border-radius:60px;
			}
			.perfil_box img{
				width: 100%;
			}
			#quadrado{
				background-color: #FAFAFA;
				border-radius: 5px;
				border-bottom: 10px solid #78C70A;
				margin-left: 20px;
				margin-right: 20px;
			}

			#nomedarep{
				color: #02BBD2;
				font-family: "sdsans-fillone";
				font-size:15px;
				margin-bottom: 10px;
				margin-top: 0px;
			}

			.tex-2{
				color: #78C70A;
				font-family: "sdsans-fillone";
				font-size:12px;
				text-decoration: none;
			}

			.tex-3{
				color: #EBAA00;
				font-family: "sdsans-fillone";
				font-size:12px;
				text-decoration: none;
			}

			.tex-4{
				color: #0695ED;
				font-family: "sdsans-fillone";
				font-size:12px;
				text-decoration: none;
			}

			.tex-5{
				color: #D82E30;
				font-family: "sdsans-fillone";
				font-size:12px;
				text-decoration: none;
			}

			#perfil01{
				background-color: #FAFAFA;
				border-bottom: 1px solid #FFF;
				border-top: 1px solid #FFF;
				border-right: 1px solid #FFF;
				border-left: 1px solid #FFF;
				outline: none;
			}

			#perfil02{
				background-color: #FAFAFA;
				border-bottom: 1px solid #FFF;
				border-top: 1px solid #FFF;
				border-right: 1px solid #FFF;
				border-left: 1px solid #FFF;
				outline: none;
			}

			#perfil03{
				background-color: #FAFAFA;
				border-bottom: 1px solid #FFF;
				border-top: 1px solid #FFF;
				border-right: 1px solid #FFF;
				border-left: 1px solid #FFF;
				outline: none;
			}

			#perfil04{
				background-color: #FAFAFA;
				border-bottom: 1px solid #FFF;
				border-top: 1px solid #FFF;
				border-right: 1px solid #FFF;
				border-left: 1px solid #FFF;
				outline: none;
			}

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
				margin-top: 10px;
				margin-bottom: 13px;
				font-size:18px;
			}

			@font-face{
				font-family: "sdsans-fillone";
				src: url("sunshine/sdsans-fillone.otf") format("truetype")
			}
		</style>
	</head>
	
	<body bgcolor="#78C70A" class="body">
		<header id="cabecalho">Repúblicas
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

	<?php 

		if(isset($_GET['msg'])){
			$aux = $_GET['msg'];
			$msg = mysqli_query($conexao, "SELECT * FROM republicas WHERE nomerep = '$aux'");
			$row = mysqli_fetch_array($msg);
				if($row){
					$_SESSION['nomerep'] = $row['nomerep'];
					$_SESSION['bairro'] = $row['bairro'];
					$_SESSION['rua'] = $row['rua'];
					$_SESSION['numero'] = $row['numero'];
					$_SESSION['celular'] = $row['celular'];
					$_SESSION['cidade'] = $row['cidade'];
					$_SESSION['faculdade'] = $row['faculdade'];
					$_SESSION['genero'] = $row['genero'];
					$_SESSION['preferencia'] = $row['preferencia'];
					$_SESSION['vagas'] = $row['vagas'];
					echo '<script>window.location = "info_publico.php";</script>';
				}
		exit();
	    }
	?>

	<table>

		<tr>
			

		</tr>

		<?php 
			$city = $_SESSION['filtro_city'];
			$facul = $_SESSION['filtro_facul'];
			$gender = $_SESSION['filtro_gender'];
			$preferencia = $_SESSION['filtro_preferencia'];
			$vagas = $_SESSION['filtro_vagas'];
			$inbox = mysqli_query($conexao, "SELECT * FROM republicas WHERE cidade = '$city' AND faculdade = '$facul' AND genero = '$gender' AND preferencia = '$preferencia' AND vagas = '$vagas' LIMIT 15");
			while($row = mysqli_fetch_assoc($inbox)){
	
			$id_rep = $row['id_republica'];
			$nomerep = $row['nomerep'];
			$bairro = $row['bairro'];
			$rua = $row['rua'];
			$numero = $row['numero'];
			$foto_rep = $row['fotos_rep'];

			echo '<tr>';
		?>

			<center>
				<div id="quadrado">
					<div class="perfil_box">
						<img src="perfil_rep_img/<?php echo $foto_rep ?>">
						<!--<i class="fa fa-user-circle fa-3x" style="color: #02BBD2;" aria-hidden="true"></i>-->
					</div>
					<div id="nomedarep"><?php echo $nomerep; ?></div>
					<center><button id="perfil01"><a href="?msg=<?php echo $nomerep ; ?>">
			<i class="fa fa-id-card fa-2x" style="color: #78C70A;" aria-hidden="true"></i>
			<div class="tex-2"><a href="?msg=<?php echo $nomerep ; ?>">Info</div>
		</button>
			<button id="perfil02">
			<a href="?skip=<?php echo $id_rep ; ?>">
			<i class="fa fa-newspaper-o fa-2x" style="color: #EBAA00;" aria-hidden="true"></i>
			<div class="tex-3"> <a href="?skip=<?php echo $id_rep ; ?>"> Historia</div>
		</button>
		<button id="perfil03"><a href="?ev=<?php echo $evento ; ?>">
			<i class="fa fa-calendar fa-2x" style="color: #0695ED;" aria-hidden="true"></i>
			<div class="tex-4"><a href="?ev=<?php echo $evento ; ?>">Evento</div>
		</button>
		<button id="perfil04"><a href="?img=<?php echo $imagem ; ?>">
			<i class="fa fa-picture-o fa-2x" style="color: #D82E30;" aria-hidden="true"></i>
			<div class="tex-5"><a href="?img=<?php echo $imagem ; ?>">Imagem</div>
		</button>
		</center>
				</div>
			</center>
		<?php

			echo '</tr>';
		 }

        ?>

    </table>

	</body>
</html>


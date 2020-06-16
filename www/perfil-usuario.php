<?php

//COR
#140405

session_start();

//Verificando se está logado
if($_SESSION['logado'] != "ok"){
	echo $_SESSION['logado'];
	header("Location: teste.php");
}

//Conectar ao BD
require "funcoes/banco_bd/banco_bd.php";

//Armazenando dados em variaveis
$nome = $_SESSION['nome'];
$email = $_SESSION['email'];
$id = $_SESSION['id'];
$sql = mysqli_query($conexao, "SELECT * FROM usuarios WHERE id_usuarios = '$id'");
$dados = mysqli_fetch_array($sql);
	if($dados){
		$foto = $dados['fotos'];
		$_SESSION['foto'] = $dados['fotos'];
	}
$pic = $_SESSION['foto'];

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
		<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
		<link rel="icon" href="img/icon-170x200.png">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<script src="sweetalert.min.js"></script>
		<link rel="stylesheet" type="text/css" href="sweetalert.css">
        <script src="js/jquery.min.js"></script>
		<script src="js/jquery.Jcrop.js"></script>
		<script type="text/javascript">
		  jQuery(function($){

		    $('#target').Jcrop({
		    	aspectRatio: 1,
		    	minSize: [160,160],
		    	setSelect:[95,40,160,160],
		    	onChange: showCoords,
		    	onSelect: showCoords
		    });
		    function showCoords(c){
		    	$('#x').val(c.x);
		    	$('#y').val(c.y);
		    	$('#w').val(c.w);
		    	$('#h').val(c.h);
		    };
		  });
		</script>
		<link rel="stylesheet" href="css/jquery.Jcrop.css" type="text/css" />
		<style>
			#voltarpag{
				float: left;
				margin-right: 10px;
				margin-left: -20px;
				background-color: #D82E30;
				border-bottom: 1px solid #D82E30;
				border-top: 1px solid #D82E30;
				border-right: 1px solid #D82E30;
				border-left: 1px solid #D82E30;
				margin-top: 3px;
				outline: none;
			}
			#perfil{
				margin-top: 30px;
				margin-left: -40px;
				background-color: #D82E30;
				border-bottom: 1px solid #D82E30;
				border-top: 1px solid #D82E30;
				border-right: 1px solid #D82E30;
				border-left: 1px solid #D82E30;
				border-radius: 20px;
				width: 100px;
			}
			#perfil_cortar{
				margin-top: 30px;
				margin-left: -200px;
				background-color: rgba(0,0,0,0.9);
				border-bottom: 1px solid rgba(0,0,0,0.9);
				border-top: 1px solid rgba(0,0,0,0.9);
				border-right: 1px solid rgba(0,0,0,0.9);
				border-left: 1px solid rgba(0,0,0,0.9);
				border-radius: 20px;
				width: 100px;
			}
			#upload-pic{
				position: absolute;
				border-radius:40px;
				background-color: #FEBD00;
				border-bottom: 10px solid #FEBD00;
				border-top: 10px solid #FEBD00;
				border-right: 4px solid #FEBD00;
				border-left: 4px solid #FEBD00;
				box-shadow: 0px 1px 1px 1px rgba(0,0,0,0.9);
				margin-top: -30px;
				margin-right: 100px;
				outline: none;
			}
			#cabecalho{
				color: #FFF;
				font-family: "sdsans-fillone";
				margin-left: 30px;
				margin-top: 20px;
				font-size:18px;
			}
			#crop{
				margin-top: 10px;
				border-radius: 5px;
				font-family: "sdsans-fillone";
				background-color: #FEBD00;
				color: white;
				border-bottom: 10px solid #FEBD00;
				border-top: 10px solid #FEBD00;
				border-right: 4px solid #FEBD00;
				border-left: 4px solid #FEBD00;
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
				font-size: 14px;
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
				font-size: 14px;
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
				font-size: 14px;
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
				font-size: 14px;
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
				font-size: 14px;
				font-family: bold;
				font-weight: bold;
				color: #686868;
				outline: none;
			}
			.botao{
				width: 65%;
				height: 40px;
				border-radius: 4px;
				background-color: #FEBD00;
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
				background-color: red;
				margin-top: 40px;
				background-color: #D82E30;
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
			#btn-perfil{
				margin-top: 30px;
			}
			.perfil_box{
				margin-top: 30px;
				overflow: hidden;
				width: 110px;
				height: 110px;
				border: 3px solid #fff;
				border-radius:60px;
			}
			.perfil_box img{
				width: 100%;
			}
			.telanegra{
				width: 100%;
				height: 100%;
				position: fixed;
				background-color: rgba(0,0,0,0.9);
				top: 0;
				left: 0;
			}
			.btn-close{
				font-size:18px;
				margin-left: 5px;
			}
			a {
				text-decoration: none;
			}
			@font-face{
				font-family: "sdsans-fillone";
				src: url("sunshine/sdsans-fillone.otf") format("truetype")
			}
		</style>
	</head>
	<body bgcolor="#D82E30" class="body">
	<header id="cabecalho">
		Perfil do Usuário
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

			if($_SERVER['REQUEST_METHOD'] == 'POST'){
				if(isset($_POST['w'])){
					$x = (int)$_POST['x'];
					$y = (int)$_POST['y'];
					$w = (int)$_POST['w'];
					$h = (int)$_POST['h'];
					$img = $_POST['img'];

					include_once "funcoes/functions.php";
					$crop = crop($img, $x, $y, $w, $h);
					if($crop){
						$foto = $crop;
						$_SESSION['foto'] = $foto;
						unlink('perfil_user_img/'.$_SESSION['temp_img']);
						unset($_SESSION['temp_img']);
						$sql = "UPDATE usuarios SET fotos = '$foto' WHERE id_usuarios = '$id'";
						mysqli_query($conexao, $sql);
											
					}else{
						echo 'Não deu';
					}
				}elseif(isset($_POST['upl_foto'])){
					include_once "lib/WideImage.php";
					$tamanhos = getimagesize($_FILES['foto']['tmp_name']);
					$tamanhos = getimagesize($_FILES['foto']['tmp_name']);
					if($tamanhos[0] < 200){
						echo 'A imagem precisa ter no minimo...';
					}else{
						$wide = WideImage::load($_FILES['foto']['tmp_name']);
						$resized = $wide->resize(300);
						$resize = $resized->saveToFile("perfil_user_img/temp_".$logado = $id.".jpg");
						if(is_object($resized)){
							$_SESSION['temp_img'] = 'temp_'.$logado = $id.'.jpg';
						}
					}
				}
			}
		?>

		<?php if(isset($_SESSION['temp_img'])): ?>
		<div class="telanegra">
			<center>
				<div id="perfil_cortar">
					<img src="perfil_user_img/<?php echo $_SESSION['temp_img'] ?>" id="target" />
					<!--<i class="fa fa-user-circle fa-5x" style="color: #FFF;" aria-hidden="true"></i>-->
				</div>
				<form action="" name="form_img" method="post" enctype="multipart/form-data">
					<input type="hidden" id="x" name="x" value="95" class="coord"/>
					<input type="hidden" id="y" name="y" value="40" class="coord"/>
					<input type="hidden" id="w" name="w" value="160" class="coord"/>
					<input type="hidden" id="h" name="h" value="160" class="coord"/>
					<input type="hidden" name="img" value="perfil_user_img/<?php echo $_SESSION['temp_img'] ?>"/>
					<input type="submit" id="crop" name="x" value="Cortar imagem" class="button"/>
				</form>
			</center>
		</div>
		<?php else: ?>
			<div id="refresh"><form action="" method="post" enctype="multipart/form-data">
				<center><div class="perfil_box"><img src="perfil_user_img/<?php echo $foto ?>"></div></center>
				<center><button type="button" id="upload-pic">
					<i class="fa fa-camera-retro fa-lg" style="color: black;" aria-hidden="true"></i>
				</button></center>
			</form></div>
			<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
			<script>
				$('#upload-pic').click(function(){
					$('#refresh').load('refresh_user.php');
				});
			</script>
		<?php endif; ?>	
			<div class="quadrado">
			<form name="form_user" method="post">
				<div class="tex-0">Nome
				</div>
				<center><div id="barrabranca02">
					<input type="text" class="texto02" name="nome" value="<?php echo $nome; ?>" required>
				</div></center>
				<div class="tex-1">Email
				</div>
				<center><div id="barrabranca03">
					<input type="text" class="texto03" value="<?php echo $email; ?>">
				</div></center>
				<div class="tex-2">Faculdade
				</div>
				<center><div id="barrabranca04">
					<input type="text" class="texto04">
				</div></center>
				<div class="tex-3">Curso
				</div>
				<center><div id="barrabranca05">
					<input type="text" class="texto05">
				</div></center>
				<div class="tex-4">Celular
				</div>
				<center><div id="barrabranca06">
					<input type="text" class="texto06">
				</div></center>
				</div>
				<center>
					<button type="submit" class="botao">Alterar</button>
				</center>
				<div class="load" style="display: none;"/>
				<center><img src="img/loadiamarelo.gif" class="btn-menu" alt="Carregando""/></center>
				</div>
				<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
				<script type="text/javascript" src="customusuario.js"></script>
			</form>
	</body>
</html>

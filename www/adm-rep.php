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
$cod_republica = $_SESSION['cod_rep'];
$id = $_SESSION['id'];
$sql = mysqli_query($conexao, "SELECT * FROM republicas WHERE id_republica = '$cod_republica'");
$guardar = mysqli_fetch_array($sql);
	if($guardar){
		$nomerep = $guardar['nomerep'];
		$_SESSION['nomerep'] = $guardar['nomerep'];
		$foto_rep = $guardar['fotos_rep'];
		$_SESSION['foto_rep'] = $guardar['fotos_rep'];
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
		<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
		<link rel="icon" href="img/icon-170x200.png">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
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
				background-color: #0695ED;
				border-bottom: 1px solid #0695ED;
				border-top: 1px solid #0695ED;
				border-right: 1px solid #0695ED;
				border-left: 1px solid #0695ED;
				margin-top: 3px;
				outline: none;
			}
			#perfil{
				margin-top: 30px;
				margin-left: 0px;
				background-color: #FAFAFA;
				border-bottom: 1px solid #FFF;
				border-top: 1px solid #FFF;
				border-right: 1px solid #FFF;
				border-left: 1px solid #FFF;
				outline: none;
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
				background-color: #02BBD2;
				border-bottom: 10px solid #02BBD2;
				border-top: 10px solid #02BBD2;
				border-right: 4px solid #02BBD2;
				border-left: 4px solid #02BBD2;
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
			#perfil01{
				margin-top: 30px;
				margin-left: 0px;
				background-color: #FAFAFA;
				border-bottom: 1px solid #FFF;
				border-top: 1px solid #FFF;
				border-right: 1px solid #FFF;
				border-left: 1px solid #FFF;
				outline: none;
			}
			.tex-1{
				color: #02BBD2;
				font-family: "sdsans-fillone";
				font-size:18px;
				margin-left: 0px;
				margin-top: 5px;
			}
			#perfil02{
				margin-top: 0px;
				margin-left: 20px;
				background-color: #FAFAFA;
				border-bottom: 1px solid #FFF;
				border-top: 1px solid #FFF;
				border-right: 1px solid #FFF;
				border-left: 1px solid #FFF;
				outline: none;
			}
			#perfil03{
				margin-top: 0px;
				margin-left: 20px;
				background-color: #FAFAFA;
				border-bottom: 1px solid #FFF;
				border-top: 1px solid #FFF;
				border-right: 1px solid #FFF;
				border-left: 1px solid #FFF;
				outline: none;
			}
			#perfil04{
				margin-top: 0px;
				margin-left: 20px;
				background-color: #FAFAFA;
				border-bottom: 1px solid #FFF;
				border-top: 1px solid #FFF;
				border-right: 1px solid #FFF;
				border-left: 1px solid #FFF;
				outline: none;
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
				border: 3px solid #02BBD2;
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
			.tex-2{
				color: #78C70A;
				font-family: "sdsans-fillone";
				font-size:12px;
				margin-left: 0px;
				margin-top: 5px;
			}
			.tex-3{
				color: #EBAA00;
				font-family: "sdsans-fillone";
				font-size:12px;
				margin-left: 0px;
				margin-top: 5px;
			}
			.tex-4{
				color: #0695ED;
				font-family: "sdsans-fillone";
				font-size:12px;
				margin-left: 0px;
				margin-top: 5px;
			}
			.tex-5{
				color: #D82E30;
				font-family: "sdsans-fillone";
				font-size:12px;
				margin-left: 0px;
				margin-top: 5px;
			}
			.quadrado01{
				margin-top: 40px;
				margin-left: 20px;
				margin-right: 20px;
				border-radius: 10px;
				height: 300px;
				background-color: #FAFAFA;
				box-shadow: 3px 3px 0px #A0A0A0;
			}
			@media screen and (max-width: 396px){
				.quadrado01{
				height: 350px;
				}
			}
		</style>
	</head>
	<body bgcolor="#0695ED" class="body">
	<header id="cabecalho">Administrar República
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

					include_once "funcoes/functions_republica.php";
					$crop = crop($img, $x, $y, $w, $h);
					if($crop){
						$foto_rep = $crop;
						$_SESSION['foto_rep'] = $foto_rep;
						unlink('perfil_rep_img/'.$_SESSION['temp_img']);
						unset($_SESSION['temp_img']);
						$sql = "UPDATE republicas SET fotos_rep = '$foto_rep' WHERE id_republica = '$cod_republica'";
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
						$resize = $resized->saveToFile("perfil_rep_img/temp_".$logado = $cod_republica.".jpg");
						if(is_object($resized)){
							$_SESSION['temp_img'] = 'temp_'.$logado = $cod_republica.'.jpg';
						}
					}
				}
			}
		?>

		<div class="quadrado01">
		<?php if(isset($_SESSION['temp_img'])): ?>
		<div class="telanegra">
			<center>
				<div id="perfil_cortar">
					<img src="perfil_rep_img/<?php echo $_SESSION['temp_img'] ?>" id="target" />
					<!--<i class="fa fa-user-circle fa-5x" style="color: #FFF;" aria-hidden="true"></i>-->
				</div>
				<form action="" name="form_img" method="post" enctype="multipart/form-data">
					<input type="hidden" id="x" name="x" value="95" class="coord"/>
					<input type="hidden" id="y" name="y" value="40" class="coord"/>
					<input type="hidden" id="w" name="w" value="160" class="coord"/>
					<input type="hidden" id="h" name="h" value="160" class="coord"/>
					<input type="hidden" name="img" value="perfil_rep_img/<?php echo $_SESSION['temp_img'] ?>"/>
					<input type="submit" id="crop" name="x" value="Cortar imagem" class="button"/>
				</form>
			</center>
		</div>
		<?php else: ?>
		<div id="refresh"><form action="" method="post" enctype="multipart/form-data">
				<center><div class="perfil_box"><img src="perfil_rep_img/<?php echo $foto_rep ?>"></div></center>
				<center><button type="button" id="upload-pic">
					<i class="fa fa-camera-retro fa-lg" style="color: black;" aria-hidden="true"></i>
				</button></center>
				<center><div class="tex-1"><?php echo "$nomerep"; ?></div></center>
			</form></div>
			<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
			<script>
				$('#upload-pic').click(function(){
					$('#refresh').load('refresh_rep.php');
				});
			</script>
		<?php endif; ?>		
		

			<center><button id="perfil01">
			<i class="fa fa-id-card fa-4x" style="color: #78C70A;" aria-hidden="true"></i>
			<div class="tex-2">Info</div>
		</button>
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script>
			$('#perfil01').click(function(){
				$.ajax({
					url:"ajax/controle_falso.php"
				}).done(function(msg){
					$('.body').hide('slow');
					setTimeout(function(){
						$(location).attr('href', 'info-rep.php');
					},500)
				});
			});
		</script>
			<button id="perfil02">
			<i class="fa fa-newspaper-o fa-4x" style="color: #EBAA00;" aria-hidden="true"></i>
			<div class="tex-3">Historia</div>
		</button>
		<button id="perfil03">
			<i class="fa fa-calendar fa-4x" style="color: #0695ED;" aria-hidden="true"></i>
			<div class="tex-4">Evento</div>
		</button>
		<button id="perfil04">
			<i class="fa fa-picture-o fa-4x" style="color: #D82E30;" aria-hidden="true"></i>
			<div class="tex-5">Imagem</div>
		</button>
		</center>
		</div>


	</body>
</html>
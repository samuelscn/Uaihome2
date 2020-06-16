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
				background-color: #D82E30;
				border-bottom: 1px solid #D82E30;
				border-top: 1px solid #D82E30;
				border-right: 1px solid #D82E30;
				border-left: 1px solid #D82E30;
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
				height: 150px;
				border-radius: 7px;
				background-color: #FFF;
				box-shadow: 0px 3px 0px #A0A0A0;
			}
			.texto{
				width: 90%;
				height: 140px;
				border-radius: 5px;
				background-color: #FFF;
				border-bottom: 1px solid #FFF;
				border-top: 1px solid #FFF;
				border-left: 1px solid #FFF;
				border-right: 1px solid #FFF;
				font-family: bold;
				font-weight: bold;
				color: #686868;
				font-size: 15px;
				outline: none;
				text-align: top;
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
	<body bgcolor="#D82E30" class="body">
	<header id="cabecalho">
		Reporte de Bugs
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
		<form name="form_email" method="post">
			<center><div id="barrabranca">
				<textarea class="texto" name="mensagem" maxlength="200" placeholder="Nos ajude com os bugs..."></textarea>
			</div></center>
			<center>
				<button type="submit" class="botao">Enviar</button>
			</center>
		</form>
		<div class="load" style="display: none;"/>
			<center><img src="img/loadiamarelo.gif" class="btn-menu" alt="Carregando""/></center>
		</div>
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="custombug.js"></script>
	</body>
</html>
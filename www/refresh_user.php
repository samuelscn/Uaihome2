<?php 

	session_start();
	require "funcoes/banco_bd/banco_bd.php";
	$foto = $_SESSION['foto'];

?>
		<form action="" method="post" enctype="multipart/form-data">
				<center><div class="perfil_box"><img src="perfil_user_img/<?php echo $foto ?>"></div></center>
				<center><button type="button" id="upload-pic">
					<input type="file" name="foto">
					<i class="fa fa-camera-retro fa-lg" style="color: black;" aria-hidden="true"></i>
					<input type="submit" class="button" value="Enviar" name="upl_foto" />
					<a class="btn-close" href="">x</a>
				</button></center>
		</form>
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script>
			$('.btn-close').click(function(){
				$('.foto').hide();
			});
		</script>
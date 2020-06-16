<?php 

	session_start();
	require "funcoes/banco_bd/banco_bd.php";
	$foto_rep = $_SESSION['foto_rep'];
	$nomerep = $_SESSION['nomerep'];

?>
		<form action="" method="post" enctype="multipart/form-data">
				<center><div class="perfil_box"><img src="perfil_rep_img/<?php echo $foto_rep ?>"></div></center>
				<center><button type="button" id="upload-pic">
					<input type="file" name="foto">
					<i class="fa fa-camera-retro fa-lg" style="color: black;" aria-hidden="true"></i>
					<input type="submit" class="button" value="Enviar" name="upl_foto" />
					<a class="btn-close" href="">x</a>
				</button></center>
				<center><div class="tex-1"><?php echo "$nomerep"; ?></div></center>
		</form>
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script>
			$('.btn-close').click(function(){
				$('.foto').hide();
			});
		</script>
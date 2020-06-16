<?php
	function crop($img, $x, $y, $w, $h){
		$w_final = $h_final = 160;
		$jpeg_quality = 90;

		$src = $img;
		$img_r = imagecreatefromjpeg($src);
		$dst_r = imagecreatetruecolor($w_final, $h_final);

		imagecopyresampled($dst_r, $img_r, 0, 0, $x, $y, $w_final, $h_final, $w, $h);

		$novo_nome = md5(uniqid(rand(), true)).'.jpg';
		imagejpeg($dst_r, 'perfil_user_img/'.$novo_nome, $jpeg_quality);
		if(file_exists('perfil_user_img/'.$novo_nome)){
			return $novo_nome;
		}else{
			return false;
		}
	}


?>
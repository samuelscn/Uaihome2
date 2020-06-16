
<?php
sleep(2);
session_start();
require "../funcoes/banco_bd/banco_bd.php";
$acao = filter_input(INPUT_POST, 'acao', FILTER_SANITIZE_STRING);

		
				
					$x = (int)$_POST['x'];
					$y = (int)$_POST['y'];
					$w = (int)$_POST['w'];
					$h = (int)$_POST['h'];
					$img = $_POST['img'];

					$w_final = $h_final = 160;
					$jpeg_quality = 90;

					$src = $img;
					$img_r = imagecreatefromjpeg($src);
					$dst_r = imagecreatetruecolor($w_final, $h_final);

					imagecopyresampled($dst_r, $img_r, 0, 0, $x, $y, $w_final, $h_final, $w, $h);

					$novo_nome = md5(uniqid(rand(), true)).'.jpg';
					imagejpeg($dst_r, 'perfil_user_img/'.$novo_nome, $jpeg_quality);
					if(file_exists('perfil_user_img/'.$novo_nome)){
						$crop = $novo_nome;
							if($crop){
							$foto = "samuel.jpg";
							unlink('../perfil_user_img/'.$_SESSION['temp_img']);
							unset($_SESSION['temp_img']);
							$sql = "UPDATE usuariosteste SET fotos = '$foto' WHERE id = '$id'";
							mysqli_query($conexao, $sql);
							echo 'imgcortada';	
							}					
					}else{
						echo 'naodeu';
					}

?>

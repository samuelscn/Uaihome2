

<?php



//Função de Login
function crop($img, $x, $y, $w, $h){
	require 'banco_bd/banco_bd.php';
	session_start();
	try{
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
				if(isset($_POST['w'])){
					$x = (int)$_POST['x'];
					$y = (int)$_POST['y'];
					$w = (int)$_POST['w'];
					$h = (int)$_POST['h'];
					$img = $_POST['img'];
					include_once "functions.php";
					return TRUE;		
					}
				}
			}
	}catch(PDOException $e){
		echo $e->getMessage();
	}

}

?>





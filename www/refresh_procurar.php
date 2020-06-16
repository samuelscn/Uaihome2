<select class="selectbox02" name="faculdade">
				<?php 
					require "funcoes/banco_bd/banco_bd.php";
					session_start();
					$guardar_city = $_SESSION['guardar_city'];
					$busca = "SELECT * FROM faculdades WHERE cod_city = '$guardar_city'";
					$receber = mysqli_query($conexao, $busca);
						while($row = mysqli_fetch_assoc($receber)){ ?>
							<option value="<?php echo $row['nome_facul']; ?>"> <?php echo $row['nome_facul'] ?> </option> <?php
						}
				?>
			</select>
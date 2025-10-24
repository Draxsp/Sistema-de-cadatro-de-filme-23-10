<?php
	include_once("conn.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="cs.css">
		<title> Cadastro Filme</title>
		<meta charset="utf-8">
	</head>
	</body>
		<form method="POST" action="processa_cad_filmes.php">

		<div class="pagina"><h1>Nome do Filme:</h1> <br>
		<input type="text" name="txtNomeFilme"><br><br>
				<select name="selectGeneros">
					<option>Selecione o Gênero</option>
					<?php
						$resultado_genero = mysqli_query($conn, "SELECT * FROM tbgenerofilme");
						
						while($row_generos = mysqli_fetch_assoc($resultado_genero))
							{ 
								?>
							<option value="
								<?php echo $row_generos['codGeneroFilme'];?">
								<?php echo $row_generos['generoFilme']; ?>	
							</option> <?php
						}
					?>
				</select><br><br>
			<select name="selectDiretor">
					<option>Selecione o Diretor</option>
					<?php
						$resultado_diretores = mysqli_query($conn, "SELECT * FROM tbdiretorfilme");

						while($row_diretores = mysqli_fetch_assoc($resultado_diretores))
							{ ?>
							<option value="
							<?php echo $row_diretores['codDiretorFilme']; ?>">

							<?php echo $row_diretores['nomeDiretor']; ?>	
							</option> <?php
						}
					?>
				</select><br><br>
			<input type="submit" value="Cadastrar">
		</form>
	</body></div>
</html>
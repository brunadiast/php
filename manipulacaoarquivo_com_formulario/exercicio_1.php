<?php
   header("Content-Type: text/html; charset=ISO-8859-1", true);

?>

<html>
	<head>
		<title>Cadastrar</title> 
		
	</head>
	<body> 
		<form method="post" action="exercicio_1php.php">
			<label>Número de Serie:
				<input type="text" name="nSerie"><br>
			</label>
			
			<label>Marca:
				<input type="text" name="marca"><br>
			</label>
			
			<label>Modelo:
				<input type="text" name="modelo"> <br> 
			</label>
			
			<input type="submit" name="cadastrar" value="Cadastrar">
			<input type="submit" name="listar" value="Listar">
			<input type="reset" name="limpar" value="Limpar">
		</form> 
	</body> 
</html>



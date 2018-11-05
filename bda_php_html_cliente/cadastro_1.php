<?php
   header("Content-Type: text/html; charset=ISO-8859-1", true);

?>
   
<html>
	<head>
		<title> Cadastro_1</title>
	</head>
<body>
<form action = "execucao.php" method = "post">
	<h1>Clientes</h1>
		<table>
			<tr>
				<td>nome:</td>
				<td><input name="nome" type="text"  size="30"></td>
			</tr>
			<tr>
				<td>CPF:</td>
				<td><input name="cpf" type="text" size="14"></td>
			</tr>
			<tr>
				<td>RG:</td>
				<td><input name="identidade" type="text"  size="10"></td>
			</tr>
			<tr>
				<td>endereço:</td>
				<td><input name="endereco" type="text"  size="30"></td>
			</tr>
			<tr>
				<td>bairro:</td>
				<td><input name="bairro" type="text" size="20"></td>
			</tr>
			<tr>
				<td>cidade:</td>
				<td><input name="cidade" type="text" size="30"></td>
			</tr>
			<tr>
				<td>estado:</td>
				<td><input name="estado" type="text" size="2"></td>
			</tr>
			<tr>
				<td>CEP:</td>
				<td><input name="cep" type="text" size="10"></td>
			</tr>
	</table>
	<button type="submit" name="enviar">Cadrastrar</button>
	<button type="submit" name="listar">listar</button>
	<button type="submit" name="buscar">buscar</button>
	<button type="submit" name="editar">editar</button>
	<button type="submit" name="excluir">excluir</button>
	<button type="reset">limpar</button>

</form>
</body>

</html>
<?php
	$host="localhost";
    $user="root";
    $pass="";
    $banco="bancodedados";
    $conexao=mysql_connect($host, $user, $pass) or die(mysql_error());
    mysql_select_db($banco) or die(mysql_error());
?>


<html>
<head>
<title> Cadastro de Cliente </title>
</head>
<body>
<form method="post" action="">
<label>Nome: </label>
<input name="nome" size "30" type="text">
<br>
<label>Cpf</label>
<input name="cpf" size "14" type="text">
<br>
<button type="submit" name="enviar"> Cadastrar </button>
<button type="reset">Limpar</button>
</form> 
</body>
</html>

<?php
if (isset($_POST['enviar'])):
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$sql=mysql_query("INSERT INTO cad_cliente(nome, cpf) VALUES('$nome', '$cpf')");
endif;
?>

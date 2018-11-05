<html>
   <head>  <meta charset="utf-8">
	<title>Cadastro de Clientes</title>
</head>
<body>  

      <h1> Listagem de clientes</h1>

</body>
	<?php

	include "conexao.php";
	
	$selbanco = mysql_query("select * from dadocliente order by nome");
	
	while ($l=mysql_fetch_array($selbanco))
	{
		$id = $l['id'];
		$nome = $l['nome'];
		$cpf = $l['cpf'];
		$identidade = $l['identidade'];
		$end = $l['endereco'];
		$bairro = $l['bairro'];
		$cdd = $l['cidade'];
		$uf = $l['estado'];
		$cep = $l['cep'];
	
		echo "<b>id:</b>$id<br/>";
		echo "<b>nome:</b>$nome<br/>";
		echo "<b>cpf:</b>$cpf<br/>";
		echo "<b>identidade:</b>$identidade</br>";
		echo "<b>end:</b>$end</br>";
		echo "<b>bairro:</b>$bairro<br/>";
		echo "<b>cdd:</b>$cdd<br/>";
		echo "<b>uf:</b>$uf<br/>";
		echo "<b> cep:<b>$cep<br/>";
		
		echo "<hr></hr>";
	}
?>

</body>
</html>

<html>
<head>
	<title>consulta de cliente</title>
</head>
<body>
<?php 
	include "conexao.php";
	
	$buscar = $_POST['buscar'];
	
	//$sql = mysql_query("select * from dadosClientes where cpf like '%".$buscar."%'");
	
	$sql= mysql_query("SELECT * FROM dadoCliente WHERE cpf LIKE ".$buscar);
	
	$row = mysql_num_rows($sql);
	
	if($row > 0)
	{
		while($linha=mysql_fetch_array($sql))
		{
		 $id=$linha['id'];
		 $nome=$linha['nome'];
		 $cpf = $linha['cpf'];
		 $identidade=$linha['identidade'];
		 $end = $linha['endereco'];
		 $bairro = $linha['bairro'];
		 $cdd = $linha['cidade'];
		 $uf = $linha['estado'];
		 $cep = $linha['cep'];
		 
		 echo "<b>id:</b>$id<br/>";
		 echo "<b>nome:</b>$nome<br/>";
		 echo "<b>cpf:</b>$cpf<br/>";
		 echo "<b>identidade:</b>$identidade</br>";
		 echo "<b>end:</b>$end</br>";
		 echo "<b>bairro:</b>$bairro<br/>";
		 echo "<b>cdd:</b>$cdd<br/>";
		 echo "<b>uf:</b>$uf<br/>";
		 echo "<b> cep:<b>$cep<br/>";
		}
	}else {

		echo "cpf n�o encontrado..";
	}


?>

</body>

</html>
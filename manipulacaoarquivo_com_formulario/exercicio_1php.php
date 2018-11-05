<?php
   header("Content-Type: text/html; charset=ISO-8859-1", true);


	$arquivo = "Dados.txt";

	if (isset($_POST['cadastrar'])):

		$nSerie = $_POST['nSerie'];
		$marca = $_POST['marca'];
		$modelo = $_POST['modelo'];
		if (!file_exists($arquivo)) {
			$arquivo = fopen($arquivo, "w");
		}else{
			$arquivo = fopen($arquivo,"a");
		}

		fwrite($arquivo, $nSerie."<br>");
		fwrite($arquivo, $marca."<br>");
		fwrite($arquivo, $modelo."<br><br>");
		fclose($arquivo);
	endif;

	if (isset($_POST['listar'])):
		$arquivo = "Dados.txt";
		if (file_exists($arquivo)) {
			$arquivo = fopen($arquivo,"r");
			
			while(!feof($arquivo)){
			echo fgets($arquivo);
		}
		}else{
			echo ("Arquivo Inexistente!");
		}
		fclose($arquivo);
	endif
?>


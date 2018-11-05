<?php

include "conexao.php";

	if(isset($_POST['enviar'])):
	if(isset($POST['buscar']));
	$cpf = $_POST['cpf'];
	$identidade = $_POST['identidade'];
	$nome = $_POST['nome'];
	$endereco = $_POST['endereco'];
	$bairro = $_POST['bairro'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];
	$cep = $_POST['cep'];

	$sql=mysql_query("insert into dadocliente(cpf, identidade, nome, endereco, bairro, cidade, estado,cep) 
			 values('$cpf','$identidade','$nome', '$endereco','$bairro','$cidade','$estado','$cep')");
	echo "<center><h1>cadastro efetuado com sucesso!</h1></center>";
endif;

if(isset($_POST['listar'])):
	include "listar.php";
endif;

if(isset($_POST['buscar'])):
    include "consultar.php";
endif;

if(isset($_post['editar'])):
include "consultar.php";
endif;


if(isset($_post['buscar'])):
include "consultar.php";
endif; 

if(isset($_post['excluir'])):
include "excluir.php";
endif;

if(isset($_post['fechar'])):
windows.close();
endif; 

?> 
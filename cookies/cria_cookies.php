<?php 
	$nome = $_GET['nome'];
	$cidade = $_GET['cidade'];
		
	setcookie("Nome",$nome);
	setcookie("Cidade",$cidade);

	Header("Location:mensagem.php");
?>
<?php 
	$nome = $_GET['nome'];
	$disciplina = $_GET['disciplina'];
	$nota1 = $_GET['nota1'];
	$nota2 = $_GET['nota2'];
	$nota3 = $_GET['nota3'];

	$soma = $nota1 + $nota2 + $nota3;
	$media = $soma/3;

	echo "nome: ".$nome."<br>";
	echo "disciplina: ".$disciplina."<br>";
	echo "media: ".$media."<br>";

?>
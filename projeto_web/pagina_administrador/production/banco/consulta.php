<?php
	
	include_once ("conexao.php");

	$cont = "SELECT * FROM usuarios_cadastrados ORDER BY 'nome' ";

	$result = mysqli_query($conectar,$cont);

	$linhas = mysqli_num_rows($result);

?>




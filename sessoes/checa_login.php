<?php

	session_start();

	$login = $_POST['login'];
	$senha = $_POST['senha'];

	if ($_POST["login"] == "aula" && $_POST["senha"] == "php") {		
		$_SESSION["Logou"] = 1;
		$_SESSION["Login"] = $login;
		$_SESSION["Senha"] = $senha;

		Header("Location:principal.php");
	}
	else{
		$_SESSION["Logou"] = 0;
		echo "erro";
	}

	
?>
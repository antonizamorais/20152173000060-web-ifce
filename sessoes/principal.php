<?php 

    session_start();
	if ($_SESSION["Logou"] == 1) {
		echo "Bem vindo ao sistema";
	}
	
?>
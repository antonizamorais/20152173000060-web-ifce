<?php
	session_start();
	$emailt = $_POST['email'];
	$senhat = $_POST['senha'];
	
	include_once ("conexao.php");

	$cont = "SELECT * FROM usuarios_cadastrados WHERE email = '$emailt' AND senha = '$senhat' ";

	$result = mysqli_query($conectar,$cont);

	
	
	if (empty($resultado = mysqli_fetch_assoc($result))) {
		$_SESSION['loginErro'] = "Usuário ou senha inválida";
		header("Location:http://localhost/projeto_web/pagina_login/");
	}else{
		if ($resultado['tipo_usuarios'] == 'administrador') {
			header('Location: http://localhost/projeto_web/pagina_administrador/production/adm.php');
		}elseif ($resultado['tipo_usuarios'] == 'cordenador') {
			header('Location: http://localhost/projeto_web/pagina_cordenador/cordenador.php');
		}elseif($resultado['tipo_usuarios'] == 'facilitador'){
			header('Location: http://localhost/projeto_web/pagina_facilitador/facilitador.php');
		}else{
			header('Location: http://localhost/projeto_web/pagina_participante/participante.php');
		}
	}

?>




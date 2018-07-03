<?php

include_once('conexao_cadastro.php');
$nome = $_POST['nome'];
$sexo = $_POST['sexo'];
$datanasc = $_POST['datanasc'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];;
$cidade = $_POST['cidade'];
$cep = $_POST['cep'];
$estado = $_POST['estado'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$conf_senha = $_POST['conf_senha'];
$tipo_usuarios = $_POST['tipo_usuarios'];

//mysqli_autocommit($conexao,FALSE);

$cadastrar = "INSERT INTO usuarios_cadastrados(nome, sexo, datanasc, cpf, endereco, cidade, cep, estado, email, senha, conf_senha, tipo_usuarios) VALUES ('$nome','$sexo','$datanasc','$cpf','$endereco','$cidade', '$cep', '$estado', '$email', '$senha', '$conf_senha', '$tipo_usuarios')";

echo $cadastrar;

$resultado_cadastrar = mysqli_query($conexao, $cadastrar);

// Commit transaction
$receber = mysqli_commit($conexao);

if ($receber) {
	echo "<script>alert('Usuário cadastrado.'); window.location='http://localhost/projeto_web/pagina_inicial/';</script>";
}else{
	echo "erro";
}

// Close connection
mysqli_close($conexao);

?>
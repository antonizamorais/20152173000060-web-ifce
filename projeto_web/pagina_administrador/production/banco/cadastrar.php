<?php
include_once 'conexao.php';

$id = filter_input(INPUT_POST, 'id');
$nome = filter_input(INPUT_POST, 'nome');
$sexo = filter_input(INPUT_POST, 'sexo');
$datanasc = filter_input(INPUT_POST, 'datanasc');
$cpf = filter_input(INPUT_POST, 'cpf');
$endereco = filter_input(INPUT_POST, 'endereco');
$cidade = filter_input(INPUT_POST, 'cidade');
$cep = filter_input(INPUT_POST, 'cep');
$estado = filter_input(INPUT_POST, 'estado');
$email = filter_input(INPUT_POST, 'email');
$senha = filter_input(INPUT_POST, 'senha');
$conf_senha = filter_input(INPUT_POST, 'conf_senha');
$tipo_usuarios = filter_input(INPUT_POST, 'tipo_usuarios');

$cadastrar = "INSERT INTO usuarios_cadastrados(nome, sexo, datanasc, cpf, endereco, cidade, cep, estado, email, senha, conf_senha, tipo_usuarios) VALUES ('$nome','$sexo','$datanasc','$cpf','$endereco','$cidade', '$cep', '$estado', '$email', '$senha', '$conf_senha', '$tipo_usuarios')";

$resultado_cadastrar = mysqli_query($conectar, $cadastrar);
$receber = mysqli_commit($conectar);

if ($receber) {
	header("location:http://localhost/projeto_web/pagina_administrador/production/listar_usuario.php");
}
else{
	echo "erro";
}
// Close connection
mysqli_close($conexao);

?>


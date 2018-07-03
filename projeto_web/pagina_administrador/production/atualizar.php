<?php

session_start();

include_once 'banco/conexao.php';

$id = filter_input(INPUT_GET, 'id');
$nome = filter_input(INPUT_GET, 'nome');
$sexo = filter_input(INPUT_GET, 'sexo');
$datanasc = filter_input(INPUT_GET, 'datanasc');
$cpf = filter_input(INPUT_GET, 'cpf');
$endereco = filter_input(INPUT_GET, 'endereco');
$cidade = filter_input(INPUT_GET, 'cidade');
$cep = filter_input(INPUT_GET, 'cep');
$estado = filter_input(INPUT_GET, 'estado');
$email = filter_input(INPUT_GET, 'email');
$tipo_usuarios = filter_input(INPUT_GET, 'tipo_usuarios');

$cont = "UPDATE usuarios_cadastrados SET nome = '$nome', sexo = '$sexo', datanasc = '$datanasc', cpf = '$cpf', endereco = '$endereco', cidade = '$cidade', cep = '$cep', estado = '$estado', email = '$email', tipo_usuarios = '$tipo_usuarios' where id = '$id'";

$result = mysqli_query($conectar, $cont);
echo $result['id'];
if ($result){
	echo "<script>alert('Usuário atuaizado.'); window.location='http://localhost/projeto_web/pagina_administrador/production/listar_usuario.php';</script>";
} else {
	echo json_encode(array('msg'=>'Erro ao atualizar dados.'));
}

/*$result = mysqli_query($conectar,$cont);
$dados = mysqli_num_rows($result);

if ($dados > 0) {
	header("location: http://localhost/projeto_web/pagina_administrador/production/listar_usuario.php");
}*/


?>
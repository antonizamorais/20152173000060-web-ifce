<?php 

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'sistema_eventos';

$conexao = mysqli_connect($servidor, $usuario,$senha);

$sql_banco = mysqli_select_db($conexao, $banco);

if($conexao){
	echo "<p>olá, você foi conectado com o banco de dados</p>";

	
}else{
	echo "<p style='color:red;'>olá, você não foi conectado com o banco de dados";
}


?>
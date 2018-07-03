<?php 
        //session_start();

	include_once 'conexao.php';
	
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

        $_SESSION['id'] = $id;

        $cont = "SELECT * FROM usuarios_cadastrados where id = '$id'";
        $result = mysqli_query($conectar,$cont);
        $linhas = mysqli_num_rows($result);

	while($linhas = mysqli_fetch_assoc($result)){
        $nome = $linhas['nome'];
        $sexo = $linhas['sexo'];
        $data = $linhas['datanasc'];
        $cpf = $linhas['cpf'];
        $end = $linhas['endereco'];
        $cid = $linhas['cidade'];
        $cep = $linhas['cep'];
        $est = $linhas['estado'];
        $email = $linhas['email'];
        $user = $linhas['tipo_usuarios'];

        }
?>
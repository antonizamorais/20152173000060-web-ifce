<?php
    //estabelece a conexão
    include_once 'banco/conexao.php';
    //recebe o id dos dados que serão apagados
    $id = filter_input(INPUT_GET, 'id');

    //Executa a query
    $sql = "DELETE FROM usuarios_cadastrados WHERE id=".$id;
    $remove = mysqli_query($conectar, $sql);
    //Se falhou, redireciona pra .php com remove igual a false
    if( !$remove ){
        header("Location:http://localhost/projeto_web/pagina_administrador/production/listar_usuario.php?remove=false");
        exit;
    }
    //se tudo deu certo, redireciona pra listaADM.php com remove igual a true
    header("Location:http://localhost/projeto_web/pagina_administrador/production/listar_usuario.php?remocao=true");
?>


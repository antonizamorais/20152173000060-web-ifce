<?php
  session_start();
  include_once("banco/conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>gerEvent | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title">
              <span>gerEvent</span></a>
            </div>

            <div class="clearfix"></div>

            <?php
              include_once("includes/menu_profile.php");
            ?>

            <br />

            <?php
              include_once("includes/sidebar.php");
            ?>

          </div>
        </div>

        <?php
           include_once("includes/top_nav.php");
           include_once("banco/consulta.php");
        ?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Usuarios Cadastrados</h3>
              </div>
            </div>
            <div class="container">
              <div class="row col-md-12 col-md-offset-2 custyle">
                <table class="table" id="dg">
                  <thead>
                    <a  class="btn btn-primary btn-xs pull-right" href="criar.php"><b>+</b> Adicionar usuário</a>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>E-mail</th>
                    <th>Nivel</th>
                    <th>Ações</th>
                  </thead>
                  <tbody>
                    <?php 
                      while($linhas = mysqli_fetch_assoc($result)){
                        $id = $linhas['id'];
                        $cpf = $linhas['cpf'];
                        echo "<tr>";
                        echo "<td>".$linhas['nome']."</td>";
                        echo "<td>".$cpf."</td>";
                        echo "<td>".$linhas['email']."</td>";
                        echo "<td>".$linhas['tipo_usuarios']."</td>";
                        echo "<td><a class ='btn btn-info btn-xs' href ='editar.php? id=$id'><span class='glyphicon glyphicon-edit'></span> editar</a><a class ='btn btn-danger btn-xs' href ='delete.php?id=$id'><span class='glyphicon glyphicon-remove'></span> deletar</a><a class ='btn btn-warning btn-xs'href ='visualizar.php?id=$id'><span class='glyphicon glyphicon-eye-open'></span> visualizar</a></td>";
                        echo "</tr>";
                      }
                    ?>
                </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <?php
          include_once("includes/footer.php");
        ?>  

      </div>
    </div>


    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- PNotify -->
    <script src="../vendors/pnotify/dist/pnotify.js"></script>
    <script src="../vendors/pnotify/dist/pnotify.buttons.js"></script>
    <script src="../vendors/pnotify/dist/pnotify.nonblock.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	
  </body>
</html>
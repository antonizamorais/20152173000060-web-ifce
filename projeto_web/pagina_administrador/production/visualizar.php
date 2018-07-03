<?php
  session_start();
  include_once("banco/conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
          include_once 'banco/ler.php';
        ?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Visualizar todos os dados do usuário</h3>
              </div>
            </div>
            
            <div class="container">
              <div class="row col-md-12 col-md-offset-2 custyle">
                <table class="table">
                  <tr>
                    <th>Nome</th>
                    <?php
                    echo "<td>".$nome."</td>";
                    ?>
                  </tr>
                  <tr>
                    <th>Sexo</th>
                    <?php
                    echo "<td>".$sexo."</td>";
                    ?>
                  </tr>
                  <tr>
                    <th>Data de Nascimento</th>
                    <?php
                    echo "<td>".$data."</td>";
                    ?>
                  </tr>
                  <tr>
                    <td>CPF</td>
                    <?php
                    echo "<td>".$cpf."</td>";
                    ?>
                  </tr>
                  <tr>
                    <td>Endereço</td>
                    <?php
                    echo "<td>".$end."</td>";
                    ?>
                  </tr>
                  <tr>
                    <td>Cidade</td>
                    <?php
                    echo "<td>".$cid."</td>";
                    ?>
                  </tr>
                  <tr>
                    <td>Cep</td>
                    <?php
                    echo "<td>".$cep."</td>";
                    ?>
                  </tr>
                  <tr>
                    <td>Estado</td>
                    <?php
                    echo "<td>".$est."</td>";
                    ?>
                  </tr>
                  <tr>
                    <td>E-mail</td>
                    <?php
                    echo "<td>".$email."</td>";
                    ?>
                  </tr>
                  <tr>
                    <td>Nivel</td>
                    <?php
                    echo "<td>".$user."</td>";
                    ?>
                  </tr>
                </table>
                      <div class="col-lg-2">
          <a class="btn btn-danger btn-lg btn-block" type="submit" href="http://localhost/projeto_web/pagina_administrador/production/listar_usuario.php"><font style="vertical-align: inherit;><font style="vertical-align: inherit;">CANCELAR</font></font></a>
        </div>  
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
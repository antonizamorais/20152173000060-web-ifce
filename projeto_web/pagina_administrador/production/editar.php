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
           include_once("banco/consulta.php");
        ?>

        <!-- page content -->
        <div class="right_col" role="main" id="dgl">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Edição de cadastro de Usuário</h3>
              </div>
            </div>
            
            <?php 
include_once("banco/ler.php");
?>
              
            
            <form role="form" enctype="multipart/form-data" action="atualizar.php" >
            <div class="row"> 
              <div class="col-lg-12">
                <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
                <label>Nome</label>
                <div class="form-group">
                  <input type="text" name="nome" id="nome" class="form-control" value="<?php echo $nome ?>">
                </div>
              </div>
              <div class="col-lg-12">
                <label>Sexo</label>
                <div class="form-group">
                  <select name="sexo" size="1" class="form-control" id="sexo" value = "<?php echo $sexo ?>">
                    <option>feminino</option>
                    <option>masculino</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-12">
                <label>Data de Nascimento</label>
                <div class="form-group">
                  <input type="date" name="datanasc" id="datanasc" class="form-control" value="<?php echo $data ?>">
                </div>
              </div>
              <div class="col-lg-12">
                <label>CPF</label>
                  <div class="form-group">
                    <input type="number" name="cpf" id="cpf" class="form-control" value="<?php echo $cpf ?>">
                  </div>
              </div>
              <div class="col-lg-12">
                <label>Endereço</label>
                <div class="form-group">
                  <input type="text" name="endereco" id="endereco" class="form-control" value="<?php echo $end ?>">
                </div>
              </div>
              <div class="col-lg-12">
                <label>Cidade</label>
                <div class="form-group">
                  <input type="text" name="cidade" id="cidade" class="form-control" value="<?php echo $cid ?>">
                </div>
              </div>
              <div class="col-lg-12">
                <label>CEP</label>
                  <div class="form-group">
                    <input type="number" name="cep" id="cep" class="form-control" value="<?php echo $cep ?>">
                  </div>
              </div>
              <div class="col-lg-12">
                <label>Estado</label>
                <div class="form-group">
                  <select name="estado" class="form-control" value = "<?php echo $est ?>">
                    <option value="ac">Acre</option>
                    <option value="al">Alagoas</option>
                    <option value="am">Amazonas</option> 
                    <option value="ap">Amapá</option> 
                    <option value="ba">Bahia</option>
                    <option value="ce">Ceará</option>
                    <option value="df">Distrito Federal</option>
                    <option value="es">Espírito Santo</option>
                    <option value="go">Goiás</option>
                    <option value="ma">Maranhão</option>
                    <option value="mt">Mato Grosso</option>
                    <option value="ms">Mato Grosso do Sul</option>
                    <option value="mg">Minas Gerais</option>
                    <option value="pa">Pará</option>
                    <option value="pb">Paraíba</option>
                    <option value="pr">Paraná</option>
                    <option value="pe">Pernambuco</option>
                    <option value="pi">Piauí</option>
                    <option value="rj">Rio de Janeiro</option> 
                    <option value="rn">Rio Grande do Norte</option>
                    <option value="ro">Rondônia</option>
                    <option value="rs">Rio Grande do Sul</option>
                    <option value="rr">Roraima</option>
                    <option value="sc">Santa Catarina</option>
                    <option value="se">Sergipe</option>
                    <option value="sp">São Paulo</option>
                    <option value="to">Tocantins</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-12">
                <label>Email</label>
                <div class="form-group">
                  <input type="email" name="email" id="email" class="form-control" data-error="Por favor, informe um e-mail correto." value="<?php echo $email ?>">
                <div class="help-block with-errors"></div>
              </div>
              <div class="col-lg-12">
                <label>Tipo de usuario</label>
                  <div class="form-group">
                    <select name="tipo_usuarios" size="1" class="form-control" id="tipo_usuarios" value = "<?php echo $user ?>">
                      <option>participante</option>
                      <option>facilitador</option>
                      <option>cordenador</option>
                      <option>administrador</option>
                    </select>
                  </div>
              </div>
              <div class="col-lg-12">
                <!-- <a class="btn btn-info btn-lg btn-block" type="submit" href="atualizar.php?id=$id"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ATUALIZAR</font></font></a>-->
                <input type="submit" value="ALTERAR" class="btn btn-info btn-lg btn-block" >
              </div> 
             <!-- <?php /*echo "<a href='atualizar.php?id=$id'>altera</a>"*/;?> -->
              <div class="col-lg-12">

                <a class="btn btn-danger btn-lg btn-block" type="submit" href="http://localhost/projeto_web/pagina_administrador/production/listar_usuario.php"><font style="vertical-align: inherit;><font style="vertical-align: inherit;">CANCELAR</font></font></a>
              </div>

            </div>
          </div>
        </div>     
      </form>                   
      </div>  <!-- inner-form -->
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
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

        ?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Cadastrar novo usuário</h3>
              </div>
            </div>
            <div class="row container">
				<form role="form"enctype="multipart/form-data" action="banco/cadastrar.php" method="POST" id="form">
            		<div class="row">
  						<div class="col-lg-12">
        			    	<label>Nome</label>
        			    	<div class="form-group">
        						<input type="text" name="nome" id="nome" class="form-control" placeholder="nome completo" required="">
        			    	</div>
        			    </div>

                        <div class="col-lg-12">
                            <label>Sexo</label>
                            <div class="form-group">
                                <select name="sexo" size="1" class="form-control" id="sexo" required="">
                                    <option>feminino</option>
                                    <option>masculino</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <label>Data de Nascimento</label>
                            <div class="form-group">
                                <input type="date" name="datanasc" id="datanasc" class="form-control" placeholder="" required="">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <label>CPF</label>
                            <div class="form-group">
                                <input type="number" name="cpf" id="cpf" class="form-control" placeholder="" required="">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <label>Endereço</label>
                            <div class="form-group">
                                <input type="text" name="endereco" 
                                    id="endereco" class="form-control" placeholder="rua, numero, bairro" required="">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <label>Cidade</label>
                                <div class="form-group">
                                    <input type="text" name="cidade" id="cidade" class="form-control" placeholder="" required="">
                            </div>
                        </div>  
                        <div class="col-lg-12">
                            <label>CEP</label>
                            <div class="form-group">
                                <input type="number" name="cep" id="cep" class="form-control" placeholder="" required="">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <label>Estado</label>
                            <div class="form-group">
                                <select name="estado" class="form-control">
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
                                <input type="email" name="email" id="email" class="form-control" data-error="Por favor, informe um e-mail correto." required="">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <label>Senha</label>
                            <div class="form-group">
                                <input type="password" name="senha" id="inputPassword" class="form-control" data-minlength="6" required>
                                <span class="help-block">Mínimo de seis (6) digitos</span>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <label>Confirmar Senha</label>
                            <div class="form-group">
                                <input type="password" name="conf_senha" id="conf_senha" class="form-control" placeholder="" data-match="#inputPassword" data-match-error="Atenção! As senhas não estão iguais." required="">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <label>Tipo de usuario</label>
                            <div class="form-group">
                                <select name="tipo_usuarios" size="1" class="form-control" id="tipo_usuarios" required="">
                                    <option>participante</option>
                                    <option>facilitador</option>
                                    <option>cordenador</option>
                                    <option>administrador</option>
                                </select>
                            </div>
                        </div>
        				<div class="col-lg-12">
        					<button class="btn btn-info btn-lg btn-block" type="submit"><font style="vertical-align: inherit;" onclick=" return validar();"><font style="vertical-align: inherit;">CADASTRAR</font></font></button>
        				</div> 
        				</div>
        			</form>
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

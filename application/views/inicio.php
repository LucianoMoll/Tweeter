<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Criação de conta</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?=base_url();?>css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
      body {
        padding-top: 70px;
      }
      .limitado {
        max-width: 1200px;
      }
      div.panel-heading {
        background-color: white !important;
      }
      button.btn-warning {
        background: linear-gradient(yellow, orange) !important;
        border: 1px solid orange;
        color: black;
      }
    </style>
  </head>
  <body>
  	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container limitado">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Tweeter</a>
        </div>

        
      </div><!-- /.container-fluid -->
    </nav>
    <div class="container w960">
      <div class="row">
        <div class="col-lg-7 col-md-7">
          <div class="container-fluid">
            <h1>Bem-vindo ao Tweeter.</h1>
            <p class="lead">Conecte-se com seus amigos — e outras pessoas fascinantes. Receba atualizações sobre coisas que lhe interessam no momento em que elas acontecem e veja eventos acontecerem, em tempo real, de todos os ângulos.</p>
          </div>
        </div>
        <div class="col-lg-5 col-md-5">

            <div class="panel panel-default">
              <div class="panel-body">
                <?php
                  if ($erro)
                  {
                    echo '
                      <div class="alert alert-danger">' .
                      $erro .'</div>';
                  }
                ?>
                <form role="form" method="post" 
                action="<?=base_url()?>usuario/autenticar">
                  <div class="form-group">
                    <label class="sr-only">Nome de usuário ou e-mail</label>
                    <input name="login" class="form-control" 
                    placeholder="Nome de usuário ou e-mail"
                    value="<?=$login?>">
                    <?=form_error('login')?>
                  </div>
                  <div class="row">
                    <div class="form-group col-lg-10 col-md-9">
                      <label class="sr-only">Senha</label>
                      <input name="senha_" type="password" class="form-control" 
                      placeholder="senha">
                      <?=form_error('senha_')?>
                    </div>

                    <div class="form-group col-lg-2 col-md-3">
                      <button type="submit" class="btn btn-primary pull-right">Entrar</button>
                    </div>
                  </div><!-- row -->

                  <div class="form-group">
                    <label class="checkbox-inline">
                      <input type="checkbox" value="option1"> Lembrar-me
                    </label>

                    <span class="separator">·</span>

                    <a href="#">Esqueceu sua senha?</a>
                  </div>
                </form>
              </div><!-- panel-body -->
            </div><!-- panel -->
            <div class="panel panel-default">
              <div class="panel-heading">
                <big>Novo no tweeter? <span style="color: grey">Inscreva-se</span></big>
              </div>
              <div class="panel-body">

                <form role="form" method="post"
                  action="<?=base_url();?>usuario/criarconta">

                  <div class="form-group">
                    <label class="sr-only" for="nome">Nome completo</label>
                    <input type="text" name="nome" id="nome" 
                    class="form-control" placeholder="Nome completo"
                    value="<?=$nome?>">
                    <?=form_error('nome')?>
                  </div>
                  <div class="form-group">
                    <label class="sr-only" for="email">e-mail</label>
                    <input type="text" name="email" id="email" 
                    class="form-control" placeholder="e-mail"
                    value="<?=$email?>">
                    <?=form_error('email')?>
                  </div>
                  <div class="form-group">
                    <label class="sr-only" for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" 
                    class="form-control" placeholder="Senha">
                    <?=form_error('senha')?>
                  </div>
                  <div class="button-group">
                    <button type="submit" class="btn btn-warning pull-right">Inscreva-se no Tweeter</button>
                  </div>
                </form>
              </div>
            </div><!-- panel -->
        </div><!-- col -->
      </div><!-- row -->
    </div><!-- container -->

  	<script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Tweeter</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?=base_url();?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url();?>css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
      body {
        padding-top: 70px;
      }
      .limitado {
        max-width: 1200px;
      }
      .navbar li:hover, .navbar li:active {
        border-bottom: 4px solid black;
      }
      .input-group input {
        border-bottom-left-radius: 20px;
        border-top-left-radius: 20px;
        border-right: none;
      }
      .input-group input:focus {
        outline: none;
        box-shadow: none;
        border-color: silver;
      }
      .input-group button {
        border-bottom-right-radius: 20px;
        border-top-right-radius: 20px; 
        border-left: none;
        color: grey;
      }
      .input-group button:hover {
        background-color: white;
        border-color: silver;
      }
      .perfil {
        font-size: 18px;
        font-weight: bold;
        color: black;
      }
      div.panel-heading {
        background-color: white !important;
      }
      .sum-label {
        color: grey;
        text-transform: uppercase;
        font-size: small;
      }
      .sum, .sum:hover {
        color: grey;
        text-decoration: none;
        font-size: 24px;
      }
    </style>
  </head>
  <body>
  	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Exibir menu</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <div class="row">
            <div class="col-lg-6 col-md-6">
              <ul class="nav navbar-nav">
                <li><a href="#"><i class="glyphicon glyphicon-home"></i> Início</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-bell"></i> Notificações</a></li>
                <li><a href="#"><strong><big>#</big></strong> Descobrir</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-user"></i> Conta</a></li>
              </ul>
            </div><!-- col -->
            <div class="col-lg-6 col-md-6">
              <div style="line-height: 50px; display: table-cell; float: left; vertical-align: middle; margin-left: -15px;">
                <i style="color: blue; font-size: 22px;" class="fa fa-twitter"></i>
              </div>
              <ul class="nav navbar-nav navbar-right">

                <form class="navbar-form navbar-left" role="search">
                  <div class="form-group">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Buscar no tweeter">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><i class="glyphicon glyphicon-search"></i></button>
                      </span>
                    </div><!-- /input-group -->
                  </div>
                </form>

                <li><a href="#" title="Mensagens"><i class="glyphicon glyphicon-envelope"></i></a></li>
                <li><a href="#" title="Configurações"><i class="glyphicon glyphicon-cog"></i></a></li>
                <li><a href="#" title="Novo tweet"><i class="glyphicon glyphicon-edit"></i></a></li>
                
              </ul>
            </div>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <div class="container limitado">
      <div class="row">
        <div class="col-lg-4 col-md-4">
         <div class="panel panel-default">
          <div class="panel-body">
            <div class="row" style="background-color: #f3f3f3; padding-top: 12px;">
              <div class="col-lg-3 col-md-3 col-sm-3">
                <img src="imagens/thumbnail.png" class="thumbnail" style="width: 70px; height: 70px;">
              </div>
              <div class="col-lg-9 col-md-9 col-sm-9" style="padding-top: 22px;">
                <a class="perfil"><?=$usuario->nome;?></a><br>
                <span style="color: grey;">@<?=$usuario->login;?></span>
              </div>
            </div><!-- row -->
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-4">
                <small class="sum-label">TWEETS</small><br>
                <a class="sum" href="#"><?=$num_tweets;?></a>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4">
                <small class="sum-label">SEGUINDO</small><br>
                <a class="sum" href="#"><?=$num_seguindo;?></a>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4">
                <small class="sum-label">SEGUIDORES</small><br>
                <a class="sum" href="#"><?=$num_seguidores;?></a>
              </div>
            </div>
          </div>

            <form role="form" method="post"
              action="<?=base_url();?>usuario/postartweet">

              <div class="panel-footer">  

                
                  <textarea type="text" id="tweet" name="tweet" class="form-control" 
                    maxlength="5" rows="1" 
                    onfocus="this.rows=10, mostrar()"  
                    onblur="this.rows=1, ocultar(), limpar(this.value,5,'spcontando')" 
                    onkeyup="mostrarResultado(this.value,5,'spcontando')"
                    style="resize:none" placeholder="Publique um novo tweet..."></textarea>

                    <span  class="invisible" id="spcontando" style="font-family:Georgia;">5</span><br />
    
                     <!-- panel-footer <style>
                     #bt{
                      visibility:hidden;
                     }
                     #spcontando{
                      visibility:hidden;
                     }
                     </style> -->

                    <script>
                        function mostrar() {
                            document.getElementById('bt').style.visibility="visible"; 
                            document.getElementById('spcontando').style.visibility="visible"; 
                            //document.getElementById('bt').style.display="block";
                          }
                        function ocultar() {
                            document.getElementById('bt').style.visibility="hidden";
                            document.getElementById('spcontando').style.visibility="hidden";
                            //document.getElementById('bt').style.display="none"; 
                          }
                        function mostrarResultado(box,num_max,campospan){
                              var contagem_regre = (5-box.length);
                              document.getElementById(campospan).innerHTML = contagem_regre;
                            }  
                        function limpar(box,num_max,campospan){
                          document.getElementById('tweet').value = '';
                          document.getElementById(campospan).innerHTML = 5;
                        }

                    </script>

                  <button  id="bt" type="submit" class="btn btn-primary invisible ">Gravar
                  </button>       

              </div><!-- panel-footer -->

            </form>

         </div><!-- panel -->
         <div class="panel panel-default">
          <div class="panel-body">
            <big style="font-size: 22px; letter-spacing: 1.5px;">Quem seguir</big> · <a href="#">Atualizar</a> · <a href="#">Ver todos</a>
          </div>
         </div><!-- panel -->
        </div><!-- col -->

        <div class="col-lg-8 col-md-8">
          <div class="panel panel-default">
            <div class="panel-heading">
              <big style="font-size: 22px;">Tweets</big>
            </div>
            <div class="panel-body">

            </div>
          </div><!-- panel -->
        </div><!-- col -->
      </div><!-- row -->
    </div><!-- container -->

  	<script type="text/javascript" src="<?=base_url();?>js/jquery.min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>js/bootstrap.min.js"></script>
  </body>
</html>
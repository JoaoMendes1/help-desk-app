<?php
  require_once("validador_acesso.php");
?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>Help Desk APP</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">

  </head>

  <body>

  <!--Inicio do Cabeçalho-->
    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="img/logo.png" width="30" height="30" alt="">
        App Hekp Desk
      </a>

      <ul class="navbar-nav">
          <li class="nav-item">
            <a href="logoff.php" class="nav-link">SAIR</a>
          </li>
      </ul>
      
    </nav>
  <!--Fim do Cabeçalho-->

    <div class="card-abrir-chamado">
      <div class="card">
        <div class="card-header">
          Abertura do chamado
        </div>

        <div class="card-body">
          <div class="row">
            <div class="col">

              <form action="">
                <div class="form-group">
                  <label for="">Título</label>
                  <input type="text" class="form-control" placeholder="Título">
                </div>

                <div class="form-group">
                  <label for="">Descrição</label>
                  <textarea class="form-control" cols="" rows="3"></textarea>
                </div>

                <div class="row mt-5">
                  <div class="col-6">
                    <a href="/help-desk-app/home.php" class="btn btn-lg btn-warning btn-block">Voltar</a>
                  </div>

                  <div class="col-6">
                    <button class="btn btn-lg btn-info btn-block">Abrir</button>
                  </div>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Client Soap IMC</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
  <body>
    <!-- Cabeçalho -->
      <header id="menu">
          <nav class="navbar navbar-dark fixed-top bg-dark">
            <div class="container">
              <div class="navbar-brand">
                  <h1>CLIENT SOAP IMC</h1>
              </div>

              
            </div>
          </nav>
        </div>
      </header>
    <!-- Fim do Cabeçalho -->

    <!-- Home -->
    <section id="home" class="d-flex" style="margin-top: 150px;">
      <div class="container align-self-center">
        <div class="row">
          <div class="col-md-5"></div>
          <div class="col-md-2 text-center">
              <form method="POST" action="client.php" enctype="multipart/form-data">
                  <div class="form-group">
                      <label>Altura</label>
                      <input name="altura" class="form-control">
                  </div>
                  <div class="form-group">
                      <label>Peso</label>
                      <input name="peso" class="form-control">
                  </div>
                  <div class="form-group">
                      <select name="sexo" id="selectSexo" class="form-control">
                        <option value="masculino">Masculino</option>
                        <option value="feminino">Feminino</option>
                      </select>
                  </div>
                  <button class="btn btn-success" id="botaoSoma">CALCULAR</button>
              </form>
          </div>
          <div class="col-md-5"></div>
        </div>
        <?php if(isset($_SESSION["result"])): ?>
                  <p class="text-primary text-center" style="font-size: 3em;"><?= $_SESSION["result"]; ?></p>
                    <?php unset($_SESSION["result"]); ?>
                  <?php else: ?>
                  <p class="text-primary text-center" style="font-size: 3em;">0.0</p>
                  <?php endif; ?>
      </div>
    </section>
    <!-- Fim Home -->
    
  </body>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</html>
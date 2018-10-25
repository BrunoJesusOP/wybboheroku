<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link href="css/landing-page.min.css" rel="stylesheet">
    <link href="css/styll.css" rel="stylesheet">
    <link rel="icon" href="img/wybbo.png" type="wybbo.png" />
    <link rel="shortcut icon" href="img/wybbo.png" type="wybbo.png" />
    <link rel="stylesheet" type="text/css" href="../css/stylo.css">
    <title>Wybbo - Segurança</title>
  </head>
  <body>
  <?php
if (isset($_POST['submit'])) {
  //Inclui as classes controladoras
  require_once("./controller/cadastro.controller.class.php");
  require_once("./model/cadastro.class.php");
  //Criando as novas instancias das classes
  $controller = new cadastroController;
  $cadastro = new cadastro;

  $cadastro->setEmail($_POST['email']);
  $cadastro->setNome_completo($_POST['nome_completo']);
  $cadastro->setTelefone($_POST['telefone']);
  $cadastro->setCpf($_POST['CPF']);
  $cadastro->setCor_veiculo($_POST['Cor_veiculo']);
  $cadastro->setPlaca_veiculo($_POST['Placa_veiculo']);
  $cadastro->setSenha($_POST['senha']);
  
  $controller->save($cadastro);
}

 ?>
<form action="index.php" method="post">
<div class="modal fade" tabindex="-1" role="dialog" id="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Cadastro Cliente</h4>
      </div>
      <div class="modal-body">
        <div class ="row">
          <div class="col-12">
            <label for="nome_completo">Nome Completo:</label>
            <input name="nome_completo" type="text" class="styll form-control form-control-lg" placeholder="Nome Completo..." >

          </div>
          <div class="col-6">
            <label for="telefone">Telefone:</label>
            <input name="telefone" type="number" class="styll form-control form-control-lg" placeholder="Telefone.">
          </div>
          <div class="col-6">
            <label for="CPF">CPF:</label>
            <input name="CPF" type="number" class="mascara-cpfcnpj form-control form-control-lg" placeholder="CPF...">
          </div>
          <div class="col-6">
            <label for="cor_veiculo">Cor do Veiculo:</label>
            <input name="Cor_veiculo" type="text" class="mascara-cpfcnpj form-control form-control-lg" placeholder="Cor do veiculo..." >
          </div>
          <div class="col-6">
            <label for="Placa_veiculo">Placa do Veiculo:</label>
            <input name="Placa_veiculo" type="text" class="mascara-cpfcnpj form-control form-control-lg" placeholder="Placa do veiculo..." >
          </div>
          <div class="col-12">
            <label for="email">Email:</label>
            <input name="email" type="text" class="styll form-control form-control-lg" placeholder="Email...">         
          </div>
          <div class="col-6">
            <label for="senha">Senha:</label>
            <input name="senha" type="password" class="styll form-control form-control-lg" placeholder="Senha...">         
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary" name ="submit" value = "Salvar">Salvar</button>

      </div>
    </div>
  </div>
</div>
</form>
    <nav class="navbar navbar-light bg-light static-top">
      <div class="container">
        <a class="navbar-brand" href="#"></a>
        <form class="form-inline" onsubmit="openModal()" id="myForm">
          <button type="submit" class="btn btn-primary">Cadastre-se</button>
        </form>
    </nav>

    <header class="masthead text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-12 mx-auto">
            <h1 class="mb-5"></h1>
          </div>

          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <form method="post" action="functions/validalogin.class.php" name="formlogin">
              <div class="form-row">
                <div class="col-12 col-md-9 mb-2 mb-md-0">
                  <input type="text" name="email" id="email" class="styll form-control form-control-lg" placeholder=" E-mail...">

                  <input type="password" name="senha" id="senha" class="styll form-control form-control-lg" placeholder="Password...">
                  </div>

                  <div class="col-12 col-md-4">
                  <button type="submit" value="Entrar" id="button" class="styll btn btn-block btn-lg btn-primary">Entrar</button>

                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </header>

    <section class="features-icons bg-light text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-screen-desktop m-auto text-primary"></i>
              </div>
              <h3>Plataformas</h3>
              <p class="lead mb-0">A onde o sistema vai roda</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-layers m-auto text-primary"></i>
              </div>
              <h3>Tecnologias usadas</h3>
              <p class="lead mb-0">tecnologias e ferramentas usadas no projeto</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-check m-auto text-primary"></i>
              </div>
              <h3>Funcionalidades</h3>
              <p class="lead mb-0">Oque o sistema vai fazer em geral</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="testimonials text-center bg-light">
      <div class="container">
        <h1 class="mb-5">Equipe</h1>
        <div class="row">
          <div class="col-lg-3">
            <div class="testimonial-item mx-auto mb-3 mb-lg-0">
              <img class="img-fluid rounded-circle mb-2" src="img/testimonials-1.jpg" alt="">
              <h5>Bruno Jesus</h5>
              <p class="font-weight-light mb-0">Sobre e funçoes</p>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="testimonial-item mx-auto mb-3 mb-lg-0">
              <img class="img-fluid rounded-circle mb-2" src="img/testimonials-2.jpg" alt="">
              <h5>Bruno Cardoso</h5>
              <p class="font-weight-light mb-0">Sobre e funçoes</p>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="testimonial-item mx-auto mb-3 mb-lg-0">
              <img class="img-fluid rounded-circle mb-2" src="img/testimonials-3.jpg" alt="">
              <h5>Otávio Oliveira</h5>
              <p class="font-weight-light mb-0">Sobre ou funçoes</p>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="testimonial-item mx-auto mb-3 mb-lg-0">
              <img class="img-fluid rounded-circle mb-2" src="img/testimonials-4.jpg" alt="">
              <h5>William Bertolucci</h5>
              <p class="font-weight-light mb-0">Sobre ou funçoes</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
  <?php  
  if(isset($_GET["erro"])){
  echo "<script>alert('Email ou senha invalidos..!')</script>";
  }
  ?>

  <script src="./js/modal.js"> </script>
</html>

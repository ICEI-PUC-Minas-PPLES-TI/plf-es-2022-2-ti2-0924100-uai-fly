<?php
    if(isset($_POST['submit']))
    {
        include_once('config.php');

        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $cpf = $_POST['cpf'];

        $result = mysqli_query($conexao, "INSERT INTO cliente(cpf,nome,telefone,email,senha) VALUES('$cpf','$nome','$telefone','$email','$senha')");
        /*printf("Errormessage: %s\n", $conexao->error);*/
    } 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="stylelogin.css">
    <title>Login</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="testelogin.php" method="POST" class="sign-in-form">
            <h2 class="title">Entrar</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="senha" placeholder="Senha" />
            </div>
            <input type="submit" value="Entrar" class="btn solid" name="submit" />
            <p class="social-text">Ou entre pelas redes sociais</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <form  id = "form" action="login.php" method="POST"  class="sign-up-form">
          <h2 class="title">Cadastre-se</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input id = "nome" type="text" name="nome" placeholder="Nome Completo" />
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input id = "cpf" type="text" name="cpf" placeholder="CPF" />
            </div>
              <div class="input-field">
                <i class="fas fa-phone"></i>
                <input type="text"  class = "tel" name="telefone" placeholder="Telefone" />
              </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email"  class = "email" name="email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" class = "senha" name="senha"  placeholder="Senha" />
            </div>
            <input type="submit" class="btn" value="Cadastre-se" name="submit" />
            <p class="social-text">Ou entre pelas redes sociais</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Novo aqui ?</h3>
            <p>
              Venha conhecer nossa agencia e
              aproveite cada segundo de sua viagem!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Cadastre-se
            </button>
          </div>
          <img src="UAI.png" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Um de n??s ?</h3>
            <p>
              Seja bem vindo novamente, clique no botao abaixo e
              efetue seu login.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Entrar
            </button>
          </div>
          <img src="UAI.png" class="image" alt="" />
        </div>
      </div>
    </div>
  </body>
</html>

<script src="app.js"></script>

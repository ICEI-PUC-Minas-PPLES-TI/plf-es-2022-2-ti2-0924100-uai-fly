<?php
    if(isset($_POST['submit']))
    {
        include_once('config.php');

        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $result = mysqli_query($conexao, "INSERT INTO cliente(nome) VALUES('$nome')");

    }
?>


        <form  id = "form" action="teste.php" method="POST" class="sign-up-form">
            <h2 class="title">Cadastre-se</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input id = "nome" type="text" name="nome" placeholder="Nome Completo" />
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
          </form>

          
<?php
  session_start();
    if(isset($_POST['submit']))
    {
        include_once('config.php');

        $companhia = $_POST['companhia'];
        $numero_voo = $_POST['numero_voo'];
        $valor = $_POST['valor'];
        $cpf = $_SESSION['cpf'];

        $result = mysqli_query($conexao, "DELETE FROM compra WHERE cpf = '$cpf' and valor ='$valor'");

        $result2 = mysqli_query($conexao, "DELETE FROM voo WHERE cpf = '$cpf' and companhia_aerea ='$companhia' and numero_voo ='$numero_voo'");

        $result3 = mysqli_query($conexao, "DELETE FROM bagagem WHERE cpf = '$cpf'");

        printf("Errormessage: %s\n", $conexao->error);

        if($conexao->error){
          echo 'passagem nao encontrada';
        }

        else{
          header('Location: msg.html');
        }
    } 
?>

<!DOCTYPE html>
<html lang="en">
    
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="stylelogin.css" />
    <title>Login</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="Canc.php" method="POST" class="sign-in-form">
             <h2 class="title">Cancelamento</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="cpf" placeholder="Cpf" />
            </div>
              <div class="input-field">
                <i class="fas fa-calendar"></i>
                <input type="text" name="companhia" placeholder="Companhia" />
              </div>
            <div class="input-field">
              <i class="fas fa-plane"></i>
              <input type="text" name="numero_voo" placeholder="Número do voo" />
            </div>
            <div class="input-field">
              <i class="fas fa-question"></i>
              <input type="text" name="valor" placeholder="Valor exato" />
            </div>
             <div class="form-check">
            </div>
            <input type="submit" name="submit" class="btn" value="Confirmar" />
            
            </div>
        </div>
          </form>
          
          <div class="panels-container">
            <div class="panel left-panel">
              <div class="content">
            <h3>Deseja fazer check-in?</h3>
             <p>
              Facil e rápido, clique no botao abaixo e
              efetue seu check-in.
            </p>
                <a href="Check.html"><button style="background: #04befe; border-radius: 20px; padding: 15px; cursor: pointer; color: #fff; border: none; font-size: 16px; font-family: Poppins;">Check-in</button></a>
            </div>
                
              <img src="recepcao.png" class="image" alt="" />
            </div>
      
  </body>
</html>
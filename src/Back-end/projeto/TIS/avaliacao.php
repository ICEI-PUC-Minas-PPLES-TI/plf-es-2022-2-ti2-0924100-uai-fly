<?php
  session_start();
    if(isset($_POST['submit']))
    {
        include_once('config.php');

        $nota = $_POST['nota'];
        $comentario = $_POST['comentario'];
        $cpf = $_SESSION['cpf'];

        $result = mysqli_query($conexao, "INSERT INTO avaliacao(cpf,nota,comentario) VALUES('$cpf','$nota','$comentario')");

        //printf("Errormessage: %s\n", $conexao->error);
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleajuda.css">
    <title>Formulário</title>
</head>
<body>
    <section>
      <div class="background">
  <div class="container">
    <div class="screen">
      <div class="screen-header">
        <div class="screen-header-left">
          <div class="screen-header-button close"></div>
          <div class="screen-header-button maximize"></div>
          <div class="screen-header-button minimize"></div>
        </div>
        <div class="screen-header-right">
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
        </div>
      </div>
      <div class="screen-body">
        <div class="screen-body-item left">
          <div class="app-title">
            <span>Deixe sua</span>
            <span>Avaliação!</span>
          </div>
          <div class="app-contact">Seu feedback é muito importante pra nós! </div>
        </div>
        <form id = "form" action="avaliacao.php" method="POST">
        <div class="screen-body-item">
          <div class="app-form">
            <div class="app-form-group">
              <input class="app-form-control" type="number" max="5" min="1" name= "nota" placeholder="Nota (1 a 5)" value="">
            </div>
            <div class="app-form-group">
              <input class="app-form-control" type="text" name="comentario" placeholder="comentario">
            </div>
            <div class="app-form-group buttons">
            <button type="submit" name="submit">ENVIAR</button>
            <a href="telacomp.php"><button type="submit" name="submit-cidade">SAIR</button></a>
            </div>
          </div>
        </div>
        </form>
      </div>
    </div>
    <div class="credits">
      UAI-Fly
      </a>
    </div>
  </div>
</div>
    </section>
</body>
</html>
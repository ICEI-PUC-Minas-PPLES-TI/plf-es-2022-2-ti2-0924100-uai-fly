<?php
  session_start();
    if(isset($_POST['submit']))
    {
        include_once('config.php');

        $numero = $_POST['numero'];
        $data_validade = $_POST['data_validade'];
        $cvv = $_POST['cvv'];
        $cpf = $_SESSION['cpf'];

        $result = mysqli_query($conexao, "INSERT INTO cartao(cpf,numero,data_validade,cvv) VALUES('$cpf','$numero','$data_validade','$cvv')");

        //printf("Errormessage: %s\n", $conexao->error);
    } 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- displays site properly based on user's device -->  <link rel="stylesheet" href="Untitled-2.css">
  <link href="cartaoembarque.css" rel="stylesheet">
  <title>Frontend Mentor | Order summary card</title>
</head>
<body>

  <main>
    <section>
      <h1>Cartão de Embarque UAI</h1>
      <span class="description">Seu pagamento foi um sucesso! Agora é só aproveitar e curtir UAI!</span>
      
      <div class="informations">
        <div class="music-price">
          <img src="flowcode.png" width="50px" height="50px" alt="">
          <div class="price">
            <center>
              <strong>Nome cliente</strong> <br> 
              <span>✈️Nº do voo</span>
              <span>$Preço passagem</span> <br>
              <span>Local saída</span> <br>
              <span>Local destino</span> <br>
            </div>
          </div>
        </center>
        
      </div>
  
      <a href="telacomp.php"><button type="button">Volta para tela inicial</button></a>
      
    </section>
  </main>
</body>
</html>
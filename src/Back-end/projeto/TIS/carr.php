<?php
  session_start();
    if(isset($_POST['submit']))
    {
        include_once('config.php');

        $nome = $_POST['nome'];
        $quantidade = $_POST['quantidade'];
        $cpf = $_SESSION['cpf'];

        $result = mysqli_query($conexao, "INSERT INTO bagagem(cpf,nome,quantidade) VALUES('$cpf','$nome','$quantidade')");

        //printf("Errormessage: %s\n", $conexao->error);
    } 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carrinho</title>

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="stylecart.css">

  <!--
    - google font link
  -->
  <link
    href="https://fonts.googleapis.com/css?family=Source+Sans+3:200,300,regular,500,600,700,800,900,200italic,300italic,italic,500italic,600italic,700italic,800italic,900italic"
    rel="stylesheet" />
</head>

<body>


  <!--
    - main container
  -->

  <main class="container">

    <h1 class="heading">
      <ion-icon name="cart-outline"></ion-icon> Despacho de bagagem
    </h1>


    <div class="item-flex">

      <!--
       - checkout section
      -->
      <section class="checkout">

        <h2 class="section-heading">Caso não tenha, apenas clique em proxima etapa</h2>

        <div class="payment-form">

          <form id = "form" action="carr.php" method="POST">

            <div class="cardholder-name">
              <label for="cardholder-name" class="label-default">Quantidade</label>
              <input type="number" name="quantidade" id="cardholder-name" class="input-default">
            </div>

            <div class="input-flex">

              <div class="expire-date">
                <label for="expire-date" class="label-default">Nome</label>

                <div class="input-flex">

                  <input type="text" name="nome" id="expire-date" 
                    class="input-default">
                </div>
              </div>

            </div>

            <input href="cart.php" type="submit" class="btn btn-primary" value="Ok" name="submit"  />

          </form>

          <a href="cart.php" class="compra">
              <button class="btn btn-primary">Proxima etapa</button>
            </a>

        </div>
      </section>

  </main>


</body>

</html>
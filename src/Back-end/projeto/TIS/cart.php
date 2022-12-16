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
  <title>Shopping Cart</title>

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
      <ion-icon name="cart-outline"></ion-icon> Carrinho
    </h1>

    <div class="item-flex">

      <!--
       - checkout section
      -->
      <section class="checkout">

        <h2 class="section-heading">Detalhes do pagamento</h2>

        <div class="payment-form">

          <div class="payment-method">

            <button class="method selected">
              <ion-icon name="card"></ion-icon>

              <span>Cartão de credito</span>

              <ion-icon class="checkmark fill" name="checkmark-circle"></ion-icon>
            </button>

          </div>

          <form id = "form" action="cartaoembarque.php" method="POST">

            <div class="card-number">
              <label for="card-number" class="label-default">Numero do cartão</label>
              <input type="number" name="numero" id="numero" class="input-default">
            </div>

            <div class="input-flex">

              <div class="expire-date">
                <label for="expire-date" class="label-default">Data de expiração</label>

                <div class="input-flex">

                  <input type="text" name="data_validade" id="data_validade" placeholder="31/12"
                    class="input-default">
                </div>
              </div>

              <div class="cvv">
                <label for="cvv" class="label-default">CVV</label>
                <input type="number" name="cvv" id="cvv" class="input-default">
              </div>

            </div>
            <input type="submit" class="btn btn-primary" value="Pagar" name="submit"  />
          </form>

        </div>

      </section>


      <!--
        - cart section
      -->
      
      

    </div>

  </main>






  <!--
    - custom js link
  -->
  <script src="./script.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
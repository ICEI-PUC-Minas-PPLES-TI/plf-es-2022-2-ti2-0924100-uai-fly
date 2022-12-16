<?php
  session_start();
  $cidade_partida = $_SESSION['cidade_partida'];
    if(isset($_POST['submit0']))
    {
        include_once('config.php');

        $cpf = $_SESSION['cpf'];

        $result = mysqli_query($conexao, "INSERT INTO compra(cpf,valor,cod_embarque) VALUES('$cpf','990',default)");

        $result = mysqli_query($conexao, "INSERT INTO voo(cod_embarque,cpf,horario_partida,local_partida,local_chegada,companhia_aerea,numero_voo,data_partida,data_chegada) VALUES(default,'$cpf','19:00','$cidade_partida','Noronha','Azul','7789','27/12','27/12')");

        //printf("Errormessage: %s\n", $conexao->error);
    } 
    else{
      echo 'hmmmmm';
    }

    if(isset($_POST['submit1']))
    {
        include_once('config.php');

        $cpf = $_SESSION['cpf'];

        $result = mysqli_query($conexao, "INSERT INTO compra(cpf,valor,cod_embarque) VALUES('$cpf','950',default)");

        $result = mysqli_query($conexao, "INSERT INTO voo(cod_embarque,cpf,horario_partida,local_partida,local_chegada,companhia_aerea,numero_voo,data_partida,data_chegada) VALUES(default,'$cpf','15:00','$cidade_partida','Curitiba','Gol','4401','29/12','29/12')");

        //printf("Errormessage: %s\n", $conexao->error);
    } 
    else{
      echo 'hmmmmm';
    }

    if(isset($_POST['submit2']))
    {
        include_once('config.php');

        $cpf = $_SESSION['cpf'];

        $result = mysqli_query($conexao, "INSERT INTO compra(cpf,valor,cod_embarque) VALUES('$cpf','800',default)");

        $result = mysqli_query($conexao, "INSERT INTO voo(cod_embarque,cpf,horario_partida,local_partida,local_chegada,companhia_aerea,numero_voo,data_partida,data_chegada) VALUES(default,'$cpf','07:00','$cidade_partida','Foz do Iguaçu','TAM','2213','29/12','29/12')");

        //printf("Errormessage: %s\n", $conexao->error);
    } 
    else{
      echo 'hmmmmm';
    }

    if(isset($_POST['submit3']))
    {
        include_once('config.php');

        $cpf = $_SESSION['cpf'];

        $result = mysqli_query($conexao, "INSERT INTO compra(cpf,valor,cod_embarque) VALUES('$cpf','500',default)");

        $result = mysqli_query($conexao, "INSERT INTO voo(cod_embarque,cpf,horario_partida,local_partida,local_chegada,companhia_aerea,numero_voo,data_partida,data_chegada) VALUES(default,'$cpf','12:00','$cidade_partida','Confins','Azul','2200','26/12','26/12')");

        //printf("Errormessage: %s\n", $conexao->error);
    } 
    else{
      echo 'hmmmmm';
    }

    if(isset($_POST['submit4']))
    {
        include_once('config.php');

        $cpf = $_SESSION['cpf'];

        $result = mysqli_query($conexao, "INSERT INTO compra(cpf,valor,cod_embarque) VALUES('$cpf','666',default)");

        $result = mysqli_query($conexao, "INSERT INTO voo(cod_embarque,cpf,horario_partida,local_partida,local_chegada,companhia_aerea,numero_voo,data_partida,data_chegada) VALUES(default,'$cpf','16:20','$cidade_partida','Raul Soares','Gol','0021','30/12','30/12')");

        //printf("Errormessage: %s\n", $conexao->error);
    } 
    else{
      echo 'hmmmmm';
    }

    if(isset($_POST['submit5']))
    {
        include_once('config.php');

        $cpf = $_SESSION['cpf'];

        $result = mysqli_query($conexao, "INSERT INTO compra(cpf,valor,cod_embarque) VALUES('$cpf','620',default)");

        $result = mysqli_query($conexao, "INSERT INTO voo(cod_embarque,cpf,horario_partida,local_partida,local_chegada,companhia_aerea,numero_voo,data_partida,data_chegada) VALUES(default,'$cpf','05:00','$cidade_partida','São Paulo','Gol','3132','29/12','29/12')");

        //printf("Errormessage: %s\n", $conexao->error);
    } 
    else{
      echo 'hmmmmm';
    }

    if(isset($_POST['submit6']))
    {
        include_once('config.php');

        $cpf = $_SESSION['cpf'];

        $result = mysqli_query($conexao, "INSERT INTO compra(cpf,valor,cod_embarque) VALUES('$cpf','625',default)");

        $result = mysqli_query($conexao, "INSERT INTO voo(cod_embarque,cpf,horario_partida,local_partida,local_chegada,companhia_aerea,numero_voo,data_partida,data_chegada) VALUES(default,'$cpf','21:00','$cidade_partida','Rio de Janeiro','Latam','0013','26/12','26/12')");

        //printf("Errormessage: %s\n", $conexao->error);
    } 
    else{
      echo 'hmmmmm';
    }

    if(isset($_POST['submit7']))
    {
        include_once('config.php');

        $cpf = $_SESSION['cpf'];

        $result = mysqli_query($conexao, "INSERT INTO compra(cpf,valor,cod_embarque) VALUES('$cpf','999',default)");

        $result = mysqli_query($conexao, "INSERT INTO voo(cod_embarque,cpf,horario_partida,local_partida,local_chegada,companhia_aerea,numero_voo,data_partida,data_chegada) VALUES(default,'$cpf','19:00','$cidade_partida','Mato Grosso do Sul','Azul','2231','07/01','07/01')");

        //printf("Errormessage: %s\n", $conexao->error);
    } 
    else{
      echo 'hmmmmm';
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

          <form id = "form" action="cart.php" method="POST">

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

            <input href="cart.php" type="submit" class="btn btn-primary" value="Cadastrar" name="submit"  />

          </form>

        </div>
      </section>

  </main>


</body>

</html>
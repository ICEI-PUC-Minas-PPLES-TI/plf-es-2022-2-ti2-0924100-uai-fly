<?php
  session_start();

  $logado = $_SESSION['email'];
  $cpf = $_SESSION['cpf'];
  if(isset($_POST['submit-cidade']))
  {
      include_once('config.php');

      $cidade_partida = $_POST['cidade'];
      $_SESSION['cidade_partida'] = $cidade_partida;


      $result = mysqli_query($conexao, "UPDATE cliente SET cidade = '$cidade_partida'  WHERE cpf = '$cpf';");

      //printf("Errormessage: %s\n", $conexao->error);
  }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/favicon.png" />

    <title>UAI-Fly</title>
    <link rel="stylesheet" href="stylepass.css" />
</head>
<body>

    <!-- modelos de passagem na lista e no carrinho -->
    <div class="models">

        <!-- passagem na lista -->
        <div class="passagem-item">
            <a href="">
                <div class="passagem-item--img"><img src="" /></div>
                <div class="passagem-item--add">+</div>
            </a>
            <div class="passagem-item--price">R$ --</div>
            <div class="passagem-item--name">--</div>
            <div class="passagem-item--desc">--</div>
        </div>

        <!-- passagem no carrinho -->
        <div class="cart--item">
            <img src="" />
            <div class="cart--item-nome">--</div>
            <div class="cart--item--qtarea">
                <button class="cart--item-qtmenos">-</button>
                <div class="cart--item--qt">1</div>
                <button class="cart--item-qtmais">+</button>
            </div>
        </div>

    </div>
    <!-- /models -->

    <!-- .menu-openner aparecera no modo mobile -->
   
    <header>
            <h1>UAI-Fly</h1>
            
        </header>
    <!-- /menu-openner -->

    <!-- conteudo principal -->
    <main>
        
        <h2>✈️ Lugares disponiveis para você! Saindo diretamente de <?php echo $_SESSION['cidade_partida']; ?> ✈️</h2>

        <div class="passagem-area"></div>
    </main>
    <!-- /conteudo principal -->
<!--      
    
    <aside>
        <div class="cart--area">
            <div class="menu-closer">❌</div>
            <h1>Suas Passagens</h1>
            <div class="cart"></div>
            <div class="cart--details">
                <div class="cart--totalitem subtotal">
                    <span>Subtotal</span>
                    <span>R$ --</span>
                </div>
                <div class="cart--totalitem desconto">
                    <span>Desconto</span>
                    <span>R$ --</span>
                </div>
                <div class="cart--totalitem total big">
                    <span>Total</span>
                    <span>R$ --</span>
                </div>
                <div class="cart--finalizar">Finalizar a compra
                    
                </div>
            </div>
        </div>
    </aside>
-->
    <!-- /aside do carrinho -->
       
    <!-- janela modal .passagemWindowArea -->
    <div class="passagemWindowArea">
        <div class="passagemWindowBody">
            <div class="passagemInfo--cancelMobileButton">Voltar</div>
            <div class="passagemBig">
                <img src="" />
            </div>
            <form action="carr.php" method="POST" class="sign-in-form">
            <div class="passagemInfo">
                <h1 name="destino">--</h1>
                <div class="passagemInfo--desc">--</div>
                <div class="passagemInfo--sizearea">
                    <div class="passagemInfo--sector">Tipo</div>
                    <div class="passagemInfo--sizes">
                        <div data-key="I" class="passagemInfo--size">Ida <span>1</span></div>
                        <div data-key="I2" class="passagemInfo--size">Ida <span>--</span></div>
                        <div data-key="IV" class="passagemInfo--size selected">Ida <span>--</span></div>
                    </div>
                </div>
                <div class="passagemInfo--pricearea">
                    <div class="passagemInfo--sector">Preço</div>
                    <div class="passagemInfo--price">
                        <div class="passagemInfo--actualPrice">R$ --</div>
                        <div class="passagemInfo--qtarea">
                        
                            <div class="passagemInfo--qt">1</div>
                            
                        </div>
                    </div>
                    <div class="passagemInfo--pricearea">
                       
                        
            
                        

                        </div>
                </div>
                <div class="passagemInfo--addButton" type="><a href="carr.php">Comprar Agora</a></div>     
                <div class="passagemInfo--cancelButton">Cancelar</div>
            </div>
            </form>
        </div>
    </div>
    <!-- /janela modal .passagemWindowArea -->

    <script src="scriptpass.php"></script>
    <script src="passagens.js"></script>
</body>
</html>

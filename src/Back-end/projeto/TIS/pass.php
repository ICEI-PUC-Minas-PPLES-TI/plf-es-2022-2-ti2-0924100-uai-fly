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
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passagens</title>
    <link rel="stylesheet" href="stylepass2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  </head>
  <body>

  <header>
            <h1>UAI-Fly</h1>

            <h2>✈️ Lugares disponiveis para você! Saindo diretamente de <?php echo $_SESSION['cidade_partida']; ?> ✈️</h2>
            
        </header>
    <!-- /menu-openner -->

    <!-- conteudo principal -->

    <div class="container">
    <form id = "form" action="carr.php" method="POST">
      <div class="product">
        <div class="product-card">
          <h2 class="name">Fernando de Noronha</h2>
          <span class="price">R$990.00</span>
          <a class="popup-btn">+</a>
          <img src="noronha.jpg" class="product-img" alt="">
        </div>
        <div class="popup-view">
          <div class="popup-card">
            <a><i class="fas fa-times close-btn"></i></a>
            <div class="product-img">
              <img src="noronha.jpg" alt="">
            </div>
            <div class="info">
              <h2>Noronha<br><span>Pernambuco</span></h2>
              <p>Local De Partida: <?php echo $_SESSION['cidade_partida']; ?> <br> Local de Chegada: Noronha <br> Codigo Da Passagem: 7789<br> Empresa Aérea: Azul <br></p>
              <span class="price">R$990.00</span>
              <button type="submit" name="submit0" class="add-cart-btn">Comprar</button>
            </div>
          </div>
        </div>
      </div>
      </form>
      <form id = "form" action="carr.php" method="POST">
            <div class="product">
        <div class="product-card">
          <h2 class="name">Curitiba</h2>
          <span class="price">R$950.00</span>
          <a class="popup-btn">+</a>
          <img src="curitiba.jpg" class="product-img" alt="">
        </div>
        <div class="popup-view">
          <div class="popup-card">
            <a><i class="fas fa-times close-btn"></i></a>
            <div class="product-img">
              <img src="curitiba.jpg" alt="">
            </div>
            <div class="info">
              <h2>Curitiba<br><span>Paraná</span></h2>
              <p>Local De Partida: <?php echo $_SESSION['cidade_partida']; ?> <br> Local de Chegada: Curitiba <br> Número do Voo: 4401 <br> Empresa Aérea: Gol <br></p>
              <span class="price" name="preco">R$950.00</span>
              <button type="submit" name="submit1" class="add-cart-btn">Comprar</button>
            </div>
          </div>
        </div>
      </div>
      </form>

      <form id = "form" action="carr.php" method="POST">
          <div class="product">
        <div class="product-card">
          <h2 class="name">Foz do Iguaçu</h2>
          <span class="price">R$800.00</span>
          <a class="popup-btn">+</a>
          <img src="foz.jpg" class="product-img" alt="">
        </div>
        <div class="popup-view">
          <div class="popup-card">
            <a><i class="fas fa-times close-btn"></i></a>
            <div class="product-img">
              <img src="foz.jpg" alt="">
            </div>
            <div class="info">
              <h2>Foz do Iguaçu<br><span>Paraná</span></h2>
              <p>Local De Partida: <?php echo $_SESSION['cidade_partida']; ?> <br> Local de Chegada:: Foz Do Iguaçu <br> Número do Voo: 2213 <br> Empresa Aérea: TAM <br></p>
              <span class="price">R$800.00</span>
              <button type="submit" name="submit2" class="add-cart-btn">Comprar</button>
            </div>
          </div>
        </div>
      </div>
      </form>

      <form id = "form" action="carr.php" method="POST">
            <div class="product">
        <div class="product-card">
          <h2 class="name">Capitólio</h2>
          <span class="price">R$500.00</span>
          <a class="popup-btn">+</a>
          <img src="capitolio.jpg" class="product-img" alt="">
        </div>
        <div class="popup-view">
          <div class="popup-card">
            <a><i class="fas fa-times close-btn"></i></a>
            <div class="product-img">
              <img src="capitolio.jpg" alt="">
            </div>
            <div class="info">
              <h2>Capitólio<br><span>Minas Gerais</span></h2>
              <p>Local De Partida: <?php echo $_SESSION['cidade_partida']; ?> <br>  Local de Chegada: Confins <br> Número do Voo: 2200 <br> Empresa Aérea: Azul <br></p>
              <span class="price">R$500.00</span>
              <button type="submit" name="submit3" class="add-cart-btn">Comprar</button>
            </div>
          </div>
        </div>
      </div>
      </form>

      <form id = "form" action="carr.php" method="POST">
           <div class="product">
        <div class="product-card">
          <h2 class="name">Raul Soares</h2>
          <span class="price">R$666.00</span>
          <a class="popup-btn">+</a>
          <img src="raul.jpg" class="product-img" alt="">
        </div>
        <div class="popup-view">
          <div class="popup-card">
            <a><i class="fas fa-times close-btn"></i></a>
            <div class="product-img">
              <img src="raul.jpg" alt="">
            </div>
            <div class="info">
              <h2>Raul Soares<br><span>Minas Gerais</span></h2>
              <p>Local De Partida: <?php echo $_SESSION['cidade_partida']; ?> <br> Local de Chegada: Raul Soares<br> Número do Voo: 0021<br> Empresa Aérea: Gol <br</p>
              <span class="price">R$666.00</span>
              <button type="submit" name="submit4" class="add-cart-btn">Comprar</button>
            </div>
          </div>
        </div>
      </div>
      </form>

      <form id = "form" action="carr.php" method="POST">
            <div class="product">
        <div class="product-card">
          <h2 class="name">São Paulo</h2>
          <span class="price">$620.00</span>
          <a class="popup-btn">+</a>
          <img src="sp.jpg" class="product-img" alt="">
        </div>
        <div class="popup-view">
          <div class="popup-card">
            <a><i class="fas fa-times close-btn"></i></a>
            <div class="product-img">
              <img src="sp.jpg" alt="">
            </div>
            <div class="info">
              <h2>São Paulo<br><span>São Paulo</span></h2>
              <p>Local De Partida: <?php echo $_SESSION['cidade_partida']; ?> <br> Local de Chegada: São Paulo <br> Número do Voo: 3132 <br> Empresa Aérea: Gol <br></p>
              <span class="price">R$620.00</span>
              <button type="submit" name="submit5" class="add-cart-btn">Comprar</button>
            </div>
          </div>
        </div>
      </div>
      </form>

      <form id = "form" action="carr.php" method="POST">
           <div class="product">
        <div class="product-card">
          <h2 class="name">Rio de Janeiro</h2>
          <span class="price">R$625.00</span>
          <a class="popup-btn">+</a>
          <img src="rio.jpg" class="product-img" alt="">
        </div>
        <div class="popup-view">
          <div class="popup-card">
            <a><i class="fas fa-times close-btn"></i></a>
            <div class="product-img">
              <img src="rio.jpg" alt="">
            </div>
            <div class="info">
              <h2>Rio de Janeiro<br><span>Rio de Janeiro</span></h2>
              <p>Local De Partida: <?php echo $_SESSION['cidade_partida']; ?> <br> Local de Chegada: Rio De Janeiro <br> Número do Voo: 0013 <br> Empresa Aérea: Latam <br></p>
              <span class="price">R$625.00</span>
              <button type="submit" name="submit6" class="add-cart-btn">Comprar</button>
            </div>
          </div>
        </div>
      </div>
      </form>

      <form id = "form" action="carr.php" method="POST">
       <div class="product">
        <div class="product-card">
          <h2 class="name">Bonito</h2>
          <span class="price">R$999.00</span>
          <a class="popup-btn">+</a>
          <img src="bonito.JPG" class="product-img" alt="">
        </div>
        <div class="popup-view">
          <div class="popup-card">
            <a><i class="fas fa-times close-btn"></i></a>
            <div class="product-img">
              <img src="bonito.JPG" alt="">
            </div>
            <div class="info">
              <h2>Bonito<br><span>Mato Grosso do sul</span></h2>
              <p>Local De Partida: <?php echo $_SESSION['cidade_partida']; ?> <br> Local de Chegada: Mato Grosso do Sul<br> Codigo Passagem: 2231  <br> Empresa Aérea: Azul <br</p>
              <span class="price">R$999.00</span>
              <button type="submit" name="submit7" class="add-cart-btn">Comprar</button>
            </div>
          </div>
        </div>
      </div>
      </form>
      
      </div>
    </div>

    <script type="text/javascript">
    var popupViews = document.querySelectorAll('.popup-view');
    var popupBtns = document.querySelectorAll('.popup-btn');
    var closeBtns = document.querySelectorAll('.close-btn');

    //javascript for quick view button
    var popup = function(popupClick){
      popupViews[popupClick].classList.add('active');
    }

    popupBtns.forEach((popupBtn, i) => {
      popupBtn.addEventListener("click", () => {
        popup(i);
      });
    });

    //javascript for close button
    closeBtns.forEach((closeBtn) => {
      closeBtn.addEventListener("click", () => {
        popupViews.forEach((popupView) => {
          popupView.classList.remove('active');
        });
      });
    });
    </script>

  </body>
</html>
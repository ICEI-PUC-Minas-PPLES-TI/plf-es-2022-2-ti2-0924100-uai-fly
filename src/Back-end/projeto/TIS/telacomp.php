<?php

    session_start();
    print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
      unset($_SESSION['email']);
      unset($_SESSION['senha']);
      header('Location: login.php');
    }
    $logado = $_SESSION['email'];
    $cpf = $_SESSION['cpf'];

    if(isset($_POST['submit']))
    {
        include_once('config.php');

        $cidade_partida = $_POST['cidade'];
        $_SESSION['cidade_partida'] = $cidade_partida;


        $result = mysqli_query($conexao, "UPDATE cliente SET cidade = '$cidade_partida'  WHERE cpf = '$cpf';");

        //printf("Errormessage: %s\n", $conexao->error);
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UAI-Fly - agência de viagens</title>

  <link rel="stylesheet" href="sistema.php">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="inicio.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600&family=Open+Sans&display=swap"
    rel="stylesheet">
</head>

<body>

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <div class="overlay" data-overlay></div>

      <a href="#" class="logo">
        <img src="logo1 - Copia.png" alt="UAI-Fly">
      </a>

      <nav class="navbar" data-navbar>
        <ul class="navbar-list">

          <li>
            <a href="index.html" class="navbar-link" data-nav-link>inicio</a>
          </li>

          <li>
            <a href="avaliacao.php" class="navbar-link" data-nav-link>Avaliações</a>
          </li>

          <li>
            <a href="Check.php" class="navbar-link" data-nav-link>Check-in/Cancelamento</a>
          </li>

        </ul>
      </nav>

      <div class="header-actions">

        <div class="header-contact">
          <a href="ajuda.html" class="contact-link">+55 (31) ********</a>

          <span class="contact-time">Seg - Sex: 9:00 - 18:00</span>
        </div>

        <a href="index.html" class="btn" aria-labelledby="aria-label-txt">
          <ion-icon name="cart-outline"></ion-icon>

          <span id="aria-label-txt">Sair</span>
        </a>

        <a href="#" class="btn user-btn" aria-label="Profile">
          <ion-icon name="person-outline"></ion-icon>
        </a>
        <p><?php echo $logado; ?></p>

        <button class="nav-toggle-btn" data-nav-toggle-btn aria-label="Toggle Menu">
          <span class="one"></span>
          <span class="two"></span>
          <span class="three"></span>
        </button>

      </div>

    </div>
  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero" id="home">
        <div class="container">

          <div class="hero-content">
            <h2 class="h1 hero-title">COMPRE AGORA CONOSCO!</h2>

            <p class="hero-text">
              O melhor para você.
            </p>
          </div>

          <div class="hero-banner"></div>

          <form action="pass.php" method="POST" class="hero-form">

            <div class="input-wrapper">
              <label for="input-1" class="input-label">Vamos encontrar as melhores passagens para você</label>

              <input type="text" name="cidade" id="input-1" class="input-field"
                placeholder="De onde você vai partir? (Cidade)">
            </div>


            <!--<input href="pass.php" type="submit" name="submit" class="btn"></input>-->
            <a href="pass.php"><button type="submit" name="submit-cidade" class="btn">Vamos lá!</button></a>
          </form>

        </div>
      </section>





      <!-- 
        - #FEATURED CAR
      -->

      <section class="section passagem" id="passagem">
        <div class="container">

          <div class="title-wrapper">
            <h2 class="h2 section-title">Passagens/Pacotes</h2>

            <a href="#" class="featured-car-link">
              <span>Ver mais</span>

              <ion-icon name="arrow-forward-outline"></ion-icon>
            </a>
          </div>

          <ul class="featured-car-list">

            <li>
              <div class="featured-car-card">

                <figure class="card-banner">
                  <img src="noronha.jpg" alt="Toyota RAV4 2021" loading="lazy" width="440" height="300"
                    class="w-100">
                </figure>

                <div class="card-content">

                  <div class="card-title-wrapper">
                    <h3 class="h3 card-title">
                      <a href="#">Fernando de Noronha</a>
                    </h3>

                    <data class="year" value="2021">2023</data>
                  </div>

                  <ul class="card-list">

                    <li class="card-list-item">
                      <ion-icon name="people-outline"></ion-icon>

                      <span class="card-item-text">4 pessoas</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="locate-outline"></ion-icon>

                      <span class="card-item-text">Pernambuco</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="time-outline"></ion-icon>

                      <span class="card-item-text">4D/3N</span>
                    </li>


                  </ul>

                  <div class="card-price-wrapper">

                    <p class="card-price">
                      <strong>R$440</strong> / por pessoa
                    </p>

                    <button class="btn fav-btn" aria-label="Add to favourite list">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                    <button class="btn">Carrinho</button>

                  </div>

                </div>

              </div>
            </li>

            <li>
              <div class="featured-car-card">

                <figure class="card-banner">
                  <img src="curitiba.jpg" alt="BMW 3 Series 2019" loading="lazy" width="440" height="300"
                    class="w-100">
                </figure>

                <div class="card-content">

                  <div class="card-title-wrapper">
                    <h3 class="h3 card-title">
                      <a href="#">Curitiba</a>
                    </h3>

                    <data class="year" value="2019">2019</data>
                  </div>

                  <ul class="card-list">

                    <li class="card-list-item">
                      <ion-icon name="people-outline"></ion-icon>

                      <span class="card-item-text">4 pessoas</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="locate-outline"></ion-icon>

                      <span class="card-item-text">Paraná</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="time-outline"></ion-icon>

                      <span class="card-item-text">4D/3N</span>
                    </li>
                  </ul>

                  <div class="card-price-wrapper">

                    <p class="card-price">
                      <strong>R$350</strong> / por pessoa
                    </p>

                    <button class="btn fav-btn" aria-label="Add to favourite list">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                    <button class="btn">Carrinho</button>

                  </div>

                </div>

              </div>
            </li>

            <li>
              <div class="featured-car-card">

                <figure class="card-banner">
                  <img src="foz.jpg" alt="Volkswagen T-Cross 2020" loading="lazy" width="440"
                    height="300" class="w-100">
                </figure>

                <div class="card-content">

                  <div class="card-title-wrapper">
                    <h3 class="h3 card-title">
                      <a href="#">Foz do iguaçu</a>
                    </h3>

                    <data class="year" value="2020">2020</data>
                  </div>

                  <ul class="card-list">

                    <li class="card-list-item">
                      <ion-icon name="people-outline"></ion-icon>

                      <span class="card-item-text">4 pessoas</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="locate-outline"></ion-icon>

                      <span class="card-item-text">Paraná</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="time-outline"></ion-icon>

                      <span class="card-item-text">4D/3N</span>
                    </li>

                  </ul>

                  <div class="card-price-wrapper">

                    <p class="card-price">
                      <strong>R$400</strong> / por pessoa
                    </p>

                    <button class="btn fav-btn" aria-label="Add to favourite list">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                    <button class="btn">Carrinho</button>

                  </div>

                </div>

              </div>
            </li>

            <li>
              <div class="featured-car-card">

                <figure class="card-banner">
                  <img src="capitolio.jpg" alt="Cadillac Escalade 2020" loading="lazy" width="440"
                    height="300" class="w-100">
                </figure>

                <div class="card-content">

                  <div class="card-title-wrapper">
                    <h3 class="h3 card-title">
                      <a href="#">Capitólio</a>
                    </h3>

                    <data class="year" value="2020">2020</data>
                  </div>

                  <ul class="card-list">

                    <li class="card-list-item">
                      <ion-icon name="people-outline"></ion-icon>

                      <span class="card-item-text">4 pessoas</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="locate-outline"></ion-icon>

                      <span class="card-item-text">Minas Gerais</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="time-outline"></ion-icon>

                      <span class="card-item-text">4D/3N</span>
                    </li>

                  </ul>

                  <div class="card-price-wrapper">

                    <p class="card-price">
                      <strong>R$620</strong> / por pessoa
                    </p>

                    <button class="btn fav-btn" aria-label="Add to favourite list">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                    <button class="btn">Carrinho</button>

                  </div>

                </div>

              </div>
            </li>

            <li>
              <div class="featured-car-card">

                <figure class="card-banner">
                  <img src="raul.jpg" alt="BMW 4 Series GTI 2021" loading="lazy" width="440"
                    height="300" class="w-100">
                </figure>

                <div class="card-content">

                  <div class="card-title-wrapper">
                    <h3 class="h3 card-title">
                      <a href="#">Raul Soares</a>
                    </h3>

                    <data class="year" value="2021">2021</data>
                  </div>

                  <ul class="card-list">

                    <li class="card-list-item">
                      <ion-icon name="people-outline"></ion-icon>

                      <span class="card-item-text">4 pessoas</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="locate-outline"></ion-icon>

                      <span class="card-item-text">Minas Gerais</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="time-outline"></ion-icon>

                      <span class="card-item-text">4D/3N</span>
                    </li>

                  </ul>

                  <div class="card-price-wrapper">

                    <p class="card-price">
                      <strong>R$530</strong> / por pessoa
                    </p>

                    <button class="btn fav-btn" aria-label="Add to favourite list">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                    <button class="btn">Carrinho</button>

                  </div>

                </div>

              </div>
            </li>

            <li>
              <div class="featured-car-card">

                <figure class="card-banner">
                  <img src="sp.jpg" alt="BMW 4 Series 2019" loading="lazy" width="440" height="300"
                    class="w-100">
                </figure>

                <div class="card-content">

                  <div class="card-title-wrapper">
                    <h3 class="h3 card-title">
                      <a href="#">São Paulo</a>
                    </h3>

                    <data class="year" value="2019">2019</data>
                  </div>

                  <ul class="card-list">

                    <li class="card-list-item">
                      <ion-icon name="people-outline"></ion-icon>

                      <span class="card-item-text">4 pessoas</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="locate-outline"></ion-icon>

                      <span class="card-item-text">São Paulo</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="time-outline"></ion-icon>

                      <span class="card-item-text">4D/3N</span>
                    </li>

                  </ul>

                  <div class="card-price-wrapper">

                    <p class="card-price">
                      <strong>R$490</strong> / por pessoa
                    </p>

                    <button class="btn fav-btn" aria-label="Add to favourite list">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                    <button class="btn">Carrinho</button>

                  </div>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>




      <!-- 
        - #comp
      -->

      <section class="section blog" id="comp">
        <div class="container">

          <h2 class="h2 section-title">Avaliações de companhias aéreas</h2>

          <ul class="blog-list has-scrollbar">

            <li>
              <div class="blog-card">

                <figure class="card-banner">

                  <a href="#">
                    <img src="azul-brazilian-airlines.jpg" alt="Opening of new offices of the company" loading="lazy"
                      class="w-100">
                  </a>

                  <a href="#" class="btn card-badge">Companhia</a>

                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">
                    <a href="https://www.voeazul.com.br/br/pt/home">AZUL</a>
                  </h3>

                  <div class="card-meta">

                    <div class="publish-date">
                      <ion-icon name="STAR-outline"></ion-icon>

                      <time datetime="2022-01-14">17.564 avaliações</time>
                    </div>

                    <div class="comments">
                      <ion-icon name="chatbubble-ellipses-outline"></ion-icon>

                      <data value="114">114</data>
                    </div>

                  </div>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner">

                  <a href="#">
                    <img src="gol.jpg" alt="What cars are most vulnerable" loading="lazy"
                      class="w-100">
                  </a>

                  <a href="#" class="btn card-badge">Companhia</a>

                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">
                    <a href="https://www.voegol.com.br/?gclid=Cj0KCQiA1NebBhDDARIsAANiDD0BhFfFHxwqLekEpgHnLqbQOnflSANYRYYXV5k5Jbj8zMroo6qf4XcaAs9UEALw_wcB&gclsrc=aw.ds">GOL</a>
                  </h3>

                  <div class="card-meta">

                    <div class="publish-date">
                      <ion-icon name="STAR-outline"></ion-icon>

                      <time datetime="2022-01-14">17.254 avaliações</time>
                    </div>

                    <div class="comments">
                      <ion-icon name="chatbubble-ellipses-outline"></ion-icon>

                      <data value="114">114</data>
                    </div>

                  </div>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner">

                  <a href="#">
                    <img src="_GenericHero_1168x606.jpg" alt="Statistics showed which average age" loading="lazy"
                      class="w-100">
                  </a>

                  <a href="#" class="btn card-badge">Companhia</a>

                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">
                    <a href="https://www.latamairlines.com/br/pt/destinos?gclid=Cj0KCQiA1NebBhDDARIsAANiDD0z6WmEkaiWQURli4Jqg1KnXvtrb5aM1JZC7WYbBTlTSEipXPxa4UgaApZFEALw_wcB&gclsrc=aw.ds">LATAM</a>
                  </h3>

                  <div class="card-meta">

                    <div class="publish-date">
                      <ion-icon name="STAR-outline"></ion-icon>

                      <time datetime="2022-01-14">40.458 avaliações</time>
                    </div>

                    <div class="comments">
                      <ion-icon name="chatbubble-ellipses-outline"></ion-icon>

                      <data value="114">114</data>
                    </div>

                  </div>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner">

                  <a href="#">
                    <img src="avianca.jpg" alt="What´s required when renting a car?" loading="lazy"
                      class="w-100">
                  </a>

                  <a href="#" class="btn card-badge">Companhia</a>

                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">
                    <a href="https://www.avianca.com/br/pt/?gclid=Cj0KCQiA1NebBhDDARIsAANiDD0yATRfg0EClHc_1nTSMJ8giXc-kIHobBq3p3EpCQyhZoyZhvBMRe8aAlDvEALw_wcB">AVIANCA</a>
                  </h3>

                  <div class="card-meta">

                    <div class="publish-date">
                      <ion-icon name="STAR-outline"></ion-icon>

                      <time datetime="2022-01-14">19.545 avaliações</time>
                    </div>

                    <div class="comments">
                      <ion-icon name="chatbubble-ellipses-outline"></ion-icon>

                      <data value="114">114</data>
                    </div>

                  </div>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer">
    <div class="container">

      <div class="footer-top">

        <div class="footer-brand">
          <a href="#" class="logo">
            <img src="logo1 - Copia.png" alt="Ridex logo">
          </a>

          <p class="footer-text">
            A UAI-Fly possui os melhores valores de passagens aéreas e pacotes de viagem de mercado, sempre prezando pela qualidade e confiabilidade.
          </p>
        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Entre em contato</p>
          </li>

          <li>
            <a href="#" class="footer-link">Sinta-se a vontade de falar conosco !!</a>
          </li>
          <ul>

            <li class="contact-item">

              <a href="tel:" class="contact-link">+55 (31) ********</a>
            </li>

            <li class="contact-item">

              <a href="mailto:info.tourly.com" class="contact-link">info.uaifly.com</a>
            </li>

            <li class="contact-item">
              <address>Belo Horizonte, MG</address>
            </li>

          </ul>

        </ul>

  

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Integrantes</p>
          </li>

          <li>
            <a href="#" class="footer-link">Beatriz de Oliveira Silveira</a>
          </li>

          <li>
            <a href="#" class="footer-link">Henrique Diniz </a>
          </li>

          <li>
            <a href="#" class="footer-link">Maria Eduarda Chrispim</a>
          </li>

          <li>
            <a href="#" class="footer-link">Matheus Pereira</a>
          </li>

          <li>
            <a href="#" class="footer-link">Pedro Afonso Campos</a>
          </li>

          <li>
            <a href="#" class="footer-link">Vitor Fernandes</a>
          </li>

        </ul>

      </div>

      <div class="footer-bottom">

        <ul class="social-list">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-skype"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="mail-outline"></ion-icon>
            </a>
          </li>

        </ul>

        <p class="copyright">
          &copy; 2022 <a href="#">UAI-Fly</a>. All Rights Reserved
        </p>

      </div>

    </div>
  </footer>





  <!-- 
    - custom js link
  -->
  <script src="./assets/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
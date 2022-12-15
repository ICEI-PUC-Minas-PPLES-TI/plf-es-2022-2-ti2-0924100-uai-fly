<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Avaliação</title>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="estilo.css">
	</head>
	<body>
		<h1>Avalie</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg']."<br><br>";
			unset($_SESSION['msg']);
		}
		?>
		<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="avaliacao.css">
    <title>Formulário de avaliação dos serviços</title>
</head>

<!--FUNDO/DIVISÃO DE TELA/TÍTULO-->

<body> 
    <div class="container"> 
        <div class="form-image">
            <img src="img/undraw_social_update_re_xhjr.svg" alt="">
        </div>
        <div class="form"> 
            <form action="#"> 
                <div class="form-header">
                    <div class="title">
                        <h1>Avalie nossos serviços</h1>
                    </div>
                </div>

                <h5>Considere 1 como o pior e 5 como o melhor!</h5>
                <br/> </p>

                <!--INÍCIO PERGUNTAS DE MÚLTIPLA ESCOLHA-->

                <!--QUALIDADE-->

                <div class="qualidade-inputs"> 
                    <div class="qualidade-title">
                        <h6>Como você avaliaria a qualidade do serviço?</h6>
                    </div>

                    <form method="POST" action="processa.php" enctype="multipart/form-data">
			<div class="estrelas">
				<input type="radio" id="vazio" name="estrela" value="" checked>
				
				<label for="estrela_um"><i class="fa"></i></label>
				<input type="radio" id="estrela_um" name="estrela" value="1">
				
				<label for="estrela_dois"><i class="fa"></i></label>
				<input type="radio" id="estrela_dois" name="estrela" value="2">
				
				<label for="estrela_tres"><i class="fa"></i></label>
				<input type="radio" id="estrela_tres" name="estrela" value="3">
				
				<label for="estrela_quatro"><i class="fa"></i></label>
				<input type="radio" id="estrela_quatro" name="estrela" value="4">
				
				<label for="estrela_cinco"><i class="fa"></i></label>
				<input type="radio" id="estrela_cinco" name="estrela" value="5"><br><br>
				
				<input type="submit" value="Cadastrar">
				
			</div>
		</form>

                <!--FACILIDADE-->

                <div class="facilidade-inputs"> 
                    <div class="-title">
                        <h6>Foi fácil usar o site?</h6>
                    </div>

                    <form method="POST" action="processa.php" enctype="multipart/form-data">
			<div class="estrelas">
				<input type="radio" id="vazio" name="estrela" value="" checked>
				
				<label for="estrela_um"><i class="fa"></i></label>
				<input type="radio" id="estrela_um" name="estrela" value="1">
				
				<label for="estrela_dois"><i class="fa"></i></label>
				<input type="radio" id="estrela_dois" name="estrela" value="2">
				
				<label for="estrela_tres"><i class="fa"></i></label>
				<input type="radio" id="estrela_tres" name="estrela" value="3">
				
				<label for="estrela_quatro"><i class="fa"></i></label>
				<input type="radio" id="estrela_quatro" name="estrela" value="4">
				
				<label for="estrela_cinco"><i class="fa"></i></label>
				<input type="radio" id="estrela_cinco" name="estrela" value="5"><br><br>
				
				<input type="submit" value="Cadastrar">
				
			</div>
		</form>
                <!--PROBABILIDADE DE INDICAR-->

                <div class="probindicar-inputs"> 
                    <div class="-title">
                        <h6>Qual é a probabilidade de você indicar nossos serviços?</h6>
                    </div>

                    <form method="POST" action="processa.php" enctype="multipart/form-data">
			<div class="estrelas">
				<input type="radio" id="vazio" name="estrela" value="" checked>
				
				<label for="estrela_um"><i class="fa"></i></label>
				<input type="radio" id="estrela_um" name="estrela" value="1">
				
				<label for="estrela_dois"><i class="fa"></i></label>
				<input type="radio" id="estrela_dois" name="estrela" value="2">
				
				<label for="estrela_tres"><i class="fa"></i></label>
				<input type="radio" id="estrela_tres" name="estrela" value="3">
				
				<label for="estrela_quatro"><i class="fa"></i></label>
				<input type="radio" id="estrela_quatro" name="estrela" value="4">
				
				<label for="estrela_cinco"><i class="fa"></i></label>
				<input type="radio" id="estrela_cinco" name="estrela" value="5"><br><br>
				
				<input type="submit" value="Cadastrar">
				
			</div>
		</form>
                <!--PROBABILIDADE DE COMPRAR-->

                <div class="probcomprar-inputs"> 
                    <div class="-title">
                        <h6>Qual é a probabilidade de você comprar com a Uai-Fly novamente?</h6>
                    </div>

                    <form method="POST" action="processa.php" enctype="multipart/form-data">
			<div class="estrelas">
				<input type="radio" id="vazio" name="estrela" value="" checked>
				
				<label for="estrela_um"><i class="fa"></i></label>
				<input type="radio" id="estrela_um" name="estrela" value="1">
				
				<label for="estrela_dois"><i class="fa"></i></label>
				<input type="radio" id="estrela_dois" name="estrela" value="2">
				
				<label for="estrela_tres"><i class="fa"></i></label>
				<input type="radio" id="estrela_tres" name="estrela" value="3">
				
				<label for="estrela_quatro"><i class="fa"></i></label>
				<input type="radio" id="estrela_quatro" name="estrela" value="4">
				
				<label for="estrela_cinco"><i class="fa"></i></label>
				<input type="radio" id="estrela_cinco" name="estrela" value="5"><br><br>
				
				<input type="submit" value="Cadastrar">
				
			</div>
		</form>
                <!--FIM PERGUNTAS DE MÚLTIPLA ESCOLHA-->

                <!--SUGESTÃO/COMENTÁRIO-->

                <div class="input-group">
                    <div class="input-box">
                        <label for="sugestao">O que tornaria este serviço melhor?</label>
                        <input id="sugestao" type="text" name="sugestao" placeholder="Adicionar sugestão">
                    </div>
                </div>

                <!--BOTÃO DE ENVIAR-->

                <div class="enviar-button"> <!--Enviar é continue-->
                    <button><a href="fimformulario.html">Enviar</a> </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
		
	</body>
</html>
<?php 
session_start();
print_r($_SESSION);
include("config.php");
$consulta = "SELECT * FROM cliente";
$con = $conexao->query($consulta) or die($mysqli->error);// caminho do seu arquivo de conexão ao banco de dados $consulta = "SELECT * FROM usuario"; $con = $mysqli->query($consulta) or die($mysqli->error); 
?> 

<!DOCTYPE html> 
  <html> 
    <head> 
      <meta charset="UTF-8"> 
      <title>Tutorial</title> 
    </head> 
    <body> 
      <table border="1"> 
        <tr> 
          <td>Código</td> 
          <td>Nome</td> 
          <td>E-mail</td> 
          <td>Data de Cadastro</td> 
          <td>Ação</td> 
        </tr> 
        <?php while($dado = $con->fetch_array()) { ?> 
        <tr> 
          <td><?php echo $dado['cpf']; ?></td>
          <td><?php echo $dado['nome']; ?></td> 
          <td><?php echo $dado['email']; ?></td> 
          <td> 
          </td> 
        </tr> 
        <?php } ?> 
      </table> 
    </body> 
</html>

          
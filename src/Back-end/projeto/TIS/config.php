<?php 

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = 'hsd161203';
    $dbName = 'uaifly';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    $result = mysqli_query($conexao, "INSERT INTO cliente(nome) VALUES ('robert')");

     if ($conexao->connect_errno)
     {
         echo "Erro";
     }
     else
     {
         echo "Conexão efetuada com sucesso";
     }

?>
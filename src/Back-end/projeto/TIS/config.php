<?php 

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = 'hsd161203';
    $dbName = 'banco_uaifly';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);


     if ($conexao->connect_errno)
     {
         echo "Erro";
     }
?>
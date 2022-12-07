<?php

    if(isset($_POST['submit']))
    {
        include_once('config.php');

        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $cpf = $_POST['cpf'];

        $result = mysqli_query($conexao, "INSERT INTO cliente(cpf,nome,telefone,email,senha) VALUES('$cpf','$nome','$telefone','$email','$senha')");

        /*printf("Errormessage: %s\n", $conexao->error);*/
    } 
?>
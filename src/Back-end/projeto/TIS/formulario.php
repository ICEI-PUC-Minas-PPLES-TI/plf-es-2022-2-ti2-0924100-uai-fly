<?php

    if(isset($_POST['submit']))
    {
        include_once('config.php');

        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $result = mysqli_query($conexao, "INSERT INTO cliente(nome,telefone,email,senha) VALUES('$nome','$telefone','$email','$senha')");

        print_r($nome);
        print_r('<br>');
        print_r($telefone);
        print_r('<br>');
        print_r($email);
        print_r('<br>');
        print_r($senha);
    } 
    else{
        print_r("kkkkkkkk");
    }
?>
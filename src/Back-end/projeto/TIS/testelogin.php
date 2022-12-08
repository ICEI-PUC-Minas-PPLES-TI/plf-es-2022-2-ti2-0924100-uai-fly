<?php
    session_start();

    //print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM cliente WHERE email = '$email' and senha = '$senha'";
        $result = $conexao->query($sql);

        $consulta = "SELECT cpf FROM cliente WHERE email = '$email' and senha = '$senha'";
        $con = $conexao->query($consulta) or die($mysqli->error);
        $dado = $con->fetch_array();             
        $cpf = $dado['cpf'];

        //print_r($sql);
        //print_r('  ///  ');
        //print_r($result);

        if(mysqli_num_rows($result) < 1){
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: login.php');
        }

        else{
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            $_SESSION['cpf'] = $cpf;
            header('Location: telacomp.php');
        }
    }

    else{

        header('Location: login.php');
    }

?>
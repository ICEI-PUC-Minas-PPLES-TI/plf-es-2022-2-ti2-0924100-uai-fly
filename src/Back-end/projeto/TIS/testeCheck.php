<?php
    session_start();

    //print_r($_REQUEST);

    $a ='a';

    if($a ='a'){
        include_once('config.php');
        $companhia = $_POST['companhia'];
        $chegada = $_POST['chegada'];
        $partida = $_SESSION['cidade_partida'];
        $cpf = $_SESSION['cpf'];

        $sql = "SELECT * FROM voo WHERE cpf = '$cpf' and local_partida = '$partida' and local_chegada = '$chegada' and companhia_aerea = '$companhia'";
        $result = $conexao->query($sql);

        //print_r($sql);
        //print_r('  ///  ');
        //print_r($result);

        if(mysqli_num_rows($result) < 1){
            header('Location: Check.php');
        }

        else{
            header('Location: msg2.html');
        }
    }

    else{

       header('Location: telacomp.php');
    }
?>
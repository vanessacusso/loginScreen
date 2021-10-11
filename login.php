<?php
    session_start(); // iniciar a sessão
    include "config.php";

    $login = isset ($_POST['login']) ? $_POST['login'] : "Login não válido";
    $senha = isset ($_POST ['senha']) ? $_POST ['senha'] : "Senha não válida";
    $senha = md5($senha);
    
    $result = $con->query("SELECT * FROM `usuario` WHERE `NAME` = '$login' and `PASSWORD` = '$senha'");
 
    if ($result->num_rows > 0 ){

        $_SESSION['login'] = $login;
        $_SESSION['senha'] = $senha;
        header('location: home.php');

    }else {
        unset($_SESSION['login']);
        unset($_SESSION['senha']);
        header('location: index.php?error=true');
    }
?>
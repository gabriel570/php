<?php
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $usuarioSis = "admin";
    $senhaSis = "admin";
    if (($usuario == $usuarioSis) && ($senha == $senhaSis)){
        session_start();
        $_SESSION['login'] = $usuario;
        $_SESSION['senha'] = $senha;
        header ('location:../aluno/index.php');
    }else{
        header ('location:../index.php');
    }
?>  
<?php
    session_start();
    if ($_SESSION['login'] == null){
        header ('location:../index.php');
    }else{
        echo "Bem vindo " . $_SESSION['login'] ;
    }

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <a href="../controle/sair.php">Sair</a>
        
    </body>
</html>
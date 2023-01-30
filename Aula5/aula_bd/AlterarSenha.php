<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php include('menu/menu.html'); ?>

    <?php
        $codigo = $_GET['cod'];
        require('connect.php');
        $usuarios = mysqli_query($con, "SELECT * from `tb_usuarios` WHERE `codigo` = '$codigo' ");
        $usuario = mysqli_fetch_array($usuarios);
    ?>
    
</body>
</html>
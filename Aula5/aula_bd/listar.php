<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
    <link rel="stylesheet" href="estilo.css">

</head>
<body>
<?php include('menu/menu.html'); ?>

    <div class="container">
        <?php
            include('connect.php');
            $usuarios = mysqli_query($con, "SELECT * from `tb_usuarios` ORDER BY `codigo` ASC");
            while($usuario = mysqli_fetch_array($usuarios)){
                echo "<div>
                        <img src=$usuario[foto]>
                        <p>$usuario[codigo] - $usuario[nome] </p>
                        <p>$usuario[estadoCivil]</p>
                        <p>$usuario[esportes]</p>
                        <p>$usuario[email]</p>
                        <p><a href=alterar.php?cod=$usuario[codigo]>Alterar</a></p>
                    </div>";
            }
        ?>

    </div>
</body>
</html>
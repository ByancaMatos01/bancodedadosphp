<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="menu/estilo.css">
</head>
<body>
<?php include('menu/menu.html'); ?>
    <div class="container">
        <?php
         include('connect.php');
         $usuarios= mysqli_query($con,"SELECT * from tb_usuarios");
         
         while($usuario=mysqli_fetch_array($usuarios)){
         echo "<div>
         <img src=[foto]>
         <p>$usuario[codigo] -$usuario[nome]</p>
         <p>$usuario[estadoCivil]</p>
         <p>$usuario[esportes]</p>
         <p>$usuario[email]</p>
         </div>";
         }
        ?>
        <div>
             <img src="Fotos/zendaya.jpg" alt="">
              <p> Código-Nome</p>
              <p> Estado Civil</p>
              <p>Futebol- volêi- Basquete- Futebol Americano</p>
               <p>Email</p>
        </div>

    </div>
    <script src="app.js"></script>
</body>
</html>
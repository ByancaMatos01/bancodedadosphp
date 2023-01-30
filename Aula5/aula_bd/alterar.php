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
        $est = $usuario['estadoCivil'];
    ?>
<p> <a href="AlterarSenha.phpcod=<?php echo $codigo;">Alterar senha</a> </p>

<form action="incluir.act.php" method="post" enctype="multipart/form-data">
        <p>Nome: <input type="text" name="nome" value="<?php echo $usuario['nome']; ?>"></p>
        <p>Estado Civil</p>

        <p><input type="radio" name="estadoCivil" value="solteiro"
        <?php echo $est == 'solteiro' ? "checked":""; ?> >Solteiro</p>
        <p><input type="radio" name="estadoCivil" value="casado" 
        <?php echo $est == 'casado' ? "checked":""; ?>>Casado</p>
        <p><input type="radio" name="estadoCivil" value="divorciado"
        <?php echo $est == 'divorciado' ? "checked":""; ?>>Divorciado</p>
        <p><input type="radio" name="estadoCivil" value="viuvo"
        <?php echo $est == 'viuvo' ? "checked":""; ?>>Viúvo</p>
        <p>Esportes</p>
        <?php 
        $esportes = explode(" ",  $usuario['esportes']);
        ?>
        <p><input type="checkbox" name="esportes[]" value="Futebol"
        <?php echo in_array('Futebol', $esportes) ? "checked" : "" ?>>Futebol</p>
        <p><input type="checkbox" name="esportes[]" value="Basquete"
        <?php echo in_array('Basquete', $esportes) ? "checked" : "" ?>>Basquete</p>
        <p><input type="checkbox" name="esportes[]" value="Volei"
        <?php echo in_array('Volei', $esportes) ? "checked" : "" ?>>Vôlei</p>
        <p><input type="checkbox" name="esportes[]" value="futAm"
        <?php echo in_array('futAm', $esportes) ? "checked" : "" ?>>Futebol Americano</p>
        
        <p><input type="file" name="foto" id=""></p>  <?php echo "<img class='foto' src=$usuario[foto]>"?>
        <p>Email: <input type="text" name="email" id="" value="<?php echo $usuario['email']; ?>"></p>
        <p>Senha: <input type="password" name="senha" id=""></p>

        <p><input type="submit" value="Enviar"></p>
    </form>   
</body>
</html>
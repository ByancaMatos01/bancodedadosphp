<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar</title>
</head>
<body>
<?php include('menu/menu.html'); ?>

    <?php
        $codigo = $_GET['cod'];
        require('connect.php');
        $usuarios = mysqli_query($con, "SELECT * from `tb_usuarios` WHERE `codigo` = '$codigo' ");
        $usuario = mysqli_fetch_array($usuarios);
        
    ?>

<div class="container">
    <p> 
        <a href="alterarsenha.php?cod=<?php echo $codigo; ?>">alterar senha</a>
</p>
        <form action="alterar.act.php" method="post" enctype="multipart/form-data">
        <p>Nome: <input type="text" name="nome" value="<?php echo $usuario['nome']; ?>"></p>
        <p> Email <?php echo $usuario['email']; ?></p>
        <input type="hidden" name="codigo" value="<?php echo $codigo;?>">
        <p>Estado Civil</p>
        <p><input type="radio" name="estadoCivil" value="solteiro" 
        <?php if($usuario['estadoCivil']=="solteiro"){echo"checked";}?>>Solteiro</p>

        <p><input type="radio" name="estadoCivil" value="casado"
        <?php echo $usuario['estadoCivil']=="casado" ? "checked": "";?>>Casado</p>

        <p><input type="radio" name="estadoCivil" value="divorciado"
        <?php echo $usuario['estadoCivil']=="divorciado" ? "checked":"";?>>Divorciado</p>

        <p><input type="radio" name="estadoCivil" value="viuvo"
        <?php echo $usuario['estadoCivil']=="viuvo" ? "checked":"";?>>Viúvo</p>

        <p>Esportes</p>
        <?php
        $esportes= explode (" ", $usuario ['esportes']);
        ?>

        <p><input type="checkbox" name="esportes[]" value="Futebol"
        <?php echo in_array('Futebol', $esportes)? "checked": "";?>
        >Futebol</p>

        <p><input type="checkbox" name="esportes[]" value="Basquete"
        <?php echo in_array('Basquete', $esportes)? "checked": "";?>
        >Basquete</p>
        <p><input type="checkbox" name="esportes[]" value="Volei"
        <?php echo in_array('Volei', $esportes)? "checked": "";?>
        >Vôlei</p>
        <p><input type="checkbox" name="esportes[]" value="futAm"
        <?php echo in_array('futAm', $esportes)? "checked": "";?>
        >Futebol Americano</p>
        
        <p><input type="file" name="foto" id=""></p>
        <input type="hidden"name="diretorio" value="<?php echo $usuario['Foto'];?>">
        <p><input type="submit" value="Alterar"></p>
    </form>   
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AlterarEmail</title>
    <link rel="stylesheet" href="imagem.css">
<script>
    function verificaEmail(email1,email2) {
        if(email1 != email2){
            alert("Os emails não conferem!");
            return false;
        }else{
            return true;
        }   
    }
</script>

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

<form action="alterarEmail.act.php" method="post" onsubmit="return verificaEmail(novoEmail1.value,
novoEmail2.value)">
<input type="hidden" name="codigo" value="<?php echo $codigo; ?>">      
    <p>Nome: <?php echo $usuario['nome']; ?> </p>
    <p>Email atual: <?php echo $usuario['email']; ?> </p>
        <p>
            Novo Email: <input type="text" name="novoEmail1" id="">            
        </p>
        <p>
            Confirme: <input type="text" name="novoEmail2" id="">
        </p>
        <p>
            Senha atual: <input type="password" name="senhaAtual" id="">
        </p>
<p>
    <input type="submit" value="Alterar">
</p>
</form>

</div>  
</body>
</html>
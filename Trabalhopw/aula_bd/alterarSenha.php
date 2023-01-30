<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar</title>
    <link rel="stylesheet" href="imagem.css">
<script>
    function verificaSenhas(senha1,senha2) {
        if(senha1 != senha2){
            alert("As senhas não conferem");
            return false;
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

<form action="alterarSenha.act.php" method="post" onsubmit="return verificaSenhas(novaSenha1.value,
novaSenha2.value)">
<input type="hidden" name="codigo" value="<?php echo $codigo; ?>">      
        <p>
            Senha atual: <input type="password" name="senhaAtual" id="">
        </p>
        <p>
            Nova senha: <input type="password" name="novaSenha1" id="">            
        </p>
        <p>
            Confirme: <input type="password" name="novaSenha2" id="">
        </p>
<p>
    <input type="submit" value="Alterar">
</p>
</form>

</div>  
</body>
</html>
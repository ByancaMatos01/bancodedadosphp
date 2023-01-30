<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bingo</title>
</head>
<body>
    <form method="post">
        <input type="submit" value="Sortear" name="bt-sortear">
        <input tyoe="submit" value="Limpar" name="bt-limpar">
    </form>
    <?php
        session_start();
        // inicio o vetor para armazenar os números apenas se ele não existe
        if(isset($_SESSION['bt-sortear'])){
            $_SESSION['numeros']=array();
        }
        // inicio o vetor para armazenar a limpeza 
        if(isset($_POST['bt-limpar'])){
        $_SESSION['numeros']=array();
        }

        if(isset($_POST['bt-sortear'])){
    $ultimoSorteado=rand(1,75);
    echo"Ultimo numero sorteado $ultimoSorteado";
    $tamanho= sizeof($_SESSION['numeros']);
    $_SESSION['numeros'][$tamanho]=$ultimoSorteado;
        }
        var_dump($_SESSION['numeros']);
    ?>
</body>
</html>
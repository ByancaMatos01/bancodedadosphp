<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incluir</title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="menu/estilo.css">
</head>
<body>
    <?php include('menu/menu.html'); ?>
<form action="incluir.act.php" method="post" enctype="multipart/form-data">
        <div class= "principal">
        <p> Formúlario<p>
        <p>Nome: <input type="text" name="nome" id=""></p>
        <p>Estado Civil</p>
        <p><input type="radio" name="estadoCivil" value="solteiro">Solteiro</p>
        <p><input type="radio" name="estadoCivil" value="casado">Casado</p>
        <p><input type="radio" name="estadoCivil" value="divorciado">Divorciado</p>
        <p><input type="radio" name="estadoCivil" value="viuvo">Viúvo</p>
        <p>Esportes</p>
        <p><input type="checkbox" name="esportes[]" value="Futebol">Futebol</p>
        <p><input type="checkbox" name="esportes[]" value="Basquete">Basquete</p>
        <p><input type="checkbox" name="esportes[]" value="Volei">Vôlei</p>
        <p><input type="checkbox" name="esportes[]" value="futAm">Futebol Americano</p>
        
        <p><input type="file" name="foto" id=""></p>

        <p>Email: <input type="text" name="email" id=""></p>
        <p>Senha: <input type="password" name="senha" id=""></p>

        <p><input type="submit" value="Enviar"></p>
</div>

    </form>   

</body>
</html>


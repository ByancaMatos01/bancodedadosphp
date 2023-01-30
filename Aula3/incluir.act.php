<?php

    require('connect.php');

    //$nome = $_POST['nome'];
    extract($_POST);

    $senha = md5($senha);

    sort($esportes);

    $esportes = implode(" ",$esportes);
    
    $foto=$_FILES['foto'];
    $diretorio="Fotos/".md5(time()).".jpg";
   

    move_uploaded_file($foto['tmp_name'], $diretorio);
 
    mysqli_query($con, "INSERT INTO `tb_usuarios` 
            (`codigo`, `nome`, `estadoCivil`, `esportes`, `email`, `senha`,`foto`)
    VALUES (NULL, '$nome', '$estadoCivil', '$esportes', '$email', '$senha','$diretorio');");

header("location:incluir.php");

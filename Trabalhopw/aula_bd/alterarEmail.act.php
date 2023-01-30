<?php

require('connect.php');

extract($_POST);

$usuario = mysqli_query($con, "Select `senha` from `tb_usuarios` where `codigo` = '$codigo'");

$usuario = mysqli_fetch_assoc($usuario);

$senhaAtual = md5($senhaAtual);



if($senhaAtual === $usuario['senha']){
    //comparar os novos emails digitados
    if($novoEmail1 === $novoEmail2){
        //codigo para alterar o email e redirecionar
        mysqli_query ($con, "UPDATE `tb_usuarios` SET `email` = '$novoEmail1' WHERE 
        `tb_usuarios`.`codigo` = '$codigo';");

        header("location:listar.php");
    }

}else{
    //aviso de email incorreto e redirecionamento

}
<?php

require('connect.php');

extract($_POST);

$usuario = mysqli_query($con, "Select `senha` from `tb_usuarios` where `codigo` = '$codigo'");

$usuario = mysqli_fetch_assoc($usuario);

$senhaAtual = md5($senhaAtual);
$novaSenha1 = md5($novaSenha1);
$novaSenha2 = md5($novaSenha2);


if($senhaAtual === $usuario['senha']){
    //comparar as novas senhas digitadas
    if($novaSenha1 === $novaSenha2){
        //codigo para alterar a senha e redirecionar
        mysqli_query ($con, "UPDATE `tb_usuarios` SET `senha` = '$novaSenha1' WHERE 
        `tb_usuarios`.`codigo` = '$codigo';");

        header("location:listar.php");
    }

}else{
    //aviso de senha incorreta e redirecionamento
session_start();
$_session['erroMsg']="Senha atual incorreta!"
echo"<script windows.history.back();</script>";

}
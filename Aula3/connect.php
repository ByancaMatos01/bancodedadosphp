<?php

if(@!$con = mysqli_connect('localhost','root','','usuarios')){
    echo"Erro ao se conectar com banco de dados";
}
mysqli_query($con,"SET NAMES utf8");
?>

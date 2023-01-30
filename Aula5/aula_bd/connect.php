<?php

if(!$con = mysqli_connect('localhost','root','','usuarios')){
    echo "Erro ao se conectar com a base de dados";
}
mysqli_query($con,"SET NAMES utf8");
?>
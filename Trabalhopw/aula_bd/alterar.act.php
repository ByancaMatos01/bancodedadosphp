<?php
   require('connect.php');
    //$nome = $_POST['nome'];
    
    extract($_POST);
    extract($_FILES);
    if(isset($esportes)){
      sort($esportes);
      $esportes = implode(" ",$esportes);
    }else{
      $esportes = "";
    }
  /*
    $foto = $_FILES['foto'];
    var_dump($foto);

    $diretorio = "images/" . md5(time()) . ".jpg";

    move_uploaded_file($foto['tmp_name'],$diretorio);
*/
$tamanho=$foto['size'];
if($tamanho>0){
    move_uploaded_file($foto['tmp_name'],$diretorio);
}

    mysqli_query($con, "UPDATE `tb_usuarios` SET `nome` = '$nome', `estadoCivil` = '$estadoCivil', 
    `esportes` = '$esportes' WHERE `tb_usuarios`.`codigo` = $codigo;");

header("location:listar.php");

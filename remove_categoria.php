<?php include("cabecalho.php"); ?>
<?php include("bd.php"); ?>
<?php include("categoria_bd.php"); ?>
<?php

$id = $_GET["id"];


  if(apagaCategoria($conexao, $id)){
    header("location: Cadastro_categoria.php?removeu=true");
}   else{
    header("location: Cadastro_categoria.php?removeu=false");

 }

 ?>
<?php include("rodape.php"); ?>

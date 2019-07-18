
<?php include("cabecalho.php"); ?>
<?php include("bd.php") ?>
<?php include("categoria_bd.php") ?>
<?php

$nome = $_POST["nome"];
$descricao = $_POST["descricao"];


  if(insereCategoria($conexao, $nome, $descricao)){
  header ("location: Cadastro_categoria.php?cadastrou=true&nome={$nome}&preco={$descricao}");
  } else {
  header ("location: Cadastro_categoria.php?cadastrou=false");

}
?>
<?php include("rodape.php"); ?>

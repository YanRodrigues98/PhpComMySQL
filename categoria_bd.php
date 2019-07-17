<?php

function listarcategoria($conexao){
    $categorias = array();
    $query = "SELECT * FROM CATEGORIA";
    $resultado = mysqli_query($conexao,$query);
    while($categoria = mysqli_fetch_assoc($resultado)){
      array_push($categorias, $categoria);
    }
    return $categorias;
}


function insereCategoria ($conexao, $nome, $descricao){
  $query = "insert into CATEGORIA (NOME,DESCRICAO) values ('{$nome}','{$descricao}')";
  $resultadoDaCategoria = mysqli_query($conexao, $query);
  return $resultadoDaCategoria;

}
?>

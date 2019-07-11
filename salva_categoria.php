
<?php include("cabecalho.php"); ?>
<?php include("bd.php") ?>
<?php
$nome = $_POST["nome"];
$descricao = $_POST["descricao"];

  $query = "insert into PRODUTO (NOME,PRECO) values ('{$nome}','{$descricao}')";

    if(mysqli_query($conexao, $query)){
      echo "<p class='alert-success'> A categoria $nome - $descricao, foi cadastrada</p>";
}   else{
echo "<p class='alert-success'>Ocorreu um erro ao cadastrar categoria.</p>";
}
?>
<?php include("rodape.php"); ?>

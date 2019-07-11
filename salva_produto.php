<?php include ("cabecalho.php"); ?>
<?php

  $nome = $_POST["nome"];
  $preco = $_POST["preco"];

    $query = "insert into PRODUTO (nome, preco) values ('{$nome}', {$preco})";

    $conexao - mysqli_connect ('localhost','root','','ecommerce');

    if (mysqli_query($conexao, $query)) {
        echo "<p class='alert-sucess'> O produto $nome, no valor $preco foi cadastrado!</p>";
    } else {
      echo "<p class='alert-danger'> Ocorreu um erro ao cadastrar o produto.</p>";
    }
?>
 <?php include("rodape.php"); ?>

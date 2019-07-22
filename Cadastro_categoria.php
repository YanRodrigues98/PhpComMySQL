
<?php include("cabecalho.php"); ?>
<?php include("bd.php"); ?>
<?php include("categoria_bd.php"); ?>
<?php

if(isset($_GET['removeu'])){
  $removeu = $_GET["removeu"];


if($removeu) {
  echo "<p class='text-success'> Categoria removida!</p>";
} else {
  echo "<p class='text-danger'> Ocorreu um problema ao remover a categoria</p>";
  }
}

if(isset($_GET['cadastrou'])){
  $cadastrou = $_GET["cadastrou"];
  $nomeCadastrado = $_GET['nome'];


  if($cadastrou) {
    echo "<p class='text-success'> A categoria $nomeCadastrado foi cadastrada com sucesso!</p>";
  } else {
    echo "<p class='text-danger'> Ocorreu um problema ao cadastarar a categoria</p>";
  }
}


?>

<form action="/salva_categoria.php" method="post">
  <table class="table">
    <tr>
      <td>nome:</td>
      <td><input type="text" name="nome"/></td>
    </tr>
  <tr>
    <td>descricao:</td>
  <td><input type="text" name="descricao"/></td>
  </tr>
    <tr>
    <td><input class="btn btn-primary"type="submit" value="Cadastrar"></td>
  </tr>
</table>
    </form>
    <?php include("listar_categoria.php"); ?>
    <?php include("rodape.php"); ?>

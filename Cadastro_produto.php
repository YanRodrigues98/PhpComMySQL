<?php include("cabecalho.php"); ?>

<?php
  if(isset($_GET['removeu'])){
    $removeu = $_GET["removeu"];


  if($removeu) {
    echo "<p class='text-success'> Produto removido!</p>";
  } else {
    echo "<p class='text-danger'> Ocorreu um problema ao remover o produto</p>";
  }
}

if(isset($_GET['cadastrou'])){
  $cadastrou = $_GET["cadastrou"];
  $nomeCadastrado = $_GET['nome'];
  $precoCadastrado = $_GET['preco'];

  if($cadastrou) {
    echo "<p class='text-success'> O produto $nomeCadastrado, no valor $precoCadastrado foi cadastrado com sucesso!</p>";
  } else {
    echo "<p class='text-danger'> Ocorreu um problema ao cadastar o produto</p>";
  }
}

 ?>

<form action="/salva_produto.php" method="post">
  <table class ="table">
    <tr>
      <td>nome:</td>
      <td><input type="text" name="nome"></td>
    </tr>
    <tr>
        <td>Preço:</td>
        <td><input type="number" name="preco"/></td>
      </tr>
    <tr>
      <td><input class="btn btn-primary"type="submit" value="Cadastrar"></td>
    </tr>
  </table>
</form>
<?php include("listar_produtos.php"); ?>
<?php include("rodape.php"); ?>

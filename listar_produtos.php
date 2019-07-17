<?php include("cabecalho.php"); ?>
<?php include("bd.php") ?>
<?php include("produto_bd.php"); ?>
<table class="table">
<?php
    $produtos = listaprodutos($conexao);
    foreach ($produtos as $produto) {
  ?>
  <tr>
    <td><?= $produto['nome']?></td>
    <td><?= $produto['preco']?></td>
  </tr>
  <?php
  }
?>
</table>
<?php include("rodape.php"); ?>

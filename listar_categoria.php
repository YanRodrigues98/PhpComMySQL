<?php include("cabecalho.php"); ?>
<?php include("bd.php"); ?>
<?php include("categoria_bd.php"); ?>
  <table class="table">
    <?php
    $categorias = listarcategoria($conexao);
    foreach ($categorias as $categoria) {
      ?>
      <tr>
        <td><?= $categoria['NOME']?></td>
        <td><?= $categoria['DESCRICAO']?></td>
          <td><a href="remove_categoria.php?id=<?= $categoria['ID'] ?>" class="text-danger">Remover</a></td>
      </tr>
      <?php
    }
    ?>
  </table>
<?php include("rodape.php"); ?>

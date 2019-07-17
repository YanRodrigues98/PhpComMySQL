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
      </tr>
      <?php
    }
    ?>
  </table>
<?php include("rodape.php"); ?>

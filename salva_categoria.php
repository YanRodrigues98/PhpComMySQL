
<?php include("cabecalho.php"); ?>
<?php
$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
if(mysqli_query($conexao, $query)){
echo "<p class='alert-success'> A categoria $nome - $descricao, foi cadastrada</p>";
}else{
echo "<p class='alert-success'>Ocorreu um erro ao cadastrar categoria.</p>";
}
?>
<?php include("rodape.php"); ?>

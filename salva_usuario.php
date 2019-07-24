<?php include("cabecalho.php"); ?>
<?php include("bd.php"); ?>
<?php include("usuario_bd.php"); ?>
<?php
  $email = $_POST["email"];
  $senha = $_POST["senha"];

    if(insereUsuario($conexao, $email, md5($senha))){
      header ("Location: cadastro_usuario.php?cadastrou=true&email={$email}");
    } else {
      echo mysqli_error($conexao);
      
    }
?>
<?php include("rodape.php"); ?>

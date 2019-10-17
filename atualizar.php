
<?php

$mat    = $_POST["mat"];
$nome   = $_POST["nome"];
$email  = $_POST["email"];
$tel    = $_POST["tel"];

include_once 'conexao.php';

$sql = "UPDATE aluno set nome='{$nome}', email='{$email}', tel='{$tel}' where mat='{$mat}'";

$msg = (mysqli_query($con, $sql)) ? "Atualizado com sucesso" : "Erro ao atualizar";

mysqli_close($con);

header("location:msg.php?msg=".$msg);

?>
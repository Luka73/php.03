
<?php

$nome         = $_POST["nome"];
$email        = $_POST["email"];
$tel  = $_POST["tel"];

include_once 'conexao.php';

$sql = "INSERT INTO aluno VALUES(null, '{$nome}', '{$email}','{$tel}')";

$msg = (mysqli_query($con, $sql)) ? "Gravado com sucesso" : "Erro ao gravar";

header("location:msg.php?msg=".$msg);

?>
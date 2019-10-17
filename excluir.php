<?php

if(isset($_GET["mat"]) && !empty($_GET["mat"])){
    $mat   = $_GET["mat"];

    include_once 'conexao.php';

    $sql = "DELETE FROM aluno WHERE mat=".$mat;

    $msg = (mysqli_query($con, $sql)) ? "Excluído com sucesso" : "Erro ao excluir";

    mysqli_close($con);
    
    header("location:msg.php?msg=".$msg);
}

?>
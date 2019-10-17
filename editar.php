<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <?php include 'imports.php'; ?>
    <title>Escola HogInacio</title>
</head>
<body>
    <?php 
        include 'header.php'; 
        $mat = $_GET["mat"];
        include 'conexao.php';
        $sql = "SELECT * FROM aluno WHERE mat=".$mat;
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result);
    ?>
    <div class="container">
       <h3>Edição de Alunos</h3>
       <hr>
        <form action="atualizar.php" method="post">
            <input type="hidden" readonly name="mat" value="<?php echo $row['mat'];?>">
            <label>Nome: </label>
            <input type="text" name="nome" class="form-control col-md-4" value="<?php echo $row['nome'];?>">
            <label>E-mail: </label>
            <input type="email" name="email" class="form-control col-md-4" value="<?php echo $row['email'];?>">
            <label>Telefone: </label>
            <input type="tel" name="tel" class="form-control col-md-4" value="<?php echo $row['tel'];?>"><br>
            <input type="submit" value="Atualizar" class="btn btn-success">
        </form><br>
        <a href="index.php">Página Inicial</a>
    </div>
</body>
</html>
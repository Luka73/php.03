<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <?php include 'imports.php'; ?>
    <title>Escola HogInacio</title>
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="container">
        <h3>Consulta de Alunos</h3>
        <hr>
        <form class="form-inline">
            <div class="form-group">
                <label  class="col-sm-2">Nome: </label>
                <input type="text" name="nome" class="form-control">
                <input type="submit" value="Buscar" class="btn btn-info ml-2">
            </div>
        </form>
        <hr>
        <?php
            if(isset($_GET["nome"])){
                $nome = $_GET["nome"];
                
                include_once 'conexao.php';
                
                $sql = "SELECT * FROM aluno WHERE nome
                LIKE '{$nome}%'";
                
                $result = mysqli_query($con, $sql); 
                
                $totalRegistros = mysqli_num_rows($result);
                
                if($totalRegistros > 0){?>
                    <table class="table table-hover">
                        <tr>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Telefone</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                        </tr>
                <?php
                   while($row = mysqli_fetch_array($result)){
                   echo "<tr>";
                   echo "<td>{$row['nome']}</td>";
                   echo "<td>{$row['email']}</td>";
                   echo "<td>{$row['tel']}</td>";
                   echo "<td><a href='editar.php?mat={$row[0]}'><i class='fas fa-user-edit'></i></a></td>";
                   echo "<td><i class='fas fa-trash-alt'></i></td>";
                   echo "</tr>";
                }     
                        ?>
                    </table>
                <?php
                }else{
                    echo "Nenhum registro encontrado!";
                }  
                mysqli_close($con);
            }           
        ?>
        <a href="index.php">Página Inicial</a>
    </div>
</body>
</html>
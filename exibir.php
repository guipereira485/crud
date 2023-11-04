<?php include 'conexao.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados inseridos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <table class="table table-striped my-5">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Celular</th>
                    <th>Senha</th>
                    <th>Operações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    $sql = "SELECT * FROM `crud`";
                    $resultado = mysqli_query($conexao, $sql);
                    if ($resultado) {
                        while ($linha = mysqli_fetch_assoc($resultado)) {
                            $id = $linha['id'];
                            $nome = $linha['nome'];
                            $email = $linha['email'];
                            $celular = $linha['celular'];
                            $senha = $linha['senha'];
                            echo '<tr>
                                <td>' . $id . '</td>
                                <td>' . $nome . '</td>
                                <td>' . $email . '</td>
                                <td>' . $celular . '</td>
                                <td>' . $senha . '</td>
                                <td>
                                <button class="btn btn-primary"><a href="atualizar.php?updateid='.$id.'" class="text-light text-decoration-none">Atualizar</a></button>
                                <button class="btn btn-danger"><a href="apagar.php?deleteid='.$id.'" class="text-light text-decoration-none">Apagar</a></button>
                                </td>
                            </tr>';
                        }
                    }
                    ?>
                </tr>
            </tbody>
        </table>
        <button type="button" class="btn btn-primary my-4 col-4 mx-auto d-block"><a href="usuario.php" class="text-light text-decoration-none">Novo cadastro</a></button>
    </div>
    
</body>

</html>
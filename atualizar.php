<?php
include 'conexao.php';
$id = $_GET['updateid'];
$sql = "SELECT * FROM `crud` WHERE id=$id";
$resultado = mysqli_query($conexao, $sql);
$linha = mysqli_fetch_assoc($resultado); 

$nome = $linha['nome'];
$email = $linha['email'];
$celular = $linha['celular'];
$senha = $linha['senha'];

if (isset($_POST['submit'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $senha = $_POST['senha'];

    $sql = "UPDATE `crud` SET id=$id, nome='$nome', email='$email', celular='$celular', senha='$senha' WHERE id=$id";

    $resultado = mysqli_query($conexao, $sql);
    if (!$resultado) {
        die(mysqli_error($conexao));
    }
}
?>




<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Atualizar dados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <h1 class="text-center p-3">Atualize os seus dados</h1>
    <div class="container">
        <form action="exibir.php" method="post">
            <div class="mb-4">
                <label>Nome</label>
                <input type="text" class="form-control" name="nome" placeholder="Seu nome">
            </div>
            <div class="mb-4">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" name="email" placeholder="exemplo123@gmail.com">
            </div>
            <div class="mb-4">
                <label>Celular</label>
                <input type="text" class="form-control" name="celular" placeholder="(99) 99999-9999">
            </div>
            <div class="mb-4">
                <label>Senha</label>
                <input type="password" class="form-control" name="senha" placeholder="Sua senha">
            </div>
            <button type="submit" class="btn btn-success col-5 mx-auto d-block" name="submit"><a href="exibir.php" class="text-light text-decoration-none">Salvar</a></button>
        </form>
    </div>
</body>

</html>


</body>

</html>

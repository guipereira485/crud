<?php
include_once 'conexao.php';

/**
 * Global variable.
* @var global $conexao  
* */
global $conexao;
    

if (isset($_POST['submit'])) {
    # i think, it is better to write all code in english 
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $senha = $_POST['senha'];
    $sql = "INSERT INTO `crud` (nome, email, celular, senha) VALUES ('$nome', '$email', '$celular', '$senha')";
    
    try {
        mysqli_query($conexao, $sql);
        # please, all files & codes in english 
        header("Location: /exibir.php");
    } 
    catch (Exception $ex) {
        throw new Exception("Error Processing Request", 1);
    }
}
?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Página inicial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1 class="text-center p-3">Cadastre-se</h1>
    <div class="container">
        <form method="post">
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
            <button type="submit" class="btn btn-success col-5 mx-auto d-block" name="submit">Cadastrar</button>
        </form>
    </div>
</body>
</html>


</body>

</html>
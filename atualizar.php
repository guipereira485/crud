<?php
include_once 'conexao.php';

$id = $_GET['updateid'];
if($id == null) {
  header("Location: /exibir.php");  
}

global $conexao;

$sql = "SELECT * FROM `crud` WHERE id=$id limit 1";
$resultado = mysqli_query($conexao, $sql);
$linha = mysqli_fetch_assoc($resultado); 
if(!isset($linha))
{
    header("Location: /exibir.php");     
}

$nome = $linha['nome'];
$email = $linha['email'];
$celular = $linha['celular'];
$senha = $linha['senha'];

if (isset($_POST['submit'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $senha = $_POST['senha'];

    $sql = "UPDATE `crud` SET nome=$nome, email='$email', celular='$celular', senha='$senha' WHERE id=$id";
    try {
        $resultado = mysqli_query($conexao, $sql);
    }
    finally {
        header("Location: /exibir.php");  
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
        <form method="post">
            <div class="mb-4">
                <label>Nome</label>
                <input type="text" class="form-control" name="nome" placeholder="Seu nome" value="<?php echo $nome ?>">
            </div>
            <div class="mb-4">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" name="email" placeholder="exemplo123@gmail.com" value="<?php echo $email ?>">
            </div>
            <div class="mb-4">
                <label>Celular</label>
                <input type="text" class="form-control" name="celular" placeholder="(99) 99999-9999" value="<?php echo $celular ?>">
            </div>
            <div class="mb-4">
                <label>Senha</label>
                <input type="password" class="form-control" name="senha" placeholder="Sua senha" value="<?php echo $senha ?>">
            </div>
            <button type="submit" class="btn btn-success col-5 mx-auto d-block" name="submit">
                Salvar
            </button>
        </form>
    </div>
</body>
</html>
<?php
include 'conexao.php';

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM `crud` WHERE id = $id";
    $resultado = mysqli_query($conexao, $sql);
    if($resultado){
        // echo "Apagado com sucesso!";
        header('location:exibir.php');
    }else{
        die(mysqli_error($conexao));
    }
    }
?>
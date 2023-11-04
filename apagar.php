<?php
include 'conexao.php';

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM `crud` WHERE id = $id";
    
    global $conexao;
    try {
        $resultado = mysqli_query($conexao, $sql);
    } 
    finally {
        header('location:exibir.php');
    }
}
?>
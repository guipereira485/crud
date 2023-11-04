<?php

$conexao = new mysqli('localhost', 'root', '', 'operacaocrud');

if(!$conexao){
    die(mysqli_error($conexao));
}

?>
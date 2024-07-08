<?php

// INICIAR SESSÃO
session_start();

// CONEXÃO MYSQL
include_once "conexao.php";

// REGISTRO
if(!empty($_POST['categoria'])) {

    // REGISTRAR INFORMAÇÕES NO BANCO
    $stmt = $conn->prepare('INSERT INTO categorias(categoria) VALUES(:categoria)');
    $stmt->execute(array(
        ':categoria' => $_POST['categoria'],
    ));

    $_SESSION['flash_success'] = "Livro adicionado com sucesso!";
    header("Location: ../categorias.php");
}

header("Location: ../categorias.php");

<?php

// INICIAR SESSÃO
session_start();

// CONEXÃO MYSQL
include_once "conexao.php";

$id_livro = $_POST['id_livro'];

// EXCLUIR INFORMAÇÕES NO BANCO
$stmt = $conn->prepare('DELETE FROM livros WHERE id = :id_livro');
$stmt->execute(array(
    ':id_livro' => $id_livro,
));

$_SESSION['flash_success'] = "Livro excluido com sucesso!";
header("Location: ../editora.php");
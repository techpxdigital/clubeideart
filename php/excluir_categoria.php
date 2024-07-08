<?php

// INICIAR SESSÃO
session_start();

// CONEXÃO MYSQL
include_once "conexao.php";

$id_categoria = $_POST['id_categoria'];

// EXCLUIR INFORMAÇÕES NO BANCO
$stmt = $conn->prepare('DELETE FROM categorias WHERE id = :id_categoria');
$stmt->execute(array(
    ':id_categoria' => $id_categoria,
));

$_SESSION['flash_success'] = "Categoria excluida com sucesso!";
header("Location: ../categorias.php");
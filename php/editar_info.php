<?php

// INICIAR SESSÃO
session_start();

// CONEXÃO COM BANCO MYSQL
include_once "conexao.php";

// RECUPERAR INFORMAÇÕES DO FORMULÁRIO
$nome       = $_POST['nome'];
$nascimento = $_POST['nascimento'];
$cpf        = $_POST['cpf'];
$telefone   = $_POST['telefone'];
$is_user    = $_POST['id_user'];

// RESGATAR USUÁRIO
$stmt = $conn->prepare('SELECT * FROM usuarios WHERE id = :id');
$stmt->bindParam(':id', $is_user);
$stmt->execute();  
$results = $stmt->fetchAll();

// ATUALIZAR NOME
$stmt = $conn->prepare('UPDATE usuarios SET nome = :nome WHERE id = :id');
$stmt->execute(array(
    ':id'   => $is_user,
    ':nome' => $nome,
));

// ATUALIZAR NASCIMENTO
$stmt = $conn->prepare('UPDATE usuarios SET nascimento = :nascimento WHERE id = :id');
$stmt->execute(array(
    ':id'         => $is_user,
    ':nascimento' => $nascimento,
));

// ATUALIZAR CPF
$stmt = $conn->prepare('UPDATE usuarios SET cpf = :cpf WHERE id = :id');
$stmt->execute(array(
    ':id'  => $is_user,
    ':cpf' => $cpf,
));

// ATUALIZAR TELEFONE
$stmt = $conn->prepare('UPDATE usuarios SET telefone = :telefone WHERE id = :id');
$stmt->execute(array(
    ':id'       => $is_user,
    ':telefone' => $telefone,
));

header("Location: ../configuracao.php");

$_SESSION['flash_success'] = "Informações atualizadas com sucesso!";
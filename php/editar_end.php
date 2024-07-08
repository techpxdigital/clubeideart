<?php

// INICIAR SESSÃO
session_start();

// CONEXÃO COM BANCO MYSQL
include_once "conexao.php";

// RECUPERAR INFORMAÇÕES DO FORMULÁRIO
$logradouro = $_POST['logradouro'];
$bairro     = $_POST['bairro'];
$estado     = $_POST['estado'];
$cidade     = $_POST['cidade'];
$cep        = $_POST['cep'];
$numero     = $_POST['numero'];
$is_user    = $_POST['id_user'];

// RESGATAR USUÁRIO
$stmt = $conn->prepare('SELECT * FROM usuarios WHERE id = :id');
$stmt->bindParam(':id', $is_user);
$stmt->execute();  
$results = $stmt->fetchAll();

// ATUALIZAR LOGRADOURO
$stmt = $conn->prepare('UPDATE usuarios SET logradouro = :logradouro WHERE id = :id');
$stmt->execute(array(
    ':id'         => $is_user,
    ':logradouro' => $logradouro,
));

// ATUALIZAR BAIRRO
$stmt = $conn->prepare('UPDATE usuarios SET bairro = :bairro WHERE id = :id');
$stmt->execute(array(
    ':id'     => $is_user,
    ':bairro' => $bairro,
));

// ATUALIZAR ESTADO
$stmt = $conn->prepare('UPDATE usuarios SET estado = :estado WHERE id = :id');
$stmt->execute(array(
    ':id'     => $is_user,
    ':estado' => $estado,
));

// ATUALIZAR CIDADE
$stmt = $conn->prepare('UPDATE usuarios SET cidade = :cidade WHERE id = :id');
$stmt->execute(array(
    ':id'     => $is_user,
    ':cidade' => $cidade,
));

// ATUALIZAR CEP
$stmt = $conn->prepare('UPDATE usuarios SET cep = :cep WHERE id = :id');
$stmt->execute(array(
    ':id'  => $is_user,
    ':cep' => $cep,
));

// ATUALIZAR NÚMERO
$stmt = $conn->prepare('UPDATE usuarios SET numero = :numero WHERE id = :id');
$stmt->execute(array(
    ':id'     => $is_user,
    ':numero' => $numero,
));

header("Location: ../configuracao.php");

$_SESSION['flash_success'] = "Endereço atualizado com sucesso!";
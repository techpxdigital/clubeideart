<?php

// INICIAR SESSÃO
session_start();

// CONEXÃO COM BANCO MYSQL
include_once "conexao.php";

// RECUPERAR INFORMAÇÕES DO FORMULÁRIO
$novo_email  = $_POST['novo_email'];
$atual_senha = $_POST['atual_senha'];
$is_user     = $_POST['id_user'];

// RESGATAR USUÁRIO
$stmt = $conn->prepare('SELECT * FROM usuarios WHERE id = :id');
$stmt->bindParam(':id', $is_user);
$stmt->execute();  
$results = $stmt->fetchAll();

foreach ($results as $usuario) {
    $hash = $usuario['senha'];
}

// VERIFICAR SENHA
if ($hash === md5($atual_senha)) {
    
    // ATUALIZAR EMAIL
    $stmt = $conn->prepare('UPDATE usuarios SET email = :email WHERE id = :id');
    $stmt->execute(array(
        ':id'    => $is_user,
        ':email' => $novo_email,
    ));

    session_destroy();

    header("Location: ../index.php");

    $_SESSION['flash_success'] = "E-mail atualizado com sucesso!";
}
else{
    $_SESSION['flash_error'] = "A sua senha está incorreta!";

    header("Location: ../configuracao.php");
}
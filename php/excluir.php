<?php 

// INICIAR SESSÃO
session_start();

// CONEXÃO COM BANCO MYSQL
include_once "conexao.php";

// RECUPERAR INFORMAÇÕES DO FORMULÁRIO
$atual_senha = $_POST['atual_senha'];
$is_user     = $_POST['id_user'];

// RESGATAR USUÁRIO
$stmt = $conn->prepare('SELECT * FROM usuarios WHERE id = :id');
$stmt->bindParam(':id', $is_user);
$stmt->execute();  
$results = $stmt->fetchAll();

foreach ($results as $usuario) {
    $hash      = $usuario['senha'];
    $nome      = $usuario['nome'];
    $sobrenome = $usuario['sobrenome'];
    $email     = $usuario['email'];
}

// VERIFICAR SENHA
if ($hash === md5($atual_senha)) {

    // HASH NOME
    $stmt = $conn->prepare('UPDATE usuarios SET nome = :nome WHERE id = :id');
    $stmt->execute(array(
        ':id'   => $is_user,
        ':nome' => md5($nome),
    ));

    // HASH SOBRENOME
    $stmt = $conn->prepare('UPDATE usuarios SET sobrenome = :sobrenome WHERE id = :id');
    $stmt->execute(array(
        ':id'        => $is_user,
        ':sobrenome' => md5($sobrenome),
    ));

    // HASH EMAIL
    $stmt = $conn->prepare('UPDATE usuarios SET email = :email WHERE id = :id');
    $stmt->execute(array(
        ':id'    => $is_user,
        ':email' => md5($email),
    ));

    // ATUALIZAR STATUS
    $stmt = $conn->prepare('UPDATE usuarios SET stts = :stts WHERE id = :id');
    $stmt->execute(array(
        ':id'   => $is_user,
        ':stts' => "excluido",
    ));

    // ATUALIZAR REGISTRO
    $stmt = $conn->prepare('UPDATE usuarios SET registro = :registro WHERE id = :id');
    $stmt->execute(array(
        ':id'       => $is_user,
        ':registro' => date('d-m-Y H:i:s'),
    ));

    session_destroy();

    header("Location: ../index.php");

    $_SESSION['flash_success'] = "Conta excluida com seucesso!";
}
else{
    $_SESSION['flash_error'] = "A sua senha está incorreta!";

    header("Location: ../configuracao.php");
}

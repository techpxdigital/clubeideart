<?php

// INICIAR SESSÃO
session_start();

// CONEXÃO COM BANCO MYSQL
include_once "conexao.php";

// RECUPERAR INFORMAÇÕES DO FORMULÁRIO
$nova_senha  = $_POST['nova_senha'];
$conf_senha  = $_POST['conf_senha'];
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

// VERIFICAR SE SENHAS CONFEREM
if ($nova_senha === $conf_senha) {

    // VERIFICAR SENHA
    if ($hash === md5($atual_senha)) {

        // HASH DE SENHA
        $nova_hash = md5($nova_senha);
        
        // ATUALIZAR EMAIL
        $stmt = $conn->prepare('UPDATE usuarios SET senha = :senha WHERE id = :id');
        $stmt->execute(array(
            ':id'    => $is_user,
            ':senha' => $nova_hash,
        ));

        session_destroy();

        header("Location: ../index.php");

        $_SESSION['flash_success'] = "Senha atualizada com sucesso!";
    }
    else{
        $_SESSION['flash_error'] = "A sua senha está incorreta!";

        header("Location: ../configuracao.php");
    }
}
else{
    $_SESSION['flash_error'] = "As senhas são diferentes!";

    header("Location: ../configuracao.php");
}
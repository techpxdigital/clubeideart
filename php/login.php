<?php

// INICIAR SESSÃO
session_start();

// CONEXÃO COM BANCO MYSQL
include_once "conexao.php";

// RESGATAR FORMULÁRIO

$email = $_POST['email'];
$senha = $_POST['senha'];

// RESGATAR USUÁRIO
$stmt = $conn->prepare('SELECT * FROM usuarios WHERE email = :email');
$stmt->bindParam(':email', $email);
$stmt->execute();

$results   = $stmt->fetchAll();
$count_sql = count($results);

if ($count_sql > 0) {

    foreach ($results as $usuario) {
        $id_db    = $usuario['id'];
        $nome_db  = $usuario['nome'];
        $email_db = $usuario['email'];
        $senha_db = $usuario['senha'];
        $valid_db = $usuario['validar'];
        $stts_db  = $usuario['stts'];
    }

    // VALIDA SENHA
    if ($senha_db === md5($senha)) {

        // DATA_SESSION
        $data_session = array(
            'id'      => $id_db,
            'nome'    => $nome_db,
            'email'   => $email_db,
            'validar' => $valid_db,
            'status'  => $status_db,
        );

        // FINFORMAÇOES SESSÃO
        $_SESSION['usuario'] = $data_session;

        header("Location: ../dashboard.php");

    }
    else {
        $_SESSION['flash_error'] = "A senha está incorreta!";

        header("Location: ../index.php");
    }
}
else{
    $_SESSION['flash_error'] = "O Usuário não foi encontrado!";

    header("Location: ../index.php");
}

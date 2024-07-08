<?php

// INICIAR SESSÃO
session_start();

// CONEXÃO COM BANCO MYSQL
include_once "conexao.php";

// RESGATAR FORMULÁRIO

$email = $_POST['email'];
$senha = $_POST['senha'];

if ($email === "contato@ideateproducoes.com.br") {
    
    // RESGATAR ADMIN
    $stmt = $conn->prepare('SELECT * FROM admin WHERE email = :email');
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    $results   = $stmt->fetchAll();
    $count_sql = count($results);

    if ($count_sql > 0) {

        foreach ($results as $admin) {
            $id_db    = $admin['id'];
            $nome_db  = $admin['nome'];
            $email_db = $admin['email'];
            $senha_db = $admin['senha'];
        }
    }

    // VALIDA SENHA
    if ($senha_db === md5($senha)) {

        // DATA_SESSION
        $data_session = array(
            'id'    => $id_db,
            'nome'  => $nome_db,
            'email' => $email_db,
            'tipo'  => "admin",
        );

        // INFORMAÇOES SESSÃO
        $_SESSION['usuario'] = $data_session;

        header("Location: ../dashboard.php");

    }
    else {
        $_SESSION['flash_error'] = "A senha está incorreta!";

        header("Location: ../index.php");
    }
}
else{
    // RESGATAR USUÁRIO
    $stmt = $conn->prepare('SELECT * FROM usuarios WHERE email = :email');
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    $results   = $stmt->fetchAll();
    $count_sql = count($results);

    if ($count_sql > 0) {

        foreach ($results as $usuario) {
            $id_db     = $usuario['id'];
            $nome_db   = $usuario['nome'];
            $email_db  = $usuario['email'];
            $senha_db  = $usuario['senha'];
            $nasc_db   = $usuario['nascimento'];
            $tel_db    = $usuario['telefone'];
            $cpf_db    = $usuario['cpf'];
            $rua_db    = $usuario['logradouro'];
            $bairro_db = $usuario['bairro'];
            $estado_db = $usuario['estado'];
            $cidade_db = $usuario['cidade'];
            $cep_db    = $usuario['cep'];
            $numero_db = $usuario['numero'];
            $valid_db  = $usuario['validar'];
            $stts_db   = $usuario['stts'];
        }

        // VALIDA SENHA
        if ($senha_db === md5($senha)) {

            // DATA_SESSION
            $data_session = array(
                'id'         => $id_db,
                'nome'       => $nome_db,
                'email'      => $email_db,
                'nascimento' => $nasc_db,
                'telefone'   => $tel_db,
                'cpf'        => $cpf_db,
                'logradouro' => $rua_db,
                'bairro'     => $bairro_db,
                'estado'     => $estado_db,
                'cidade'     => $cidade_db,
                'cep'        => $cep_db,
                'numero'     => $numero_db,
                'validar'    => $valid_db,
                'status'     => $status_db,
                'tipo'       => "usuario",
            );

            // INFORMAÇOES SESSÃO
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
}

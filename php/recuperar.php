<?php 

// INICIAR SESSÃO
session_start();

// CONEXÃO COM BANCO MYSQL
include_once "conexao.php";

// RECUPERAR INFORMAÇÕES DO FORMULÁRIO
$nova_senha   = $_POST['nova_senha'];
$conf_senha   = $_POST['conf_senha'];
$code_verific = $_POST['code_verific'];
$is_user      = $_POST['id_user'];

// VERIFICAR SE AS SENHAS SÃO IGUAIS
if ($nova_senha === $conf_senha) {
    
    // RESGATAR USUÁRIO
    $stmt = $conn->prepare('SELECT * FROM usuarios WHERE id = :id');
    $stmt->bindParam(':id', $is_user);
    $stmt->execute();  
    $results = $stmt->fetchAll();

    foreach ($results as $usuario) {
        $code_db = $usuario['recuperar'];
    }

    // VALIDAR CÓDIGO DE VERIFICAÇÃO
    if ($code_verific === $code_db) {

        // HASH DE SENHA
        $nova_hash = md5($nova_senha);

        // ATUALIZAR SENHA
        $stmt = $conn->prepare('UPDATE usuarios SET senha = :senha WHERE id = :id');
        $stmt->execute(array(
            ':id'    => $is_user,
            ':senha' => $nova_hash,
        ));

        // LIMPAR CAMPO DE RECUPERAÇÃO
        $stmt = $conn->prepare('UPDATE usuarios SET recuperar = :rec WHERE id = :id');
        $stmt->execute(array(
            ':id'  => $is_user,
            ':rec' => "",
        ));

        $_SESSION['flash_success'] = "Senha atualizada com sucesso!";

        header("Location: ../index.php");
    }
    else{
        $_SESSION['flash_error'] = "O código de verificação está incorreto!";

        header("Location: ../recuperar.php");
    }
}
else{
    $_SESSION['flash_error'] = "As senhas são diferentes!";

    header("Location: ../recuperar.php");
}
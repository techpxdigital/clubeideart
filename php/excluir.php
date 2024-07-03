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
    $hash       = $usuario['senha'];
    $nome       = $usuario['nome'];
    $email      = $usuario['email'];
    $telefone   = $usuario['telefone'];
    $logradouro = $usuario['logradouro'];
    $bairro     = $usuario['bairro'];
    $estado     = $usuario['estado'];
    $cidade     = $usuario['cidade'];
    $cep        = $usuario['cep'];
    $numero     = $usuario['numero'];
    $cpf        = $usuario['cpf'];
}

// VERIFICAR SENHA
if ($hash === md5($atual_senha)) {

    // HASH NOME
    $stmt = $conn->prepare('UPDATE usuarios SET nome = :nome WHERE id = :id');
    $stmt->execute(array(
        ':id'   => $is_user,
        ':nome' => md5($nome),
    ));

    // HASH TELEFONE
    $stmt = $conn->prepare('UPDATE usuarios SET telefone = :telefone WHERE id = :id');
    $stmt->execute(array(
        ':id'       => $is_user,
        ':telefone' => md5($telefone),
    ));

    // HASH EMAIL
    $stmt = $conn->prepare('UPDATE usuarios SET email = :email WHERE id = :id');
    $stmt->execute(array(
        ':id'    => $is_user,
        ':email' => md5($email),
    ));

    // HASH LOGRADOURO
    $stmt = $conn->prepare('UPDATE usuarios SET logradouro = :logradouro WHERE id = :id');
    $stmt->execute(array(
        ':id'         => $is_user,
        ':logradouro' => md5($logradouro),
    ));

    // HASH BAIRRO
    $stmt = $conn->prepare('UPDATE usuarios SET bairro = :bairro WHERE id = :id');
    $stmt->execute(array(
        ':id'     => $is_user,
        ':bairro' => md5($bairro),
    ));

    // HASH ESTADO
    $stmt = $conn->prepare('UPDATE usuarios SET estado = :estado WHERE id = :id');
    $stmt->execute(array(
        ':id'     => $is_user,
        ':estado' => md5($estado),
    ));

    // HASH CIDADE
    $stmt = $conn->prepare('UPDATE usuarios SET cidade = :cidade WHERE id = :id');
    $stmt->execute(array(
        ':id'     => $is_user,
        ':cidade' => md5($cidade),
    ));

    // HASH CEP
    $stmt = $conn->prepare('UPDATE usuarios SET cep = :cep WHERE id = :id');
    $stmt->execute(array(
        ':id'  => $is_user,
        ':cep' => md5($cep),
    ));

    // HASH NÚMERO
    $stmt = $conn->prepare('UPDATE usuarios SET numero = :numero WHERE id = :id');
    $stmt->execute(array(
        ':id'     => $is_user,
        ':numero' => md5($numero),
    ));

    // HASH CPF
    $stmt = $conn->prepare('UPDATE usuarios SET cpf = :cpf WHERE id = :id');
    $stmt->execute(array(
        ':id'  => $is_user,
        ':cpf' => md5($cpf),
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

<?php 

// INICIAR SESSÃO
session_start();

// CONEXÃO MYSQL
include_once "conexao.php";

// CAPTURAR FORMULÁRIO

$nome       = $_POST['nome'];
$sobrenome  = $_POST['sobrenome'];
$email      = $_POST['email'];
$senha      = $_POST['senha'];
$conf_senha = $_POST['conf_senha'];
$registro   = date('d-m-Y H:i:s');
$validar    = random_int(100000, 999999);

// VERIFICAR SE AS SENHAS SÃO IGUAIS

if ($senha === $conf_senha) {
    
    // PASSAR HASH NA SENHA
    $hash_md5 = md5($senha);

    // REGISTRAR INFORMAÇÕES NO BANCO
    $stmt = $conn->prepare('INSERT INTO usuarios(nome, sobrenome, email, senha, registro, stts, validar) VALUES(:nome, :sobrenome, :email, :senha, :registro, :stts, :validar)');
    $stmt->execute(array(
        ':nome'      => $nome,
        ':sobrenome' => $sobrenome,
        ':email'     => $email,
        ':senha'     => $hash_md5,
        ':registro'  => $registro,
        ':stts'      => 'pendente',
        ':validar'   => $validar,
    ));

    $_SESSION['flash_success'] = "Cadastro realizado com sucesso!";

    header("Location: ../index.php");

}
else {
    $_SESSION['flash_error'] = "As senhas são diferentes!";

    header("Location: ../cadastro.php");
}



<?php 

// CONEXÃO MYSQL
include_once "php/conexao.php";

$nome  = "Admin";
$email = "contato@ideateproducoes.com.br";
$senha = "@idearte2024";
$login = date('d-m-Y H:i:s');

// PASSAR HASH NA SENHA
$hash_md5 = md5($senha);

// REGISTRAR INFORMAÇÕES NO BANCO
$stmt = $conn->prepare('INSERT INTO admin(nome, email, senha, login, logout) VALUES(:nome, :email, :senha, :logs, :logout)');
$stmt->execute(array(
    ':nome'   => $nome,
    ':email'  => $email,
    ':senha'  => $hash_md5,
    ':logs'   => $login,
    ':logout' => ""
));

echo "[ USUÁRIO ADICIONADO COM SUCESSO! ]";

?>
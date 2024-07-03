<?php 

// INICIAR SESSÃO
session_start();

// CONEXÃO MYSQL
include_once "conexao.php";

// CAPTURAR FORMULÁRIO

$nome       = $_POST['nome'];
$email      = $_POST['email'];
$telefone   = $_POST['telefone'];
$cpf        = $_POST['cpf'];
$sexo       = $_POST['sexo'];
$nascimento = $_POST['nascimento'];
$logradouro = $_POST['logradouro'];
$bairro     = $_POST['bairro'];
$numero     = $_POST['numero'];
$estado     = $_POST['estado'];
$cidade     = $_POST['cidade'];
$cep        = $_POST['cep'];
$senha      = $_POST['senha'];
$conf_senha = $_POST['conf_senha'];
$registro   = date('d-m-Y H:i:s');
$validar    = random_int(100000, 999999);

// VERIFICAR SE AS SENHAS SÃO IGUAIS

if ($senha === $conf_senha) {
    
    // PASSAR HASH NA SENHA
    $hash_md5 = md5($senha);

    // REGISTRAR INFORMAÇÕES NO BANCO
    $stmt = $conn->prepare('INSERT INTO usuarios(nome, email, sexo, nascimento, logradouro, bairro, estado, cidade, cep, telefone, senha, registro, stts, recuperar, validar, numero, cpf) VALUES(:nome, :email, :sexo, :nascimento, :logradouro, :bairro, :estado, :cidade, :cep, :telefone, :senha, :registro, :stts, :recuperar, :validar, :numero, :cpf)');
    $stmt->execute(array(
        ':nome'       => $nome,
        ':email'      => $email,
        ':sexo'       => $sexo,
        ':nascimento' => $nascimento,
        ':logradouro' => $logradouro,
        ':bairro'     => $bairro,
        ':estado'     => $estado,
        ':cidade'     => $cidade,
        ':cep'        => $cep,
        ':telefone'   => $telefone,
        ':senha'      => $hash_md5,
        ':registro'   => $registro,
        ':stts'       => 'pendente',
        ':recuperar'  => '',
        ':validar'    => $validar,
        ':numero'     => $numero,
        ':cpf'        => $cpf,
    ));

    $_SESSION['flash_success'] = "Cadastro realizado com sucesso!";

    header("Location: ../index.php");

}
else {
    $_SESSION['flash_error'] = "As senhas são diferentes!";

    header("Location: ../cadastro.php");
}



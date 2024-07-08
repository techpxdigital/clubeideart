<?php

// INICIAR SESSÃO
session_start();

// TERMOS
$termos = $_POST['termos'];

if ($termos != 'on') {

    $_SESSION['flash_error'] = "Aceite os termos do serviço para continuar!";

    header("Location: ../assinatura.php");
}

// CONEXÃO MYSQL
include_once "conexao.php";

$dados = [
    "nome"       => $_POST['nome'],
    "email"      => $_POST['email'],
    "telefone"   => $_POST['telefone'],
    "cpf"        => $_POST['cpf'],
    "sexo"       => $_POST['sexo'],
    "nascimento" => $_POST['nascimento'],
    "logradouro" => $_POST['logradouro'],
    "bairro"     => $_POST['bairro'],
    "numero"     => $_POST['numero'],
    "estado"     => $_POST['estado'],
    "cidade"     => $_POST['cidade'],
    "cep"        => $_POST['cep'],
    "senha"      => $_POST['senha'],
    "conf_senha" => $_POST['conf_senha']
];

foreach ($dados as $input) {

    if (empty($input)) {

        $_SESSION['flash_error'] = "Preencha todos os campos obrigatórios!";
        header("Location: ../assinatura.php");
    }
}

$pagamento  = $_POST['paymentMethod'];
$registro   = date('d-m-Y H:i:s');
$validar    = random_int(100000, 999999);

// VERIFICAR SE AS SENHAS SÃO IGUAIS
if ($dados['senha'] === $dados['conf_senha']) {

    // PASSAR HASH NA SENHA
    $hash_md5 = md5($dados['senha']);

    // REGISTRAR INFORMAÇÕES NO BANCO
    $stmt = $conn->prepare('INSERT INTO usuarios(nome, email, sexo, nascimento, logradouro, bairro, estado, cidade, cep, telefone, senha, registro, stts, recuperar, validar, numero, cpf) VALUES(:nome, :email, :sexo, :nascimento, :logradouro, :bairro, :estado, :cidade, :cep, :telefone, :senha, :registro, :stts, :recuperar, :validar, :numero, :cpf)');
    $stmt->execute(array(
        ':nome'       => $dados['nome'],
        ':email'      => $dados['email'],
        ':sexo'       => $dados['sexo'],
        ':nascimento' => $dados['nascimento'],
        ':logradouro' => $dados['logradouro'],
        ':bairro'     => $dados['bairro'],
        ':estado'     => $dados['estado'],
        ':cidade'     => $dados['cidade'],
        ':cep'        => $dados['cep'],
        ':telefone'   => $dados['telefone'],
        ':senha'      => $hash_md5,
        ':registro'   => $registro,
        ':stts'       => 'pendente',
        ':recuperar'  => '',
        ':validar'    => $validar,
        ':numero'     => $dados['numero'],
        ':cpf'        => $dados['cpf'],
    ));

    // METODOS DE PAGAMENTOS
    $methodo_pay = [1 => "cartão de crédito", 2 => "cartão de débito", 3 => "PIX"];

    $_SESSION['flash_success'] = "Cadastro realizado com sucesso!";

    // DADOS BASE64
    $data_base = [
        "nome"  => $dados['nome'],
        "email" => $dados['email'],
        "cpf"   => $dados['cpf'],
        "pay"   => $methodo_pay[$pagamento],
    ];

    $string_base = implode(",", $data_base);
    $base64      = base64_encode($string_base);

    // INTEGRAÇÕES DE PAGAMENTO
    if ($pagamento == 1) {

        header("Location: ../api/card.php?data=".$base64);
    }

    if ($pagamento == 2) {
        header("Location: ../api/debit.php?data=".$base64);
    }

    if ($pagamento == 3) {
        header("Location: ../api/pix.php?data=".$base64);
    }
} else {
    $_SESSION['flash_error'] = "As senhas são diferentes!";

    header("Location: ../cadastro.php");
}

?>
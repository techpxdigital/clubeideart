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

    // INTEGRAÇÕES DE PAGAMENTO
    if ($pagamento == 1) {
        include_once "../api/card.php";
    }

    if ($pagamento == 2) {
        include_once "../api/debit.php";
    }

    if ($pagamento == 3) {
        include_once "../api/pix.php";
    }
} else {
    $_SESSION['flash_error'] = "As senhas são diferentes!";

    header("Location: ../cadastro.php");
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Clube Idearte · Assinatura</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbar-bottom/">

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>

<body>
    <?php 
    
    if (isset($obj->id) AND $obj->id != NULL) {
        echo "
        <main class='container'>
            <div class='bg-light p-5 rounded mt-3'>
                <h1>Quase lá!</h1>
                <p class='lead'>Agora é só realizar seu pagamento no $methodo_pay[$pagamento] para finalizar sua assinatura!</p>
                <a class='btn btn-lg btn-primary' target='_blank' href='$link_externo' role='button'>Seguir para pagamento &raquo;</a>
            </div>
        </main>
        ";
    }
    else{
        echo "
        <main class='container'>
            <div class='bg-light p-5 rounded mt-3'>
                <h1>Erro ao processar seu pagamento!</h1>
                <p class='lead'>Não se preocupe, estamos resolvendo este problema, acesse sua conta para continuar seu pagamento!</p>
                <a class='btn btn-lg btn-primary' href='../index.php' role='button'>Acessar sua conta &raquo;</a>
            </div>
        </main>
        ";
    }
    
    ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>
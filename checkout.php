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

    // CONEXÃO MYSQL
    include_once "php/conexao.php";

    $data   = $_GET['data'];
    $base64 = base64_decode($data);

    $string = explode(',', $base64);
    $inform = [
        "link" => $string[0],
        "pay"  => $string[1],
        "cpf"  => $string[2],
        "code" => $string[3],
    ];
        
    if (isset($inform['link']) AND !empty($inform['link'])) {

        // GUARDAR PEDIDO
        $stmt = $conn->prepare('INSERT INTO pedidos(pedido, usuario, valor, pagamento, stts, create_data, update_data, link_externo) VALUES(:pedido, :usuario, :valor, :pagamento, :stts, :create_data, :update_data, :link_externo)');
        $stmt->execute(array(
            ':pedido'       => $inform['code'],
            ':usuario'      => $inform['cpf'],
            ':valor'        => 238.8,
            ':pagamento'    => $inform['pay'],
            ':stts'         => "pending",
            ':create_data'  => date('d-m-Y H:i:s'),
            ':update_data'  => "",
            ':link_externo' => $inform['link'],
        ));

        echo "
        <main class='container'>
            <div class='bg-light p-5 rounded mt-3'>
                <h1>Quase lá!</h1>
                <p class='lead'>Agora é só realizar seu pagamento no ".$inform['pay']." para finalizar sua assinatura!</p>
                <a class='btn btn-lg btn-primary' target='_blank' href='".$inform['link']."' role='button'>Seguir para pagamento &raquo;</a>
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
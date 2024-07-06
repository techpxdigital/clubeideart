<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Ideart Produções">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Dashboard | Login</title>
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.4.0/uicons-solid-straight/css/uicons-solid-straight.css'>


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


    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
</head>

<body class="text-center">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <main class="form-signin" style="padding: 0px 40px">
                <form action="php/login.php" method="post" class="card-body p-12" style="margin-top: 8%;">
                    <img src="img/configuracoes.gif" style="width: 100px;" alt="logo">
                    <h1 class="h3 mb-3" style="font-weight: bold;">Dashboard BI</h1>

                    <?php

                    session_start();

                    // ALERTAS DE ERROS
                    if (isset($_SESSION['flash_error'])) {

                        echo "
                            <div class='alert alert-danger' role='alert'>".$_SESSION['flash_error']."</div>
                        ";
                        
                        unset($_SESSION['flash_error']);
                    }

                    // ALERTAS DE SUCESSO
                    if (isset($_SESSION['flash_success'])) {

                        echo "
                            <div class='alert alert-success' role='alert'>".$_SESSION['flash_success']."</div>
                        ";
                        
                        unset($_SESSION['flash_success']);
                    }

                    ?>
        
                    <div class="form-floating" style="margin-top: 20%;">
                        <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
                        <label for="floatingInput">E-mail</label>
                    </div>
                    <div class="form-floating" style="margin-top: 10px;">
                        <input type="password" class="form-control" id="floatingPassword" name="senha" placeholder="Password">
                        <label for="floatingPassword">Senha</label>
                    </div>
                    
                    <br><button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>

                    <div class="checkbox mb-3" style="margin-top: 20px;">
                        <a href="assinatura.php"><button type="button" class="btn btn-secondary btn-lg" style="width: 100%;">Assine Já</button></a>
                    </div>

                    <div class="checkbox mb-3" style="margin-top: 20px;">
                        <a href="recuperar.php"><p>Recuperar Acesso</p></a>
                    </div>

                    <p class="mt-5 mb-3" style="font-size: 13px; line-height: 17px;">Todos os direitos reservados a Ideart Produções &copy; <?php echo date('Y'); ?> | Desenvolvido por TechPX Digital</p>
                </form>
            </main>
        </div>
        <div class="col-4"></div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
<?php 

// INICIAR SESSÃO
session_start();

// CONEXÃO COM BANCO MYSQL
require_once "php/conexao.php";

if (isset($_POST['recupera'])) {

    // RECUPERAR EMAIL
    $email = $_POST['email'];
    $code  = random_int(100000, 999999);
    
    // RESGATAR USUÁRIO
    $stmt = $conn->prepare('SELECT * FROM usuarios WHERE email = :email');
    $stmt->bindParam(':email', $email);
    $stmt->execute();  

    $results   = $stmt->fetchAll();
    $count_sql = count($results);

    if ($count_sql > 0) {
        
        foreach ($results as $usuario) {
            $id_db    = $usuario['id'];
            $senha_db = $usuario['senha'];
        }

        // INCLUIR CODE DE VERIFICAÇÃO NO BANCO
        $stmt = $conn->prepare('UPDATE usuarios SET recuperar = :code WHERE id = :id');
        $stmt->execute(array(
            ':id'   => $id_db,
            ':code' => $code,
        ));

        // ENVIAR CODE POR E-MAIL
    }
    else{
        $_SESSION['flash_error'] = "O Usuário não foi encontrado!";
    }
}

?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Dashboard | Recuperação</title>
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

    <link href="signin.css" rel="stylesheet">
</head>

<body class="text-center">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <main class="form-signin" style="padding: 0px 40px">

                <?php 

                // ALERTAS DE ERROS
                if (isset($_SESSION['flash_error'])) {

                    echo "
                        <div class='alert alert-danger' role='alert' style='margin-top: 20px;'>".$_SESSION['flash_error']."</div>
                    ";
                    
                    unset($_SESSION['flash_error']);
                }

                // FORMULÁRIOS
                if (isset($_POST['recupera']) AND $count_sql > 0) {
                    echo "
                    <form action='php/recuperar.php' method='post' class='card-body p-12' style='margin-top: 8%;'>
                        <img src='img/configuracoes.gif' style='width: 100px;' alt='logo'>
                        <h1 class='h3 mb-3' style='font-weight: bold;'>Dashboard BI</h1>
            
                        <div class='form-floating' style='margin-top: 20%;'>
                            <input type='password' class='form-control' id='floatingInput' name='nova_senha' placeholder='nova senha'>
                            <label for='floatingInput'>Nova senha</label>
                        </div>
                        <div class='form-floating' style='margin-top: 10px;'>
                            <input type='password' class='form-control' id='floatingInput' name='conf_senha' placeholder='confirmar nova senha'>
                            <label for='floatingInput'>Confirmar nova senha</label>
                        </div>
                        <div class='form-floating' style='margin-top: 10px;'>
                            <input type='text' class='form-control' id='floatingInput' name='code_verific' maxlength='6' placeholder='codigo de verificação'>
                            <input type='hidden' name='id_user' value='$id_db'>
                            <label for='floatingInput'>Seu código de verificação</label>
                        </div>

                        <br><button class='w-100 btn btn-lg btn-primary' type='submit'>Alterar senha</button>
                    </form>
                    ";
                }
                elseif (isset($_POST['recupera']) AND $count_sql === 0) {

                    // ALERTAS DE ERROS
                    if (isset($_SESSION['flash_error'])) {

                        echo "
                            <div class='alert alert-danger' role='alert' style='margin-top: 20px;'>".$_SESSION['flash_error']."</div>
                        ";
                        
                        unset($_SESSION['flash_error']);
                    }

                    echo "
                    <form action='' method='post' class='card-body p-12' style='margin-top: 8%;'>
                        <img src='img/configuracoes.gif' style='width: 100px;' alt='logo'>
                        <h1 class='h3 mb-3' style='font-weight: bold;'>Dashboard BI</h1>
            
                        <div class='form-floating' style='margin-top: 20%;'>
                            <input type='email' class='form-control' id='floatingInput' name='email' placeholder='name@example.com'>
                            <label for='floatingInput'>E-mail</label>
                        </div>

                        <br><button class='w-100 btn btn-lg btn-primary' name='recupera' type='submit'>Recuperar</button>
                    </form>
                    ";
                }
                else{
                    echo "
                    <form action='' method='post' class='card-body p-12' style='margin-top: 8%;'>
                        <img src='img/configuracoes.gif' style='width: 100px;' alt='logo'>
                        <h1 class='h3 mb-3' style='font-weight: bold;'>Dashboard BI</h1>
            
                        <div class='form-floating' style='margin-top: 20%;'>
                            <input type='email' class='form-control' id='floatingInput' name='email' placeholder='name@example.com'>
                            <label for='floatingInput'>E-mail</label>
                        </div>

                        <br><button class='w-100 btn btn-lg btn-primary' name='recupera' type='submit'>Recuperar</button>
                    </form>
                    ";
                }

                ?>

                <div class="checkbox mb-3" style="margin-top: 20px;">
                    <a href="index.php"><p class="">Lembrei minha senha!</p></a>
                </div>

                <p class="mt-5 mb-3 text-muted" style="font-size: 13px;">Todos os direitos reservados &copy; 2021</p>
            </main>
        </div>
        <div class="col-4"></div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
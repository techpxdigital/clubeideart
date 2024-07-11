<?php

$nome_completo = $_SESSION['usuario']['nome'];
$explode_name  = explode(" ", $nome_completo);
$nome_usuario  = $explode_name[0];

?>

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap shadow" style="padding: 12px 0px;">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#" style="font-weight: bold;">Clube Idearte</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <form class="w-100" action="busca.php" method="post">
    <input class="form-control form-control-dark" type="text" name="pesquisa" placeholder="Busque na editora" aria-label="Search">
    </form>
    <div class="navbar-nav" style="width: 25%;">
        <div class="nav-item text-nowrap" style="padding-left: 45px;">
            <?php 
            
            $stmt = $conn->prepare('SELECT * FROM pedidos WHERE usuario = :cpf');
            $stmt->bindParam(':cpf', $_SESSION['usuario']['cpf']);
            $stmt->execute();  
            $results = $stmt->fetchAll();

            foreach ($results as $pagamento) {
                $stts_pay = $pagamento['stts'];
            }

            if (isset($stts_pay) AND !empty($stts_pay) AND $stts_pay === 'approved') {

                echo '
                
                <small style="color: green; position: absolute; margin: 10px 0px 0px 0px;"><i class="fi fi-br-crown" style="margin: 0px 0px 0px -25px; position: absolute; font-size: 16px;"></i> Assinatura Ativa</small>
                <a class="nav-link px-3" style="float: right;" href="php/logout.php">Sair</a>
                
                ';
            }
            else{
                echo '
                
                <small style="color: orange; position: absolute; margin: 10px 0px 0px 0px;"><i class="fi fi-br-crown" style="margin: 0px 0px 0px -25px; position: absolute; font-size: 16px;"></i> Assinatura Pendente</small>
                <a class="nav-link px-3" style="float: right;" href="php/logout.php">Sair</a>
                
                ';
            }
            
            ?>
        </div>
    </div>
</header>

<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse" style="background: #6e18a0;">
            <div class="position-sticky pt-3">
                <ul class="nav flex-column" style="position: fixed; margin-top: 0%;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="dashboard.php">
                            <i class="fi fi-br-comment-alt-check" style="position: absolute; margin-top: 3px; color: #ffffff;"></i>
                            <span style="margin-left: 30px; color: #ffffff;">Visão Geral</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="editora.php">
                        <i class="fi fi-br-book-alt" style="position: absolute; margin-top: 3px; color: #ffffff;"></i>
                            <span style="margin-left: 30px; color: #ffffff;">Editora</span>
                        </a>
                        <?php 

                        // RECUPERAR VALIDAÇÃO
                        $stmt = $conn->prepare('SELECT * FROM categorias');
                        $stmt->execute();
                        $results = $stmt->fetchAll();
                        
                        if ($page === "editora" OR $page === "titulo" OR $page === "categoria_livros" OR $page === "buscar") {

                            if ($_SESSION['usuario']['tipo'] === "usuario") {
                                
                                echo '
                            
                                <ul style="margin-left: 20px;" class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="institucional.php">
                                            <i class="fi fi-br-building" style="position: absolute; margin-top: 3px; color: #ffffff;"></i>
                                            <span style="margin-left: 30px; color: #ffffff;">Institucional</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="editora.php">
                                            <i class="fi fi-br-book-alt" style="position: absolute; margin-top: 3px; color: #ffffff;"></i>
                                            <span style="margin-left: 30px; color: #ffffff;">Livros</span> 
                                        </a>
                                        <ul style="margin-left: 20px;" class="nav flex-column">';

                                            foreach ($results as $categoria) {
                                                $categoria_nome = $categoria['categoria'];

                                                // RECUPERAR LIVROS
                                                $stmt = $conn->prepare('SELECT * FROM livros WHERE categoria = :nome');
                                                $stmt->bindParam(':nome', $categoria_nome);
                                                $stmt->execute();  
                                                $results = $stmt->fetchAll();
                                                $count   = count($results);

                                                if ($count > 0) {

                                                    echo "
                                                
                                                    <li class='nav-item'>
                                                        <a class='nav-link' href='variedade.php?categoria=$categoria_nome'>
                                                            <i class='fi fi-br-add' style='position: absolute; margin-top: 3px; color: #ffffff;'></i>
                                                            <span style='margin-left: 30px; color: #ffffff;'>$categoria_nome ($count)</span> 
                                                        </a>
                                                    </li>
                                                    
                                                    ";
                                                }
                                            }

                                            echo '
                                        </ul>
                                    </li>
                                </ul>
                                
                                ';
                            }
                            else{
                                echo '
                                <ul style="margin-left: 20px;" class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="editora.php">
                                            <span data-feather="users"></span>
                                            Livros
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="categorias.php">
                                            <span data-feather="users"></span>
                                            Categorias
                                        </a>
                                    </li>
                                </ul>';
                            }
                        }
                        
                        ?>
                    </li>

                    <?php 
                    
                        if ($_SESSION['usuario']['tipo'] === "usuario") {
                                                
                            echo '<li class="nav-item">
                                <a class="nav-link" href="configuracao.php">
                                    <i class="fi fi-br-settings-sliders" style="position: absolute; margin-top: 3px; color: #ffffff;"></i> 
                                    <span style="margin-left: 30px; color: #ffffff;">Configuração</span>
                                </a>
                            </li>';
                        }
                    ?>
        
                </ul>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2"><b>Olá <?php echo $nome_usuario; ?></b></h1>
                <div class="btn-toolbar mb-2 mb-md-0" style="display: none;">
                    <div class="btn-group me-2">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                    </div>
                    <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                        <span data-feather="calendar"></span>
                        This week
                    </button>
                </div>
            </div>

            <div class="row">
            <?php

                if ($_SESSION['usuario']['tipo'] === "usuario" AND $valid_db != "varificado") {

                echo "
                    <div class='alert alert-warning' role='alert'>
                        Seu e-mail ainda não foi verificado!
                        <button type='button' style='float: right; font-size: 11px; background-color: #6e18a0; border: #6e18a0;' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#exampleModal'>Verificar Agora</button>
                    </div>
                ";

                }

                // ALERTAS DE SUCESSO
                if (isset($_SESSION['flash_success'])) {

                    echo "
                        <div class='alert alert-success' role='alert'>".$_SESSION['flash_success']."</div>
                    ";
                    
                    unset($_SESSION['flash_success']);
                }

            ?>
            </div>

            <!-- SECTION -->
            <?php 
            
            if ($page === "dashboard") {

                if ($_SESSION['usuario']['tipo'] === "usuario") {
                    include_once "componentes/painel.php";
                }
                else{
                    include_once "componentes/admin_lista.php";
                }  
            }
            if ($page === "configuracao") {
                include_once "componentes/configuracao.php"; 
            }
            if ($page === "editora") {

                if ($_SESSION['usuario']['tipo'] === "usuario") {
                    include_once "componentes/editora.php";
                }
                else{
                    include_once "componentes/admin_livros.php";
                }  
            }
            if ($page === "institucional") {
                include_once "componentes/instituto.php";
            }
            if ($page === "categoria_livros") {
                include_once "componentes/categoria.php";
            }
            if ($page === "buscar") {
                include_once "componentes/buscar.php";
            }
            if ($page === "categorias") {
                include_once "componentes/admin_categorias.php";
            }
            if ($page === "titulo") {
                include_once "componentes/titulo.php"; 
            }

            ?>
            
        </main>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b>Verifique seu e-mail</b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="php/validar.php" method="post">
                <div class="modal-body">
                    <p>Enviamos um código de segurança para o e-mail <b><?php echo $_SESSION['usuario']['email'] ?></b>, informe esse código abaixo, para validar sua conta:</p>
                    
                    <div class="form-floating" style="margin-top: 20px;">
                        <input type="text" class="form-control" id="floatingPassword" name="code" maxlength="6" placeholder="Código de verificação">
                        <input type="hidden" value="<?php echo $_SESSION['usuario']['id'] ?>" name="id_user">
                        <label for="floatingPassword">Seu código de verificação</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fazer mais tarde</button>
                    <button type="submit" class="btn btn-primary">Validar agora!</button>
                </div>
            </form>
        </div>
    </div>
</div>
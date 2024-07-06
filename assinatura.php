<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.84.0">
        <title>Assinatura · Clube Idearte</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">

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
        <link href="form-validation.css" rel="stylesheet">
    </head>
    <body class="bg-light">
        
        <div class="container" style="width: 70%; margin: 0px 15% 0px 15%;">

        <main>
            <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
            <h2><b>Clube Idearte</b></h2>
            <p class="lead" style="line-height: 24px;">Seja bem-vindo ao nosso Clube IDEARTE, onde transformamos sua vida em um palco de experiências inesquecíveis! Explore o inesquecível mundo do entretenimento e das artes conosco. Junte-se a uma comunidade exclusiva e apaixonada por experiências únicas.</p>
            </div>

            <?php 

            session_start();

            // ALERTAS DE ERROS
            if (isset($_SESSION['flash_error'])) {

                echo "
                    <div class='alert alert-danger' role='alert'>".$_SESSION['flash_error']."</div>
                ";
                
                unset($_SESSION['flash_error']);
            }

            ?>

            <div class="row g-5">
            <div class="col-md-5 col-lg-4 order-md-last">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-primary">Assinatura</span>
                </h4>
                <ul class="list-group mb-3">

                <li class="list-group-item d-flex justify-content-between lh-sm">
                    <div class="">
                    <h6 class="my-0">Assinatura Anual</h6>
                    <small>clube idearte</small>
                    </div>
                    <span class="">R$19,90/mês</span>
                </li>

                <div style="display: show;" id="card">
                    <li class="list-group-item d-flex justify-content-between bg-light">
                        <div class="text-success">
                        <h6 class="my-0">Pagamento em até 12X</h6>
                        <small>cartão de crédito</small>
                        </div>
                        <span class="text-success">R$238,80</span>
                    </li>
                </div>

                <div style="display: none;" id="debit">
                    <li class="list-group-item d-flex justify-content-between bg-light">
                        <div class="text-success">
                        <h6 class="my-0">Pagamento à vista</h6>
                        <small>débito</small>
                        </div>
                        <span class="text-success">R$214,92</span>
                    </li>
                </div>

                <div style="display: none;" id="pix">
                    <li class="list-group-item d-flex justify-content-between bg-light">
                        <div class="text-success">
                        <h6 class="my-0">Pagamento à vista</h6>
                        <small>pix</small>
                        </div>
                        <span class="text-success">R$214,92</span>
                    </li>
                </div>

                <li class="list-group-item d-flex justify-content-between">
                    <span>Total</span>
                    <strong id="sem_desc" style="display: show;">R$238,80</strong>
                    <strong id="com_desc" style="display: none;">R$214,92</strong>
                </li>
                </ul>

                <form class="needs-validation" method="post" action="php/cadastro.php" novalidate>

                <hr class="my-4">

                <span class="text-primary"><h4>Pagamento</h4></span>

                <div class="my-3">
                    <div class="form-check">
                    <input id="credit" name="paymentMethod" type="radio" value="1" class="form-check-input" checked required>
                    <label class="form-check-label" id="link_card" style="cursor: pointer;" for="credit">Cartão de crédito (12X sem juros)</label>
                    </div>

                    <div class="form-check">
                    <input id="debits" name="paymentMethod" type="radio" value="2" class="form-check-input" id="card1_radio" required>
                    <label class="form-check-label" id="link_debit" style="cursor: pointer;" for="debits">Cartão de débito (10% de desconto)</label>
                    </div>

                    <div class="form-check">
                    <input id="paypal" name="paymentMethod" type="radio" value="3" class="form-check-input" id="pix_radio" required>
                    <label class="form-check-label" id="link_pix" style="cursor: pointer;" for="paypal">PIX (10% de desconto)</label>
                    </div>
                </div>

                <div class="row gy-3">
                    <div class="col-md-6" style="display: none;">
                    <label for="cc-name" class="form-label">Name on card</label>
                    <input type="text" class="form-control" id="cc-name" placeholder="" required>
                    <small class="text-muted">Full name as displayed on card</small>
                    <div class="invalid-feedback">
                        Name on card is required
                    </div>
                    </div>

                    <div class="col-md-6" style="display: none;">
                    <label for="cc-number" class="form-label">Credit card number</label>
                    <input type="text" class="form-control" id="cc-number" placeholder="" required>
                    <div class="invalid-feedback">
                        Credit card number is required
                    </div>
                    </div>

                    <div class="col-md-3" style="display: none;">
                    <label for="cc-expiration" class="form-label">Expiration</label>
                    <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                    <div class="invalid-feedback">
                        Expiration date required
                    </div>
                    </div>

                    <div class="col-md-3" style="display: none;">
                    <label for="cc-cvv" class="form-label">CVV</label>
                    <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                    <div class="invalid-feedback">
                        Security code required
                    </div>
                    </div>
                </div>

                <hr class="my-4">

                <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="termos" id="same-address">
                    <label class="form-check-label" for="same-address" style="font-size: 13px;">Concordo com os termos deste serviço.</label>
                </div>

                <hr class="my-4">

                <button class="w-100 btn btn-primary btn-lg" type="submit">Concluir Assinatura</button>

                <!-- <a href="api/sdk_pix.php"><button class="">Pagar com PIX</button></a> -->

            </div>
            <div class="col-md-7 col-lg-8">
                <span class="text-primary"><h4 class="mb-3">Cadastre-se</h4></span>
                <!-- FORM CONTINUA -->
                    <div class="row g-3">
                        
                        <div class="col-12">
                            <label for="nome" required class="form-label">Nome completo <span class="text-muted"></span></label>
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="nome completo">
                            <div class="invalid-feedback">
                                Please enter a valid email address for shipping updates.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="email" class="form-label">Email <span class="text-muted"></span></label>
                            <input type="email" class="form-control" id="email" name="email" required placeholder="voce@example.com">
                            <div class="invalid-feedback">
                                Please enter a valid email address for shipping updates.
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="telefone" class="form-label">Telefone</label>
                            <input type="text" class="form-control" id="telefone" placeholder="" name="telefone" required>
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="cpf" class="form-label">CPF</label>
                            <input type="text" class="form-control" id="cpf" placeholder="" name="cpf" required>
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="country" class="form-label">Gênero</label>
                            <select class="form-select" name="sexo" id="country" required>
                                <option value="masculino">Masculino</option>
                                <option value="feminino">Feminino</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid country.
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="lastName" class="form-label">Nascimento</label>
                            <input type="date" class="form-control" id="lastName" placeholder="" name="nascimento" required>
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="logradouro" class="form-label">Logradouro</label>
                            <input type="text" class="form-control" id="logradouro" name="logradouro" placeholder="endereço" required>
                            <div class="invalid-feedback">
                                Please enter your shipping address.
                            </div>
                        </div>

                        <div class="col-sm-10">
                            <label for="bairro" class="form-label">Bairro</label>
                            <input type="text" class="form-control" id="bairro" placeholder="bairro" name="bairro" required>
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>

                        <div class="col-sm-2">
                            <label for="numero" class="form-label">Número</label>
                            <input type="text" class="form-control" id="numero" placeholder="" name="numero" required>
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <label for="estado" class="form-label">Estado</label>
                            <input type="text" class="form-control" id="estado" placeholder="estado" name="estado" required>
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <label for="cidade" class="form-label">Cidade</label>
                            <input type="text" class="form-control" id="cidade" placeholder="cidade" name="cidade" required>
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <label for="cep" class="form-label">CEP</label>
                            <input type="text" class="form-control" id="cep" placeholder="" name="cep" required>
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="senha" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="senha" placeholder="" name="senha" required>
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="conf_senha" class="form-label">Confirmar</label>
                            <input type="password" class="form-control" id="conf_senha" placeholder="" name="conf_senha" required>
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>

                    </div>

                    <hr class="my-4">

                    <div class="form-check" style="display:none;">
                        <input type="checkbox" class="form-check-input" id="save-info">
                        <label class="form-check-label" for="save-info">Save this information for next time</label>
                    </div>
                </form>
            </div>
            </div>
        </main>

        <footer class="my-5 text-muted text-center text-small">
        <p class="mt-5 mb-3" style="font-size: 13px; line-height: 17px;">Todos os direitos reservados a Ideart Produções &copy; <?php echo date('Y'); ?> | Desenvolvido por TechPX Digital</p>
        </footer>
        </div>

        <script src="https://code.jquery.com/jquery-3.0.0.js"></script>
        <script src="https://code.jquery.com/jquery-migrate-3.3.2.js"></script>
        <script>
            $(document).ready(function(){
                $("#link_card").click(function(){
                    $("#card").show();
                    $("#sem_desc").show();
                    $("#debit").hide();
                    $("#pix").hide();
                    $("#com_desc").hide();
                });
            });
            $(document).ready(function(){
                $("#link_debit").click(function(){
                    $("#debit").show();
                    $("#com_desc").show();
                    $("#card").hide();
                    $("#pix").hide();
                    $("#sem_desc").hide();
                });
            });
            $(document).ready(function(){
                $("#link_pix").click(function(){
                    $("#pix").show();
                    $("#com_desc").show();
                    $("#card").hide();
                    $("#debit").hide();
                    $("#sem_desc").hide();
                });
            });
        </script>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    </body>
</html>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.84.0">
        <title>Pricing example · Bootstrap v5.0</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/pricing/">

        

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
        <link href="pricing.css" rel="stylesheet">
    </head>

    <body>
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check" viewBox="0 0 16 16">
            <title>Check</title>
            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
        </symbol>
        </svg>

        <div class="container" style="width: 70%; margin: 0px 15% 0px 15%;">
        <header style="margin-top: 20px;">
            <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg>
                <span class="fs-4">Clube Idearte</span>
            </a>

            <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                <a class="me-3 py-2 text-dark text-decoration-none" href="#">Features</a>
                <a class="me-3 py-2 text-dark text-decoration-none" href="#">Enterprise</a>
                <a class="me-3 py-2 text-dark text-decoration-none" href="#">Support</a>
                <a class="py-2 text-dark text-decoration-none" href="#">Pricing</a>
            </nav>
            </div>

            <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
            <h1 class="display-4 fw-normal">Clube Idearte</h1>
            <p class="fs-5 text-muted">Seja bem-vindo ao nosso Clube IDEARTE, onde transformamos sua vida em um palco de experiências inesquecíveis! Explore o inesquecível mundo do entretenimento e das artes conosco. Junte-se a uma comunidade exclusiva e apaixonada por experiências únicas.</p>

            <p class="fs-5 text-muted"></p>
            </div>
        </header>

        <main>
        
            <h2 class="display-6 text-center mb-4" style="margin-top: 50px;">Idearte Experience</h2>


            <div class="container px-4 py-5" id="featured-3">
                <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                    <div class="feature col">
                        <div class="feature-icon bg-primary bg-gradient" style="width: 20%;">
                        <svg class="bi" width="1em" height="1em"><use xlink:href="#collection"/></svg>
                        </div>
                        <h2 style="font-size: 18px; margin-top: 20px;"><b>ENTRADA PREMIUM</b></h2>
                        <p>Acesso aos eventos por uma entrada exclusiva e antecipada, livre de filas e esperas.</p>
                        
                    </div>
                    <div class="feature col">
                        <div class="feature-icon bg-primary bg-gradient" style="width: 20%;">
                        <svg class="bi" width="1em" height="1em"><use xlink:href="#people-circle"/></svg>
                        </div>
                        <h2 style="font-size: 18px; margin-top: 20px;"><b>ENCONTRO E FOTO COM O ÍDOLO*</b></h2>
                        <p>Tenha um momento único e inesquecível com seu ídolo, registrado por um fotógrafo profissional.</p>
                        
                    </div>
                    <div class="feature col">
                        <div class="feature-icon bg-primary bg-gradient" style="width: 20%;">
                        <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"/></svg>
                        </div>
                        <h2 style="font-size: 18px; margin-top: 20px;"><b>PRÉ-VENDA ON-LINE DE INGRESSOS</b></h2>
                        <p>Destinada para shows em grandes arenas, podendo variar de acordo com o local e capacidade de lotação do evento.</p>
                        
                    </div>
                </div>
                <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                    <div class="feature col">
                        <div class="feature-icon bg-primary bg-gradient" style="width: 20%;">
                        <svg class="bi" width="1em" height="1em"><use xlink:href="#collection"/></svg>
                        </div>
                        <h2 style="font-size: 18px; margin-top: 20px;"><b>KIT EXCLUSIVO</b></h2>
                        <p>Receba um kit especial com uma ecobag, um crachá de identificação, copo 3D e boné exclusivos do clube IDEARTE.</p>
                        
                    </div>
                    <div class="feature col">
                        <div class="feature-icon bg-primary bg-gradient" style="width: 20%;">
                        <svg class="bi" width="1em" height="1em"><use xlink:href="#people-circle"/></svg>
                        </div>
                        <h2 style="font-size: 18px; margin-top: 20px;"><b>EVENTOS CULTURAIS</b></h2>
                        <p>Participe de projetos especiais e eventos culturais, peças de teatro, danças e outras manifestações culturais enriquecedoras.</p>
                        
                    </div>
                    <div class="feature col">
                        <div class="feature-icon bg-primary bg-gradient" style="width: 20%;">
                        <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"/></svg>
                        </div>
                        <h2 style="font-size: 18px; margin-top: 20px;"><b>FESTIVAIS TEMÁTICOS</b></h2>
                        <p>Explore festivais de teatro, cinema, música e mais, mergulhando em atmosferas únicas e cheias de energia. (até 50%, a depender do festival).</p>
                    </div>
                </div>
                <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                    <div class="feature col">
                        <div class="feature-icon bg-primary bg-gradient" style="width: 20%;">
                        <svg class="bi" width="1em" height="1em"><use xlink:href="#collection"/></svg>
                        </div>
                        <h2 style="font-size: 18px; margin-top: 20px;"><b>NATAL COMEDY CLUB</b></h2>
                        <p>Aproveite uma seleção dos melhores comediantes do cenário atual, garantindo uma experiência única de entretenimento e riso. (50% em todos os espetáculos do NCC).</p>
                        
                    </div>
                    <div class="feature col">
                        <div class="feature-icon bg-primary bg-gradient" style="width: 20%;">
                        <svg class="bi" width="1em" height="1em"><use xlink:href="#people-circle"/></svg>
                        </div>
                        <h2 style="font-size: 18px; margin-top: 20px;"><b>SORTEIOS</b></h2>
                        <p>SORTEIOS: Ganhe ingressos VIP e outros prêmios incríveis nos exclusivos sorteios do clube IDEARTE</p>
                        
                    </div>
                    <div class="feature col">
                        <div class="feature-icon bg-primary bg-gradient" style="width: 20%;">
                        <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"/></svg>
                        </div>
                        <h2 style="font-size: 18px; margin-top: 20px;"><b>PROMOÇÕES</b></h2>
                        <p>O assinante do Clube IDEARTE tem descontos especiais em produtos e serviços dos nossos parceiros. No Natal Comedy Club o assinante terá desconto de 10% no valor final da comanda de consumo. 
                        </p>
                    </div>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-md-1 mb-3 text-center" style="width: 45%; margin: 0px 30% 0px 30%;">
                <!-- <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">Plano Mensal</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">R$19,90<small class="text-muted fw-light">/mo</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                        <li>10 users included</li>
                        <li>2 GB of storage</li>
                        <li>Email support</li>
                        <li>Help center access</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for free</button>
                    </div>
                    </div>
                </div> -->

                <p class="fs-5 text-muted" style="margin-left: -30px;">Um palco de experiências inesquecíveis por:</p>

                <div class="col" style="margin-left: -30px;">
                    <div class="card mb-4 rounded-3 shadow-sm" style="margin-top: 5%;">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">Assinatura</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">R$19,90*<small class="text-muted fw-light">/mês</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Assine por 12 meses</li>
                            <li>Pagamentos no cartão ou PIX</li>
                            <li>Desconto de 10% em pagamentos a vista</li>
                        </ul>
                        <div style="width: 90%; margin: 0px 5% 0px 5%;">
                        <p style="font-size: 12px; margin-top: 20px; line-height: 12px;">*Todos os benefícios podem variar de acordo com o local, a capacidade de lotação do evento e a disponibilidade do artista.</p></div>
                        <button type="button" class="w-100 btn btn-lg btn-primary">Assine Já</button>
                    </div>
                    </div>
                </div>
            </div>

            <h2 class="display-6 text-center mb-4" style="margin-top: 50px;">Dúvidas Frequentes</h2>

            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Como faço para me associar?
                    </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Para se tornar membro do Clube IDEARTE basta clicar no botão SEJA SÓCIO para realizar o procedimento de cadastro. Durante o cadastro você estará de acordo com o pagamento mensal de R$ 19,90 (dezenove reais e noventa centavos), que será descontado do seu cartão de crédito, e com a fidelização de 12 (doze) meses, período em que você não poderá cancelar sua contratação sem o pagamento de multa no valor de R$ 150,00 (cento e cinquenta reais). Também poderá efetuar o valor total de 214,02 (já incluso desconto de 10% à vista) via PIX ou cartão de débito. </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Quanto tempo depois do cadastro tenho acesso aos benefícios?
                    </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Após realizar o cadastro no Clube IDEARTE, e com a aprovação do pagamento, você já pode utilizar todos os benefícios disponíveis no nosso clube. </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Como utilizar o desconto de ingressos?
                    </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Para compra de ingressos com desconto do Clube IDEARTE, primeiramente verifique se o evento conta com desconto do Clube. A compra de ingressos pode ser realizada através dos canais oficiais de venda (site ou bilheteria), mediante a informação do CPF no ato da compra. O desconto não é acumulativo.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree1">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree1" aria-expanded="false" aria-controls="collapseThree1">
                    Os ingressos são nominais? Posso repassar o meu ingresso? Terceiros terão acesso aos benefícios?
                    </button>
                    </h2>
                    <div id="collapseThree1" class="accordion-collapse collapse" aria-labelledby="headingThree1" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Os ingressos não são nominais e podem ser encaminhados para terceiros. O nome impresso é apenas uma personalização e não tem real valor. Terceiros poderão entrar no evento com o ingresso ligado ao benefício do Clube IDEARTE, porém, não terão acesso aos outros benefícios.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree2">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2">
                    A entrada premium é liberada em todas as casas/teatros e eventos?
                    </button>
                    </h2>
                    <div id="collapseThree2" class="accordion-collapse collapse" aria-labelledby="headingThree2" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>A entrada premium estará disponível em todas as casas, teatros e eventos realizados pela Idearte Produções.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree3">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">
                    Como faço para cancelar o Clube IDEARTE?
                    </button>
                    </h2>
                    <div id="collapseThree3" class="accordion-collapse collapse" aria-labelledby="headingThree3" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>O sócio possui até 07 dias para desistência do plano após a assinatura ou em caso de roubo/furto do cartão. Este cancelamento só será possível se não for utilizado nenhum dos benefícios. Além disso, caso após o período de 12 (doze) meses de fidelização da assinatura, o sócio não quiser mais utilizar os benefícios do Clube IDEARTE, ele poderá solicitar o cancelamento. Porém, como já esclarecido, antes de findar o prazo de 12 (doze) meses, o sócio não poderá cancelar sua contratação sem o pagamento de multa no valor de R$ 150,00 (cento e cinquenta reais). Para mais informações, confira o regulamento completo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <footer class="pt-4 my-md-5 pt-md-5 border-top">
            <div class="row">
            <div class="col-12 col-md">
                <img class="mb-2" src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="24" height="19">
                <small class="d-block mb-3 text-muted">&copy; 2017–2021</small>
            </div>
            <div class="col-6 col-md">
                <h5>Features</h5>
                <ul class="list-unstyled text-small">
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Cool stuff</a></li>
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Random feature</a></li>
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team feature</a></li>
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Stuff for developers</a></li>
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another one</a></li>
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Last time</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Resources</h5>
                <ul class="list-unstyled text-small">
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource</a></li>
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource name</a></li>
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another resource</a></li>
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Final resource</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>About</h5>
                <ul class="list-unstyled text-small">
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team</a></li>
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Locations</a></li>
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Privacy</a></li>
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Terms</a></li>
                </ul>
            </div>
            </div>
        </footer>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idearte Produções</title>
    <!-- CSS -->
    <link rel="stylesheet" href="css/estilo_clube.css">
    <!-- FONTE -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,800&display=swap" rel="stylesheet">

    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.4.2/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- JAVASCRIPT -->
	<script  src="https://code.jquery.com/jquery-3.0.0.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-3.3.2.js"></script>
    <script src="js/javascript.js"></script>
</head>

<style>
    body{
        font-family: "Montserrat", sans-serif; 
    }
</style>

<!-- CORPO -->
<body>
    <header style="background-color: #000000;">
        <!--  -->
        <div class="menu_flutuante" id="box_log" style="display: none;">
            <ul id="mob_menu">
                <a href="/#quem_somos"><li class="mb-[15px] text-[12px] text-[#ffffff] uppercase">Quem somos</li></a>
                <a href="#servicos"><li class="mb-[15px] text-[12px] text-[#ffffff] uppercase">Serviços</li></a>
                <a href="#eventos"><li class="mb-[15px] text-[12px] text-[#ffffff] uppercase">Eventos</li></a>
                <a href="#clientes"><li class="mb-[15px] text-[12px] text-[#ffffff] uppercase">Clientes</li></a>
                <a href="#contato"><li class="mb-[15px] text-[12px] text-[#ffffff] uppercase">Contato</li></a>
                <a href="https://linktr.ee/idearte2022" target="_blank"><li class="mb-[15px] text-[12px] text-[#ffffff] uppercase">Ingressos</li></a>
            </ul>
        </div>
        <!--  -->
        <div id="topo" style="width: 90%; margin: 0px 5% 0px 5%; display: inline-block; background-color: #000000;">
            <!-- LOGO -->
            <div id="logo" class="col_logo">
                <a href="index.html"><img style="width: 150px; margin-top: -25px; margin-left: -10px;" src="img/Logoidearte.PNG" alt="Idearte"></a>
            </div>
            <!-- MENU PRINCIPAL -->
            <div id="menu_p" class="col_menu">

                <ul class="lista_menu">
                    <a href="#quem_somos"><li>Quem somos</li></a>
                    <a href="#servicos"><li >Serviços</li></a>
                    <a href="#eventos"><li >Eventos</li></a>
                    <a href="#clientes"><li >Clientes</li></a>
                    <a href="#contato"><li >Contato</li></a>
                    <a href="https://linktr.ee/idearte2022" target="_blank"><li>Ingressos</li></a>
                </ul>
            </div>
            <!-- NAVEGADOR -->
            <div id="navegate" class="col_nav1">
                <a href="https://www.instagram.com/idearteproducoes/" target="_blank"><button id="bt_insta" class="button_insta1"><img id="logo_ist" class="img_insta_bt" src="img/instagram.png" alt=""> siga no instagram</button></a>
            </div>
            <div id="navegate" class="col_nav2">
                <i id="button_hamburg" data-bs-toggle="modal" data-bs-target="#exampleModal" class="fi fi-br-menu-burger"></i>
                <a href="login.php"><button class="bt_login">Login</button></a>
                <a href="assinatura.php"><button class="bt_socio" style="background-color: #6e18a0;">Seja sócio</button></a>
            </div>
        </div>
    </header>
    
    <!-- TOPO -->
    <header class="fundo_principal1">
        <!-- BLOCO1 -->
        <div id="bloco1">
            <!-- LADOA -->
            <div id="ladoa">
                <!-- <img class="w-[90%] mt-[40px]" src="img/texto_principal.png" alt=""> -->
                <p class="subtitulo">Seja bem vindo ao</p>
                <p class="titulomaster">Clube<b>Idearte.</b></p>
            </div>
            <!-- LADOB -->
            <div id="ladob"></div>
        </div>
    </header>


    <!-- FAIXA -->
    <section>
        <div id="faixa">
            <center>
                <div class="faixa_col"></div>
                <p class="text_faixa">Um palco de experiências pra você <br>por apenas R$19,90 (mensais)</p>
                <a href="assinatura.php"><button class="bt_faixa" style="border: 0px;">QUERO FAZER PARTE</button></a>
           </center>
        </div>
    </section>


    <!--  -->
    <section>
        <div class="fundo_colors">
            <div class="faixa_col"></div>
            <p class="titulo_bloco">VANTAGENS</p>

            <div class="icone_bloco" style="background: linear-gradient(90deg, rgba(21,9,130,1) 0%, rgba(194,39,198,1) 83%);">
                <center>
                <img src="img/DESCONTOS.svg" class="img_icone_bloco" alt="">
                </center>
            </div>
            
            <div class="bloco_transparent"></div>

            <div class="base_text_vantagem" >
                <div class="col_vantagens_bloco1">
                    <center>
                    <p class="text_left_col">Descontos especiais<br>(50%)</p>
                    </center>
                </div>
                <div class="col_vantagens_bloco2">
                    <p class="text_itens_col"><b>AO VIVO:</b> Desfrute de performances ao vivo de artistas renomados e descubra novos talentos em diversos gêneros musicais e teatrais. (até 50%, a depender do espetáculo)</p>
                    <p class="text_itens_col"><b>EVENTOS CULTURAIS:</b> Participe de projetos especiais e eventos culturais, peças de teatro, danças e outras manifestações culturais enriquecedoras. (até 50%, a depender do evento cultural)</p>
                    <p class="text_itens_col"><b>FESTIVAIS TEMÁTICOS:</b> Explore festivais de teatro, cinema, música e mais, mergulhando em atmosferas únicas e cheias de energia. (até 50%, a depender do festival) </p>
                    <p class="text_itens_col"><b>NATAL COMEDY CLUB:</b> Aproveite uma seleção dos melhores comediantes do cenário atual, garantindo uma experiência única de entretenimento e riso. (50% em todos os espetáculos do NATCC).</p>
                </div>
            </div>
        </div>
    </section>


    <!--  -->
    <section>
        <div style="background-color: #000000;" class="base_bloco_vantagens">

            <div class="icone_bloco" style="background: linear-gradient(90deg, rgba(21,9,130,1) 0%, rgba(194,39,198,1) 83%);">
                <center>
                <img src="img/ENTRADA PREMIUM.svg" class="img_icone_bloco" alt="">
                </center>
            </div>
            
            <div class="bloco_colorido">
                <div class="w-[100%] inline-block">
                    <div class="col_vantagens_bloco1">
                        <center>
                        <p class="text_left_col" style="margin-top: 20px;">Entrada <br>Premium</p>
                        </center>
                    </div>
                    <div class="col_vantagens_bloco2" style="margin-top: 10px;">
                        <p class="text_itens_col">Acesso aos eventos por uma entrada exclusiva e antecipada, livre de filas e esperas.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


     <!--  -->
     <section>
        <div style="background-color: #000000;" class="base_bloco_vantagens">

            <div class="icone_bloco" style="background: linear-gradient(90deg, rgba(21,9,130,1) 0%, rgba(194,39,198,1) 83%);">
                <center>
                <img src="img/FOTO COM IDOLO.svg" class="img_icone_bloco" alt="">
                </center>
            </div>
            
            <div class="bloco_colorido">
                <div class="w-[100%] inline-block">
                    <div class="col_vantagens_bloco1">
                        <center>
                        <p class="text_left_col" style="margin-top: 50px;">Encontro e Foto <br>com seu ídolo</p>
                        </center>
                    </div>
                    <div class="col_vantagens_bloco2" style="margin-top: 10px;">
                        <p class="text_itens_col">Tenha um momento único e inesquecível com seu ídolo, registrado por um fotógrafo profissional.</p>
                        <p class="text_itens_col" style="font-size: 12px;"><b>OBSERVAÇÃO:</b> Os encontros com os artistas atenderão às disposições contratuais com cada produção, podendo haver seleção de membros do Clube via concursos culturais.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--  -->
    <section>
        <div style="background-color: #000000;" class="base_bloco_vantagens">

            <div class="icone_bloco" style="background: linear-gradient(90deg, rgba(21,9,130,1) 0%, rgba(194,39,198,1) 83%);">
                <center>
                <img src="img/PRE VENDA.svg" class="img_icone_bloco" alt="">
                </center>
            </div>
            
            <div class="bloco_colorido">
                <div class="w-[100%] inline-block">
                    <div class="col_vantagens_bloco1">
                        <center>
                        <p class="text_left_col" style="margin-top: 20px;">Pré-venda on-line <br>de ingressos</p>
                        </center>
                    </div>
                    <div class="col_vantagens_bloco2" style="margin-top: 10px;">
                        <p class="text_itens_col">Destinada para shows em grandes arenas, podendo variar de acordo com o local e capacidade de lotação do evento.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--  -->
    <section>
        <div style="background-color: #000000;" class="base_bloco_vantagens">

            <div class="icone_bloco" style="background: linear-gradient(90deg, rgba(21,9,130,1) 0%, rgba(194,39,198,1) 83%);">
                <center>
                <img src="img/PROMOCOES.svg" class="img_icone_bloco" alt="">
                </center>
            </div>
            
            <div class="bloco_colorido">
                <div class="w-[100%] inline-block">
                    <div class="col_vantagens_bloco1">
                        <center>
                        <p class="text_left_col" style="margin-top: 20px;">Sorteios <br>e promoções</p>
                        </center>
                    </div>
                    <div class="col_vantagens_bloco2" style="margin-top: 10px;">
                        <p class="text_itens_col">Ganhe ingressos VIP e outros prêmios incríveis nos exclusivos sorteios do Clube IDEARTE: CONCURSOS CULTURAIS; SORTEIOS EXCLUSIVOS DE INGRESSOS; SORTEIOS DE PRÊMIOS;</p>
                        <p class="text_itens_col">O assinante do Clube IDEARTE tem descontos especiais em produtos e serviços dos nossos parceiros. No Natal Comedy Club o assinante terá desconto de 10% no valor final da comanda de consumo.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--  -->
    <section>
        <div style="background-color: #000000;" class="base_bloco_vantagens">

            <div class="icone_bloco" style="background: linear-gradient(90deg, rgba(21,9,130,1) 0%, rgba(194,39,198,1) 83%);">
                <center>
                <img src="img/ATENDIMENTO PERSONALIZADO.png" class="img_icone_bloco" alt="">
                </center>
            </div>
            
            <div class="bloco_colorido">
                <div class="w-[100%] inline-block">
                    <div class="col_vantagens_bloco1">
                        <center>
                        <p class="text_left_col" style="margin-top: 55px;">Atendimento <br>Personalizado</p>
                        </center>
                    </div>
                    <div class="col_vantagens_bloco2" style="margin-top: 10px;">
                        <p class="text_itens_col"><b>EQUIPE DEDICADA:</b> Nossa equipe está pronta para esclarecer dúvidas e fornecer recomendações personalizadas.</p>
                        <p class="text_itens_col"><b>EXPERIÊNCIA INESQUECÍVEL:</b> Garanta suporte para tornar cada momento no Clube IDEARTE verdadeiramente memorável.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--  -->
    <section>
        <div style="background-color: #000000;" class="base_bloco_vantagens">

            <div class="icone_bloco" style="background: linear-gradient(90deg, rgba(21,9,130,1) 0%, rgba(194,39,198,1) 83%);">
                <center>
                <img src="img/KIT EXCLUSIVO.png" class="img_icone_bloco" alt="">
                </center>
            </div>
            
            <div class="bloco_colorido">
                <div class="w-[100%] inline-block">
                    <div class="col_vantagens_bloco1">
                        <center>
                        <p class="text_left_col" style="margin-top: 50px;">KIT <br>Exclusivo</p>
                        </center>
                    </div>
                    <div class="col_vantagens_bloco2" style="margin-top: 10px;">
                        <p class="text_itens_col">Receba um kit especial com uma ecobag, um crachá de identificação, um copo e um boné exclusivos do Clube IDEARTE.
                        </p>
                        <p class="text_itens_col">(Para os 100 primeiros assinantes do Clube.)</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--  -->
    <section>
        <div style="background-color: #000000;" class="base_bloco_vantagens">
            <center>
                <p style="font-size: 12px; color: #ffffff; margin: 0px; padding: 0px;">* Todos os benefícios podem variar de acordo com o local, a capacidade de lotação do evento e a disponibilidade do artista.</p>
            </center>
        </div>
    </section>

    <!--  -->
    <section>
        <div style="background-color: #000000;" class="base_bloco_vantagens">
            <div style="width: 100%; height: 20px;"></div>
            <center>
            <p class="titulo_bloco">PLANO DE ASSINATURA</p>
            </center>
            <div style="width: 100%; height: 20px;"></div>

            <div class="div_valor_base" style="margin: 40px 0px;">
                <div class="ladob_valor" style="width: 100%; padding: 0px 0%;">
                    <div style="width: 100%; display: inline-block">
                        <div class="box_pagamento1">
                            <center>
                            <p style="font-size: 30px; margin-top: -15px; font-weight: bold;">MENSAL</p>
                            <p style="font-size: 40px; margin-top: -15px; font-weight: bold;">R$19,90</p>
                            <p style="font-size: 20px; margin-top: -15px;">Total: R$ 238,80</p>
                            <p style="font-size: 16px; margin-top: -15px; font-weight: bold;">Pagamento via cartão de crédito</p>
                            <a href="assinatura.php"><button class="bt_faixa">ASSINAR AGORA</button></a>
                            </center>
                        </div>
                        <div class="box_pagamento2">
                            <center>
                            <p style="font-size: 30px; margin-top: -15px; font-weight: bold;">ANUAL</p>
                            <p style="font-size: 40px; margin-top: -15px; font-weight: bold;"><s>R$ 19,90</s></p>
                            <p style="font-size: 20px; margin-top: -15px;">Total com 10% de desconto: R$214,92</p>
                            <p style="font-size: 16px; margin-top: -15px; font-weight: bold;">Pagamento via pix ou cartão de débito</p>
                            <a href="assinatura.php"><button class="bt_faixa">ASSINAR AGORA</button></a>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--  -->
    <section>
        <div style="width: 100%; padding: 0px 5%; background-color: #000000;">
            <div style="width: 100%; height: 20px;"></div>
            <center>
            <p class="titulo_bloco">DÚVIDAS FREQUENTES</p>
            </center>
            <div style="width: 100%; height: 20px;"></div>

            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="background-color: #ffffff; color: #000000;">
                    Como faço para me associar?
                    </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body" style="background-color: #000000; color: #ffffff;">
                            <p>Para se tornar membro do Clube IDEARTE basta clicar no botão SEJA SÓCIO e seguir com o procedimento de cadastro. A partir disso você estará de acordo com o pagamento mensais de R$ 19,90 descontados do seu cartão de crédito, e com a fidelização de 12 meses. Nesse período você não poderá cancelar sua assinatura sem o pagamento de multa no valor de R$ 150,00.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="background-color: #ffffff; color: #000000;">
                    Quanto tempo depois do cadastro tenho acesso aos benefícios?
                    </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body" style="background-color: #000000; color: #ffffff;">
                            <p>Após realizar o cadastro no Clube IDEARTE, e com a aprovação do pagamento, você já pode utilizar todos os benefícios disponíveis no nosso clube. </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="background-color: #ffffff; color: #000000;">
                    Como utilizar o desconto de ingressos?
                    </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body" style="background-color: #000000; color: #ffffff;">
                            <p>Para compra de ingressos com desconto do Clube IDEARTE, primeiramente verifique se o evento conta com desconto do Clube. A compra de ingressos pode ser realizada através dos canais oficiais de venda (site ou bilheteria), mediante a informação do CPF no ato da compra. O desconto não é acumulativo.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree1">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree1" aria-expanded="false" aria-controls="collapseThree1" style="background-color: #ffffff; color: #000000;">
                    Os ingressos são nominais? Posso repassar o meu ingresso? Terceiros terão acesso aos benefícios?
                    </button>
                    </h2>
                    <div id="collapseThree1" class="accordion-collapse collapse" aria-labelledby="headingThree1" data-bs-parent="#accordionExample">
                        <div class="accordion-body" style="background-color: #000000; color: #ffffff;">
                            <p>Os ingressos são nominais e instransferiveis, assim como os demais benefícios do Clube.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree2">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2" style="background-color: #ffffff; color: #000000;">
                    A entrada premium é liberada em todas as casas/teatros e eventos?
                    </button>
                    </h2>
                    <div id="collapseThree2" class="accordion-collapse collapse" aria-labelledby="headingThree2" data-bs-parent="#accordionExample">
                        <div class="accordion-body" style="background-color: #000000; color: #ffffff;">
                            <p>A entrada premium estará disponível em todas as casas, teatros e eventos realizados pela Idearte Produções.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree3">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3" style="background-color: #ffffff; color: #000000;">
                    Como faço para cancelar o Clube IDEARTE?
                    </button>
                    </h2>
                    <div id="collapseThree3" class="accordion-collapse collapse" aria-labelledby="headingThree3" data-bs-parent="#accordionExample">
                        <div class="accordion-body" style="background-color: #000000; color: #ffffff;">
                            <p>O sócio possui até 07 dias para desistência do plano após assinatura ou em caso de roubo/furto do cartão, desde que nenhum dos benefícios tenha sido utilizado. Após esse prazo o cancelamento só poderá ser realizado mediante pagamento de multa no valor de R$ 150,00.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div style="width: 100%; height: 100px;"></div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer style="background-color: #000000; width: 100%; display: insline-block;">
        <div class="bloco_footer">
            <!-- BLOCO -->
            <div style="width: 100%; height: 150px; display: inline-block;">
                <!-- BLOCOx1 -->
                <div id="logo_f" class="w-[12%] mx-[2.5%] float-left">
                    <!-- IMAGEM -->
                    <a href="index.html"><img style="width: 150px; color: #ffffff; margin-top: -20px;" src="img/Logoidearte.PNG" alt="Idearte"></a>
                </div>
                <!-- BLOCOx2 -->
                <div id="foot" class="footer1 w-[25%] mx-[2.5%] float-left">
                    <!-- EENDEREÇO -->
                    <P style="font-size: 12px; margin-top: -10px; color: #ffffff; margin-top: 20px;">◉ Av. Salgado Filho, 3510</P>
                    <P style="font-size: 12px; margin-top: -10px; color: #ffffff;">Cnadelária, Natal-RN</P>
                    <P style="font-size: 12px; margin-top: -10px; color: #ffffff;">CEP 59066-800</P>
                </div>
                <!-- BLOCOx3 -->
                <div id="foot" class="footer1 w-[25%] mx-[2.5%] float-left">
                    <!-- CONTATO -->
                    <ul class="lista_footer">
                        <li><p>◉ contato@idearteproducoes.com.br</p></li>
                        <!-- <li><p class="mt-[3px]">◉ Whatsapp: (84) 9604-5528</p></li> -->
                        <li><p>◉ Whatsapp: (84) 99414-0366</p></li>
                    </ul>
                </div>
                <!-- BLOCOx4 -->
                <div id="foot" class="footer2">
                    <ul id="ul_rede" class="lista_rede">
                        <li><a href="https://api.whatsapp.com/send?phone=5584994902293" target="_blank"><img src="img/whatsapp.png" alt="instagram"></a></li>
                        <li><a href="https://www.instagram.com/idearteproducoes/" target="_blank"><img src="img/instagram-free-icon-font.png" alt="instagram"></a></li>
                        <li><a href="https://www.facebook.com/idearteproducoesnatal" target="_blank"><img src="img/facebook-free-icon-font.png" alt="facebook"></a></li>
                        <li><a href="https://www.youtube.com/channel/UCq9oK7BAlBTHwVErVEvTfgQ" target="_blank"><img src="img/youtube-free-icon-font.png" alt="youtube"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul id="mob_menu">
                    <a href="/#quem_somos"><li class="mb-[15px] text-[12px] text-[#ffffff] uppercase">Quem somos</li></a>
                    <a href="#servicos"><li class="mb-[15px] text-[12px] text-[#ffffff] uppercase">Serviços</li></a>
                    <a href="#eventos"><li class="mb-[15px] text-[12px] text-[#ffffff] uppercase">Eventos</li></a>
                    <a href="#clientes"><li class="mb-[15px] text-[12px] text-[#ffffff] uppercase">Clientes</li></a>
                    <a href="#contato"><li class="mb-[15px] text-[12px] text-[#ffffff] uppercase">Contato</li></a>
                    <a href="https://linktr.ee/idearte2022" target="_blank"><li class="mb-[15px] text-[12px] text-[#ffffff] uppercase">Ingressos</li></a>
                </ul>
            </div>
        </div>
    </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>
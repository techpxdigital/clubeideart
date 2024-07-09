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
    
    <p style="font-size: 20px;">Benefícios ativos:</p>

    <div class="container px-4 py-4" id="featured-3">
        <div class="row g-4 py-3 row-cols-1 row-cols-lg-3">
            <div class="feature col">
                <div class="feature-icon bg-primary bg-gradient" style="width: 80px; padding: 15px 0px; border-radius: 20px;">
                    <center><i class="fi fi-br-enter" style="color: #ffffff; font-size: 30px;"></i></center>
                    <img src="img/verificar.png" style="position: absolute; width: 25px; margin: -50px 0px 0px 65px;">
                </div>
                <h2 style="font-size: 18px; margin-top: 20px;"><b>ENTRADA PREMIUM</b></h2>
            </div>
            <div class="feature col">
                <div class="feature-icon bg-primary bg-gradient" style="width: 80px; padding: 15px 0px; border-radius: 20px;">
                    <center><i class="fi fi-br-camera" style="color: #ffffff; font-size: 30px;"></i></center>
                    <img src="img/verificar.png" style="position: absolute; width: 25px; margin: -50px 0px 0px 65px;">
                </div>
                <h2 style="font-size: 18px; margin-top: 20px;"><b>ENCONTRO E FOTO COM O ÍDOLO*</b></h2>
            </div>
            <div class="feature col">
                <div class="feature-icon bg-primary bg-gradient" style="width: 80px; padding: 15px 0px; border-radius: 20px;">
                    <center><i class="fi fi-br-ticket" style="color: #ffffff; font-size: 30px;"></i></center>
                    <img src="img/verificar.png" style="position: absolute; width: 25px; margin: -50px 0px 0px 65px;">
                </div>
                <h2 style="font-size: 18px; margin-top: 20px;"><b>PRÉ-VENDA ON-LINE DE INGRESSOS</b></h2>
            </div>
        </div>
        <div class="row g-4 py-3 row-cols-1 row-cols-lg-3">
            <div class="feature col">
                <div class="feature-icon bg-primary bg-gradient" style="width: 80px; padding: 15px 0px; border-radius: 20px;">
                    <center><i class="fi fi-br-membership-vip" style="color: #ffffff; font-size: 30px;"></i></center>
                    <img src="img/verificar.png" style="position: absolute; width: 25px; margin: -50px 0px 0px 65px;">
                </div>
                <h2 style="font-size: 18px; margin-top: 20px;"><b>KIT EXCLUSIVO</b></h2>
            </div>
            <div class="feature col">
                <div class="feature-icon bg-primary bg-gradient" style="width: 80px; padding: 15px 0px; border-radius: 20px;">
                    <center><i class="fi fi-br-calendar-star" style="color: #ffffff; font-size: 30px;"></i></center>
                    <img src="img/verificar.png" style="position: absolute; width: 25px; margin: -50px 0px 0px 65px;">
                </div>
                <h2 style="font-size: 18px; margin-top: 20px;"><b>EVENTOS CULTURAIS</b></h2>
            </div>
            <div class="feature col">
                <div class="feature-icon bg-primary bg-gradient" style="width: 80px; padding: 15px 0px; border-radius: 20px;">
                    <center><i class="fi fi-br-mask-carnival" style="color: #ffffff; font-size: 30px;"></i></center>
                    <img src="img/verificar.png" style="position: absolute; width: 25px; margin: -50px 0px 0px 65px;">
                </div>
                <h2 style="font-size: 18px; margin-top: 20px;"><b>FESTIVAIS TEMÁTICOS</b></h2>
            </div>
        </div>
        <div class="row g-4 py-3 row-cols-1 row-cols-lg-3">
            <div class="feature col">
                <div class="feature-icon bg-primary bg-gradient" style="width: 80px; padding: 15px 0px; border-radius: 20px;">
                    <center><i class="fi fi-br-theater-masks" style="color: #ffffff; font-size: 30px;"></i></center>
                    <img src="img/verificar.png" style="position: absolute; width: 25px; margin: -50px 0px 0px 65px;">
                </div>
                <h2 style="font-size: 18px; margin-top: 20px;"><b>NATAL COMEDY CLUB</b></h2>
            </div>
            <div class="feature col">
                <div class="feature-icon bg-primary bg-gradient" style="width: 80px; padding: 15px 0px; border-radius: 20px;">
                    <center><i class="fi fi-br-gift" style="color: #ffffff; font-size: 30px;"></i></center>
                    <img src="img/verificar.png" style="position: absolute; width: 25px; margin: -50px 0px 0px 65px;">
                </div>
                <h2 style="font-size: 18px; margin-top: 20px;"><b>SORTEIOS</b></h2>
            </div>
            <div class="feature col">
                <div class="feature-icon bg-primary bg-gradient" style="width: 80px; padding: 15px 0px; border-radius: 20px;">
                    <center><i class="fi fi-br-megaphone" style="color: #ffffff; font-size: 30px;"></i></center>
                    <img src="img/verificar.png" style="position: absolute; width: 25px; margin: -50px 0px 0px 65px;">
                </div>
                <h2 style="font-size: 18px; margin-top: 20px;"><b>PROMOÇÕES</b></h2>
                </p>
            </div>
        </div>
    </div>
    
    ';
}

else{
    echo "
    
    <div class='alert alert-danger' role='alert'>
        Seu pagamento ainda está pendente, realize seu pagamento ou <a href=''>atualize seu status</a>!
        <button type='button' style='float: right; font-size: 11px;' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#exampleModal'>Pagar agora</button>
    </div>
    <div style='widht: 100%; height: 100vh'></div>
    
    ";
}

?>

<footer class="pt-3 mt-4 text-body-secondary border-top">
    <small>Todos os direitos reservados a Idearte Produção &copy; <?php echo date('Y') ?></small>
</footer>
<div style="width: 100%; height: 20px;"></div>
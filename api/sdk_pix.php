<?php 

$access_token = 'APP_USR-1925364150244385-070318-d0be4460f42281c98819ff966fb8767b-1802086025';

require_once '../vendor/autoload.php';

use MercadoPago\MercadoPagoConfig;
use MercadoPago\Client\Payment\PaymentClient;

$amount = 150.6;

$payment = new Payment(1);

$payCreate = $payment->addPayment($amount);

if ($payCreate) {
    
    MercadoPagoConfig::setAccessToken($access_token);
    $client = new PaymentClient();

    $createRequest = [
        "transaction_amount" => $amount,
        "description" => "description",
        "external_reference" => $payCreate,
        "notification_url" => "https://www.google.com/",
        "payment_method_id" => "pix",
        "payer" => [
            "email" => "gemensonfranca@outlook.com",
        ]
    ];

    $payment = $client->create($createRequest);

    if (isset($payment->id)) {
        if ($payment->id != NULL) {
            
            $copia_cola   = $obj->point_of_interaction->transaction_data->qr_code;
            $img_qrcode   = $obj->point_of_interaction->transaction_data->qr_code_base64;
            $link_externo = $obj->point_of_interaction->transaction_data->ticket_url;
    
            echo "<img src='data:image/png;base64, {$img_qrcode}' width='200' /><br/>";
            echo "<textarea>{$copia_cola}</textarea><br/>";
        }
    }
}
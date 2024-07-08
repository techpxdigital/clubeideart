<?php

$access_token = 'APP_USR-1925364150244385-070318-d0be4460f42281c98819ff966fb8767b-1802086025';

$body = json_decode(file_get_contents('php://input'));

if (isset($body->data->id)) {

    $id   = $body->data->id;
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.mercadopago.com/v1/payments/'.$id,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Authorization: Bearer ' . $access_token
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    // echo $response;

    $payment = json_decode($response);

    if (isset($payment->id)) {
        
        $external_ref = $payment->external_reference;
        $status_pay   = $payment->status;
    }
}

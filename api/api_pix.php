<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.mercadopago.com/v1/payments',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
    "description": "Payment for product",
    "external_reference": "MP001",
    "payer": {
        "email": "teste_user_123@gmail.com",
        "identification": {
            "type": "CPF",
            "number": "09570212403"
        } 
    },
    "payment_method_id": "pix",
    "transaction_amount": 58.8
}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'X-Idempotency-Key: 0d5020ed-1af6-469c-ae06-c3bec19954bb',
    'Authorization: Bearer APP_USR-1925364150244385-070318-d0be4460f42281c98819ff966fb8767b-1802086025'
  ),
));

$response = curl_exec($curl);

curl_close($curl);

//echo $response;

$obj = json_decode($response);

if (isset($obj->id)) {
    if ($obj->id != NULL) {
        
        $copia_cola   = $obj->point_of_interaction->transaction_data->qr_code;
        $img_qrcode   = $obj->point_of_interaction->transaction_data->qr_code_base64;
        $link_externo = $obj->point_of_interaction->transaction_data->ticket_url;

        echo "<img src='data:image/png;base64, {$img_qrcode}' width='200' /><br/>";
        echo "<textarea>{$copia_cola}</textarea><br/>";
    }
}
<?php

$data   = $_GET['data'];
$base64 = base64_decode($data);

$string = explode(',', $base64);
$inform = [
  "nome"  => $string[0],
  "email" => $string[1],
  "cpf"   => $string[2],
  "pay"   => $string[3],
];

// CREDENCIAIS
$access_token = 'APP_USR-1925364150244385-070318-d0be4460f42281c98819ff966fb8767b-1802086025';
$code_random  = random_int(100000000, 999999999);

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
  CURLOPT_POSTFIELDS => '{
    "description": "Clube Idearte",
    "external_reference": "IP001",
    "payer": {
        "email": '.@$inform['email'].',
        "identification": {
            "type": "CPF",
            "number": '.@$inform['cpf'].'
        } 
    },
    "payment_method_id": "pix",
    "transaction_amount": 214.92
}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'X-Idempotency-Key: '."$code_random",
    'Authorization: Bearer APP_USR-1925364150244385-070318-d0be4460f42281c98819ff966fb8767b-1802086025'
  ),
));

$response = curl_exec($curl);

curl_close($curl);

// echo $response;

$obj = json_decode($response);

if (isset($obj->id)) {
  if ($obj->id != NULL) {

    $copia_cola   = $obj->point_of_interaction->transaction_data->qr_code;
    $img_qrcode   = $obj->point_of_interaction->transaction_data->qr_code_base64;
    $link_externo = $obj->point_of_interaction->transaction_data->ticket_url;

    // echo "<img src='data:image/png;base64, {$img_qrcode}' width='200' /><br/>";
    // echo "<textarea>{$copia_cola}</textarea><br/>";
  }
}

$data_base = [
  "link" => $link_externo,
  "pay"  => $inform['pay'],
];

$string_base = implode(",", $data_base);
$base64      = base64_encode($string_base);

header("Location: ../checkout.php?data=".$base64);

?>
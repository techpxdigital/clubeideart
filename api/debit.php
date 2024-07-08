<?php

$access_token = "TEST-1925364150244385-070318-29c4b2969650cacaa8931a659bdc1cee-1802086025";
$code_random  = random_int(100000000, 999999999);

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.mercadopago.com/checkout/preferences',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => '{
    "back_urls": {
        "success": "http://test.com/success",
        "pending": "http://test.com/pending",
        "failure": "http://test.com/failure"
    },
    "external_reference": '.$code_random.',
    "notification_url": "https://google.com",
    "auto_return": "approved",
    "items": [
        {
        "title": "Clube Idearte",
        "description": "Assinatura do clube de vantagens",
        "picture_url": "http://www.myapp.com/myimage.jpg",
        "category_id": "assinatura",
        "quantity": 1,
        "currency_id": "BRL",
        "unit_price": 238.80
        }
    ],  
    "payer": {
        "name": "John",
        "email": '.@$email.',
        "identification": {
            "type": "CPF",
            "number": '.@$cpf.'
        } 
    },
    "payment_methods": {
        "excluded_payment_methods": [
            {
                "id": "pix"
            }
        ],
        "excluded_payment_types": [
            {
                "id": "ticket"
            },
            {
                "id": "credit_card"
            }
        ]
    }
    }',
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json',
        'Authorization: Bearer '.$access_token
    ),
));

$response = curl_exec($curl);

curl_close($curl);

// echo $response;

$obj = json_decode($response);

if (isset($obj->id)) {
  if ($obj->id != NULL) {

    $link_externo = $obj->init_point;
  }
}

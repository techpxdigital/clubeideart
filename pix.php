<?php 

$access_token = "";

require_once 'vendor/autoload.php';

MercadoPago\SDK::setAccessToken();

$preference = new MercadoPago\Preference();



?>
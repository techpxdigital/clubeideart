<?php 

// CONEXÃO MYSQL
include_once "php/conexao.php";

$status_pay   = $_GET['status'];
$external_ref = $_GET['external_reference'];

if ($status_pay === "approved") {
            
    $stmt = $conn->prepare('UPDATE pedidos SET stts = "approved" WHERE pedido = :ref');
    $stmt->execute(array(
        ':ref' => $external_ref,
    ));
}

header("Location: login.php");

?>
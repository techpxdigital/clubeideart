<?php

// INICIAR SESSÃO
session_start();

include_once "conexao.php";

$code    = $_POST['code'];
$id_user = $_POST['id_user'];

// RESGATAR USUÁRIO
$stmt = $conn->prepare('SELECT * FROM usuarios WHERE id = :id');
$stmt->bindParam(':id', $id_user);
$stmt->execute();
$results = $stmt->fetchAll();

foreach ($results as $usuario) {
    $validar_db = $usuario['validar'];
}

if ($code === $validar_db) {
    
    // ATUALIZAR SENHA
    $stmt = $conn->prepare('UPDATE usuarios SET validar = :validar WHERE id = :id');
    $stmt->execute(array(
        ':id'      => $id_user,
        ':validar' => "varificado",
    ));

    $_SESSION['flash_success'] = "Sua conta foi verificada com sucesso!";

    header("Location: ../dashboard.php");
}
else{
    header("Location: ../dashboard.php");
}

?>
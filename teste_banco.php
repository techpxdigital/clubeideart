<?php

// https://ideartepay.000webhostapp.com/api/pix.php
// https://ideartepay.000webhostapp.com/api/card.php

$hostname = '127.0.0.1';
$dbname   = 'ideartep_clube';
$username = 'ideartep_produc';
$password = 'IEQ9RO&_OLWH';

try {
    $conn = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare('SELECT * FROM usuarios');
    $stmt->execute();
    $result = $stmt->fetchAll();

    foreach ($result as $user) {
        $nome = $user['nome'];

        echo "<p>$nome</p><br>";
    }

} catch (PDOException $e) {
    echo 'Erro na conexão: ' . $e->getMessage();
}

?>
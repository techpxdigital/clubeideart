<?php

// INICIAR SESSÃO
session_start();

// CONEXÃO MYSQL
include_once "conexao.php";

$dados = [
    "titulo"    => $_POST['titulo'],
    "autor"     => $_POST['autor'],
    "editora"   => $_POST['editora'],
    "categoria" => $_POST['categoria'],
    "ano"       => $_POST['ano'],
    "paginas"   => $_POST['paginas'],
    "isbn_issn" => $_POST['isbn_issn'],
    "sintese"   => $_POST['sintese'],
    "formato"   => $_POST['formato'],
    "valor"     => $_POST['valor'],
    "link"      => $_POST['link'],
];

foreach ($dados as $input) {

    if (empty($input)) {

        $_SESSION['flash_error'] = "Preencha todos os campos obrigatórios!";
        header("Location: ../editora.php");
    }
}

// REGISTRO DE IMAGEM 1
if(!empty($_FILES['imagem']['name'])) {

    $path1     = $_FILES['imagem']['name'];
    $ext1      = pathinfo($path1, PATHINFO_EXTENSION);
	$new_name1 = rand().".".$ext1;
	$dir1      = '../img/livros/';
	move_uploaded_file($_FILES['imagem']['tmp_name'], $dir1.$new_name1);
	$nome_img1 = $new_name1;

    // REGISTRAR INFORMAÇÕES NO BANCO
    $stmt = $conn->prepare('INSERT INTO livros(titulo, autor, editora, categoria, ano, paginas, isbn_issn, sintese, imagem, formato, valor, link) VALUES(:titulo, :autor, :editora, :categoria, :ano, :paginas, :isbn_issn, :sintese, :imagem, :formato, :valor, :link)');
    $stmt->execute(array(
        ':titulo'    => $dados['titulo'],
        ':autor'     => $dados['autor'],
        ':editora'   => $dados['editora'],
        ':categoria' => $dados['categoria'],
        ':ano'       => $dados['ano'],
        ':paginas'   => $dados['paginas'],
        ':isbn_issn' => $dados['isbn_issn'],
        ':sintese'   => $dados['sintese'],
        ':imagem'    => $nome_img1,
        ':formato'   => $dados['formato'],
        ':valor'     => $dados['valor'],
        ':link'      => $dados['link'],
    ));

    $_SESSION['flash_success'] = "Livro adicionado com sucesso!";
    header("Location: ../editora.php");
}

header("Location: ../editora.php");
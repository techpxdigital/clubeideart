<?php

// INICIAR SESSÃO
session_start();

// CONEXÃO COM BANCO MYSQL
include_once "conexao.php";

// RECUPERAR INFORMAÇÕES DO FORMULÁRIO
$titulo    = $_POST['titulo'];
$autor     = $_POST['autor'];
$editora   = $_POST['editora'];
$ano       = $_POST['ano'];
$paginas   = $_POST['paginas'];
$isbn_issn = $_POST['isbn_issn'];
$sintese   = $_POST['sintese'];
$formato   = $_POST['formato'];
$valor     = $_POST['valor'];
$link      = $_POST['link'];
$id_livro  = $_POST['id_livro'];

// ATUALIZAR TÍTULO      
$stmt = $conn->prepare('UPDATE livros SET titulo = :titulo WHERE id = :id');
$stmt->execute(array(
    ':id'     => $id_livro,
    ':titulo' => $titulo,
));

// ATUALIZAR AUTOR
$stmt = $conn->prepare('UPDATE livros SET autor = :autor WHERE id = :id');
$stmt->execute(array(
    ':id'    => $id_livro,
    ':autor' => $autor,
));

// ATUALIZAR EDITORA
$stmt = $conn->prepare('UPDATE livros SET editora = :editora WHERE id = :id');
$stmt->execute(array(
    ':id'      => $id_livro,
    ':editora' => $editora,
));

// ATUALIZAR ANO
$stmt = $conn->prepare('UPDATE livros SET ano = :ano WHERE id = :id');
$stmt->execute(array(
    ':id'  => $id_livro,
    ':ano' => $ano,
));

// ATUALIZAR PÁGINAS
$stmt = $conn->prepare('UPDATE livros SET paginas = :paginas WHERE id = :id');
$stmt->execute(array(
    ':id'      => $id_livro,
    ':paginas' => $paginas,
));

// ATUALIZAR ISBN
$stmt = $conn->prepare('UPDATE livros SET isbn_issn = :isbn_issn WHERE id = :id');
$stmt->execute(array(
    ':id'        => $id_livro,
    ':isbn_issn' => $isbn_issn,
));

// ATUALIZAR SÍNTESE
$stmt = $conn->prepare('UPDATE livros SET sintese = :sintese WHERE id = :id');
$stmt->execute(array(
    ':id'      => $id_livro,
    ':sintese' => $sintese,
));

// ATUALIZAR FORMATO
$stmt = $conn->prepare('UPDATE livros SET formato = :formato WHERE id = :id');
$stmt->execute(array(
    ':id'      => $id_livro,
    ':formato' => $formato,
));

// ATUALIZAR VALOR
$stmt = $conn->prepare('UPDATE livros SET valor = :valor WHERE id = :id');
$stmt->execute(array(
    ':id'    => $id_livro,
    ':valor' => $valor,
));

// ATUALIZAR LINK
$stmt = $conn->prepare('UPDATE livros SET link = :link WHERE id = :id');
$stmt->execute(array(
    ':id'   => $id_livro,
    ':link' => $link,
));

$_SESSION['flash_success'] = "Livro editado com sucesso!";
header("Location: ../editora.php");

?>
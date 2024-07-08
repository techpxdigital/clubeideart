<div class="p-4 p-md-5 mb-4 text-white rounded bg-dark" style="height: 350px;">
    <div class="col-md-6 px-0">
        <h1 class="display-4 fst-italic"><b>Viaje em Páginas</b></h1>
        <p class="lead my-3">Aprenda, divirta-se, emocione-se, sorria, apaixone-se, mergulhe e surpreenda-se”.</p>
    </div>
</div>

<div class="row mb-2">

    <?php  

    // RECUPERAR VALIDAÇÃO
    $stmt = $conn->prepare('SELECT * FROM livros');
    $stmt->execute();
    $results = $stmt->fetchAll();

    foreach ($results as $livros) {
        $id_edt        = $livros['id'];
        $titulo_edt    = $livros['titulo'];
        $autor_edt     = $livros['autor'];
        $editora_edt   = $livros['editora'];
        $categoria_edt = $livros['categoria'];
        $ano_edt       = $livros['ano'];
        $paginas_edt   = $livros['paginas'];
        $isbn_issn_edt = $livros['isbn_issn'];
        $sintese_edt   = $livros['sintese'];
        $formato_edt   = $livros['formato'];

        $resumido = mb_strimwidth($sintese_edt, 0, 40, "...");

        echo "
        
        <div class='col-md-6'>
            <div class='row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative'>
                <div class='col p-4 d-flex flex-column position-static'>
                    <strong class='d-inline-block mb-2 text-primary'>$categoria_edt</strong>
                    <h3 class='mb-0'>$titulo_edt</h3>
                    <div class='mb-1 text-muted'>$autor_edt</div>
                    <p class='card-text mb-auto'>$resumido</p>
                    <form action='livro.php' method='post'>
                    <input type='hidden' name='id_livro' value='$id_edt'>
                    <button class='btn btn-primary' type='submit'>Ver detalhes</button>
                    </form>
                </div>
                <div class='col-auto d-none d-lg-block'>
                    <svg class='bd-placeholder-img' width='200' height='250' xmlns='http://www.w3.org/2000/svg' role='img' aria-label='Placeholder: Thumbnail' preserveAspectRatio='xMidYMid slice' focusable='false'><title>Placeholder</title><rect width='100%' height='100%' fill='#55595c'/><text x='50%' y='50%' fill='#eceeef' dy='.3em'>Thumbnail</text></svg>
                </div>
            </div>
        </div>
        
        ";
    }

    ?>

</div>
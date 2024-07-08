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
    }
?>

<div class="row mb-2" style="margin-top: 20px;">
    <div class="col-md-6">
    <article class="blog-post" style="height: 100vh;">
        <h2 class="display-5 link-body-emphasis mb-1">Sinopse</h2>
        <p class="blog-post-meta"><?php echo $ano_edt ?> por <b>Editora Idearte</b></p>
        
        <div class="d-flex gap-2 py-3">
            <span class="badge d-flex p-2 align-items-center text-bg-primary rounded-pill" style="background: blue;">
                <span class="px-1"><?php echo $paginas_edt ?> páginas</span>
                <!-- <a href="#"><svg class="bi ms-1" width="16" height="16"><use xlink:href="#x-circle-fill"/></svg></a> -->
            </span>
            <span class="badge d-flex p-2 align-items-center text-primary-emphasis bg-primary-subtle rounded-pill" style="background: blue;">
                <span class="px-1">Formato <?php echo $formato_edt ?></span>
                <!-- <a href="#"><svg class="bi ms-1" width="16" height="16"><use xlink:href="#x-circle-fill"/></svg></a> -->
            </span>
            <span class="badge d-flex p-2 align-items-center text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-pill" style="background: blue;">
                <span class="px-1">ISBN: <?php echo $isbn_issn_edt ?></span>
                <!-- <a href="#"><svg class="bi ms-1" width="16" height="16"><use xlink:href="#x-circle-fill"/></svg></a> -->
            </span>
        </div>

        <p><?php echo $sintese_edt ?></p>
    </article>
    </div>
    <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-primary"><?php echo $categoria_edt ?></strong>
                <h3 class="mb-0"><?php echo $titulo_edt ?></h3>
                <div class="mb-1 text-muted"><?php echo $autor_edt ?></div>
                <div class="mb-1 text-muted">R$123,00</div>
                <button type="button" class="btn btn-primary btn-lg" style="margin-top: 30px; width: 100%;">Compre agora</button>
            </div>
            <div class="col-auto d-none d-lg-block">
                <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                </svg>
            </div>
        </div>
    </div>
</div>
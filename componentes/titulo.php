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
        $img_edt       = $livros['imagem'];
        $formato_edt   = $livros['formato'];
        $valor_edt     = $livros['valor'];
        $link_edt      = $livros['link'];

        $resumido = mb_strimwidth($sintese_edt, 0, 40, "...");
        $preco    = number_format($valor_edt,2,",",".");
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
                <div class="mb-1 text-muted">R$<?php echo $preco ?></div>
                <a href="<?php echo $link_edt ?>" target="_blank"><button type="button" class="btn btn-primary btn-lg" style="margin-top: 30px; width: 100%; background-color: #6e18a0; border">Compre agora</button></a>
            </div>
            <div class="col-auto d-none d-lg-block">
                <div class='col-auto d-none d-lg-block'>
                    <div style='width: 200px; height: 250px; background-image: url(img/livros/<?php echo $img_edt ?>); background-size: 100%;'>.</div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="pt-3 mt-4 text-body-secondary border-top">
    <small>Todos os direitos reservados a Editora Idearte &copy; <?php echo date('Y') ?></small>
</footer>
<div style="width: 100%; height: 20px;"></div>
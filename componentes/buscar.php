<div class="row mb-2" style="height: 100vh;">

    <?php  

    $busca = $_POST['pesquisa'];

    $termSearch = '%'.$busca.'%';
    $query = "SELECT liv.id, liv.*, cat.*, (SELECT COUNT(*) FROM livros) AS count_gal
            FROM livros AS liv
            LEFT JOIN categorias AS cat ON liv.categoria = cat.id
            WHERE liv.categoria <> '' AND (liv.titulo LIKE :termSearch OR liv.autor LIKE :termSearch)
            AND liv.categoria IS NOT NULL
            ORDER BY liv.id DESC;";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(":termSearch", $termSearch, PDO::PARAM_STR);
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

        $resumido = mb_strimwidth($sintese_edt, 0, 40, "...");

        echo "
        
        <div class='col-md-6'>
            <div class='row g-0 border rounded overflow-hidden flex-md-row mb-2 shadow-sm h-md-250 position-relative'>
                <div class='col p-4 d-flex flex-column position-static'>
                    <strong class='d-inline-block mb-2 text-primary'>$categoria_edt</strong>
                    <h3 class='mb-0'>$titulo_edt</h3>
                    <div class='mb-1 text-muted'>$autor_edt</div>
                    <p class='card-text mb-auto'>$resumido</p>
                    <form action='livro.php' method='post'>
                    <input type='hidden' name='id_livro' value='$id_edt'>
                    <button class='btn btn-primary' type='submit' style='background-color: #6e18a0; border;'>Ver detalhes</button>
                    </form>
                </div>
                <div class='col-auto d-lg-block'>
                    <div style='width: 200px; height: 250px; background-image: url(img/livros/$img_edt); background-size: 100%;'>.</div>
                </div>
            </div>
        </div>
        
        ";
    }

    ?>

</div>
<footer class="pt-3 mt-4 text-body-secondary border-top">
    <small>Todos os direitos reservados a Editora Idearte &copy; <?php echo date('Y') ?></small>
</footer>
<div style="width: 100%; height: 20px;"></div>
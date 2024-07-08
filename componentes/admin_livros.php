<main style="height: 100vh;">
    <div class="row">
        <div class="col-6">
            <h1 style="margin-bottom: 50px;"><b>Lista de Livros</b></h1>
        </div>
        <div class="col-6"><button type="button" data-bs-toggle="modal" data-bs-target="#exampleModalSix" class="btn btn-primary btn-lg" style="float: right; margin-top: 5px;">Adicionar livro</button></div>
    </div>

    <h2>Títulos</h2>
    <div class="table-responsive small">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Título</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Editora</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">ISBN/ISSN</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
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

                    echo "
                    
                    <tr>
                        <td>$id_edt</td>
                        <td>$titulo_edt</td>
                        <td>$autor_edt</td>
                        <td>$editora_edt</td>
                        <td>$isbn_issn_edt</td>
                        <td>$categoria_edt</td>
                        <td>
                            <button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#exampleModal$id_edt' style='font-size: 10px;'>Editar título</button>
                        </td>
                        <td>
                            <button type='button' class='btn btn-secondary' data-bs-toggle='modal' data-bs-target='#exampleModaltwo$id_edt' style='font-size: 10px;'>Excluir titulo</button>
                        </td>
                    </tr>

                    <!-- Modal -->
                    <div class='modal fade' id='exampleModal$id_edt' tabindex='-1' aria-labelledby='exampleModalLabel$id_edt' aria-hidden='true'>
                        <div class='modal-dialog'>
                            <div class='modal-content'>
                                <div class='modal-header'>
                                    <h1 class'modal-title fs-5' id='exampleModalLabel$id_edt' style='font-size: 20px;'><b>$titulo_edt</b></h1>
                                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                </div>
                                <form action='' method='post'>
                                <div class='modal-body'>
                                    <div class='form-floating' style='margin-top: 10px;'>
                                        <input type='text' class='form-control' id='floatingPassword' name='titulo' value='$titulo_edt' placeholder='Títilo'>
                                        <label for='floatingPassword'>Títilo</label>
                                    </div>
                                    <div class='form-floating' style='margin-top: 10px;'>
                                        <input type='text' class='form-control' id='floatingPassword' name='autor' value='$autor_edt' placeholder='Autor'>
                                        <label for='floatingPassword'>Autor</label>
                                    </div>
                                    <div class='form-floating' style='margin-top: 10px;'>
                                        <input type='text' class='form-control' id='floatingPassword' name='editora' value='$editora_edt' placeholder='Editora'>
                                        <label for='floatingPassword'>Editora</label>
                                    </div>
                                    <div class='input-group mb-3' style='height: 55px; margin-top: 10px;'>
                                        <label class='input-group-text' for='inputGroupSelect01'>Categoria</label>
                                        <select class='form-select' id='inputGroupSelect01' name='categoria'>
                                            <option value='masculino'>Masculino</option>
                                            <option value='feminino'>Feminino</option>
                                        </select>
                                    </div>
                                    <div class='form-floating' style='margin-top: 10px;'>
                                        <input type='text' class='form-control' id='floatingPassword' name='ano' value='$ano_edt' placeholder='Ano lançamento'>
                                        <label for='floatingPassword'>Ano lançamento</label>
                                    </div>
                                    <div class='form-floating' style='margin-top: 10px;'>
                                        <input type='text' class='form-control' id='floatingPassword' name='paginas' value='$paginas_edt' placeholder='Páginas'>
                                        <label for='floatingPassword'>Páginas</label>
                                    </div>
                                    <div class='form-floating' style='margin-top: 10px;'>
                                        <input type='text' class='form-control' id='floatingPassword' name='isbn_issn' value='$isbn_issn_edt' placeholder='ISBN/ISSN'>
                                        <label for='floatingPassword'>ISBN/ISSN</label>
                                    </div>
                                    <div class='form-floating'>
                                        <textarea class='form-control' name='sintese' placeholder='Leave a comment here' id='floatingTextarea2' style='height: 100px'>$sintese_edt</textarea>
                                        <label for='floatingTextarea2'>Síntese</label>
                                    </div>
                                    <div>
                                        <label for='formFileLg' class='form-label'>Imagem</label>
                                        <input class='form-control form-control-lg' id='formFileLg' type='file'>
                                    </div>
                                    <div class='form-floating' style='margin-top: 10px;'>
                                        <input type='text' class='form-control' id='floatingPassword' name='formato' value='$formato_edt' placeholder='Formato'>
                                        <label for='floatingPassword'>Formato</label>
                                    </div>
                                </div>
                                <div class='modal-footer'>
                                    <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Fechar</button>
                                    <button type='button' class='btn btn-primary'>Editar</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class='modal fade' id='exampleModaltwo$id_edt' tabindex='-1' aria-labelledby='exampleModalLabeltwo$id_edt' aria-hidden='true'>
                        <div class='modal-dialog'>
                            <form method='post' action='php/excluir_livro.php'>
                            <div class='modal-content'>
                                <div class='modal-header'>
                                    <h1 class'modal-title fs-5' id='exampleModalLabeltwo$id_edt' style='font-size: 20px;'><b>Excluir livro</b></h1>
                                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                </div>
                                <div class='modal-body'>
                                    <p>Tem certeza que deseja excluir o título $titulo_edt</p>
                                </div>
                                <div class='modal-footer'>
                                    <input type='hidden' value='$id_edt' name='id_livro'>
                                    <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Fechar</button>
                                    <button type='submit' class='btn btn-primary'>Excluir título</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>

                    
                    ";
                }

                ?>
            </tbody>
        </table>
    </div>
</main>

<!-- Modal -->
<div class="modal fade" id="exampleModalSix" tabindex="-1" aria-labelledby="exampleModalLabelSix" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabelSix"><b>Adicionar novo livro</b></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="php/add_livro.php" method="post" enctype="multipart/form-data">
            <div class="modal-body">
                <div class='form-floating' style='margin-top: 10px;'>
                    <input type='text' class='form-control' id='floatingPassword' name='titulo' placeholder='Títilo'>
                    <label for='floatingPassword'>Títilo</label>
                </div>
                <div class='form-floating' style='margin-top: 10px;'>
                    <input type='text' class='form-control' id='floatingPassword' name='autor' placeholder='Autor'>
                    <label for='floatingPassword'>Autor</label>
                </div>
                <div class='form-floating' style='margin-top: 10px;'>
                    <input type='text' class='form-control' id='floatingPassword' name='editora' placeholder='Editora'>
                    <label for='floatingPassword'>Editora</label>
                </div>
                <div class='input-group mb-3' style='height: 55px; margin-top: 10px;'>
                    <label class='input-group-text' for='inputGroupSelect01'>Categoria</label>
                    <select class='form-select' id='inputGroupSelect01' name='categoria'>
                        <?php 
                        
                        $stmt = $conn->prepare('SELECT * FROM categorias');
                        $stmt->execute();
                        $resultx = $stmt->fetchAll();
                    
                        foreach ($resultx as $categoria) {
                            $nome_categoria = $categoria['categoria'];

                            echo "<option value='$nome_categoria'>$nome_categoria</option>";
                        }
                        
                        ?>
                    </select>
                </div>
                <div class='form-floating' style='margin-top: 10px;'>
                    <input type='text' class='form-control' id='floatingPassword' name='ano' placeholder='Ano lançamento'>
                    <label for='floatingPassword'>Ano lançamento</label>
                </div>
                <div class='form-floating' style='margin-top: 10px;'>
                    <input type='text' class='form-control' id='floatingPassword' name='paginas' placeholder='Páginas'>
                    <label for='floatingPassword'>Páginas</label>
                </div>
                <div class='form-floating' style='margin-top: 10px;'>
                    <input type='text' class='form-control' id='floatingPassword' name='isbn_issn' placeholder='ISBN/ISSN'>
                    <label for='floatingPassword'>ISBN/ISSN</label>
                </div>
                <div class='form-floating' style='margin-top: 10px;'>
                    <textarea class='form-control' placeholder='Leave a comment here' name="sintese" id='floatingTextarea2' style='height: 100px'></textarea>
                    <label for='floatingTextarea2'>Síntese</label>
                </div>
                <div class="mb-3" style='margin-top: 10px;'>
                    <label for="formFile" class="form-label">Imagem</label>
                    <input class="form-control" name="imagem" type="file" id="formFile">
                </div>
                <div class='form-floating' style='margin-top: 10px;'>
                    <input type='text' class='form-control' id='floatingPassword' name='formato' placeholder='Formato'>
                    <label for='floatingPassword'>Formato</label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary">Adicionar</button>
            </div>
            </form>
        </div>
    </div>
</div>
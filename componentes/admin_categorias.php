<main style="height: 100vh;">
    <div class="row">
        <div class="col-6">
            <h1 style="margin-bottom: 50px;"><b>Lista de categorias</b></h1>
        </div>
        <div class="col-6"><button type="button" data-bs-toggle="modal" data-bs-target="#exampleModalSix" class="btn btn-primary btn-lg" style="float: right; margin-top: 5px;">Adicionar categoria</button></div>
    </div>

    <h2>Categorias</h2>
    <div class="table-responsive small">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Categoria</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php

                // RECUPERAR VALIDAÇÃO
                $stmt = $conn->prepare('SELECT * FROM categorias');
                $stmt->execute();
                $results = $stmt->fetchAll();

                foreach ($results as $categoria) {
                    $id_categoria   = $categoria['id'];
                    $categoria_nome = $categoria['categoria'];

                    echo "
                    
                    <tr>
                        <td>$id_categoria</td>
                        <td>$categoria_nome</td>
                        <td>
                            <button type='button' class='btn btn-secondary' data-bs-toggle='modal' data-bs-target='#exampleModaltwo$id_categoria' style='font-size: 10px;'>Excluir categoria</button>
                        </td>
                    </tr>

                    <!-- Modal -->
                    <div class='modal fade' id='exampleModaltwo$id_categoria' tabindex='-1' aria-labelledby='exampleModalLabeltwo$id_categoria' aria-hidden='true'>
                        <div class='modal-dialog'>
                            <form method='post' action='php/excluir_categoria.php'>
                            <div class='modal-content'>
                                <div class='modal-header'>
                                    <h1 class'modal-title fs-5' id='exampleModalLabeltwo$id_categoria' style='font-size: 20px;'><b>Excluir livro</b></h1>
                                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                </div>
                                <div class='modal-body'>
                                    <p>Tem certeza que deseja excluir a categoria $categoria_nome</p>
                                </div>
                                <div class='modal-footer'>
                                    <input type='hidden' value='$id_categoria' name='id_categoria'>
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
                <h1 class="modal-title fs-5" id="exampleModalLabelSix"><b>Adicionar nova categoria</b></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="php/add_categoria.php" method="post">
            <div class="modal-body">
                <div class='form-floating' style='margin-top: 10px;'>
                    <input type='text' class='form-control' id='floatingPassword' name='categoria' placeholder='Títilo'>
                    <label for='floatingPassword'>Nova categoria</label>
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
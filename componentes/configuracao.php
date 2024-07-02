<main class="config">
    <h1 style="margin-bottom: 50px;"><b>Configuração</b></h1>

    <div class="my-3 p-3 rounded shadow-sm" style="border: 1px solid #eeeeee;">
        <div class="d-flex text-muted pt-3">
            <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>

            <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                <div class="d-flex justify-content-between">
                <strong class="text-gray-dark">Alterar e-mail de acesso</strong>
                <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">Alterar</a>
                </div>
                <span class="d-block"><?php echo $_SESSION['usuario']['email'] ?></span>
            </div>
        </div>
        <div class="d-flex text-muted pt-3">
            <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>

            <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                <div class="d-flex justify-content-between">
                <strong class="text-gray-dark">Alterar senha de acesso</strong>
                <a data-bs-toggle="modal" data-bs-target="#exampleModal1" href="#">Alterar</a>
                </div>
                <span class="d-block">**********</span>
            </div>
        </div>
        <div class="d-flex text-muted pt-3">
            <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>

            <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                <div class="d-flex justify-content-between">
                <strong class="text-gray-dark">Cancelar assinatura</strong>
                <a data-bs-toggle="modal" data-bs-target="#exampleModal2" href="#">Cancelar</a>
                </div>
                <span class="d-block">Próxima cobrança em 19/03/2024</span>
            </div>
        </div>
        <small class="d-block text-end mt-3">
        <a data-bs-toggle="modal" data-bs-target="#exampleModal3" href="#">Excluir conta</a>
        </small>
    </div>
</main>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b>Altera e-mail</b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="php/email.php" method="post">
                <div class="modal-body">
                    <div class="form-floating" style="margin-top: 20px;">
                        <input type="email" class="form-control" id="floatingInput" name="novo_email" placeholder="name@example.com">
                        <label for="floatingInput">Novo e-mail</label>
                    </div>
                    <div class="form-floating" style="margin-top: 10px;">
                        <input type="password" class="form-control" id="floatingPassword" name="atual_senha" placeholder="Password">
                        <label for="floatingPassword">Senha atual</label>
                    </div>
                    <input type="hidden" name="id_user" value="<?php echo $_SESSION['usuario']['id'] ?>">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary">Alterar e-mail</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1"><b>Altera senha</b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="php/senha.php" method="post">
                <div class="modal-body">
                    <div class="form-floating" style="margin-top: 10px;">
                        <input type="password" class="form-control" id="floatingPassword" name="nova_senha" placeholder="Password">
                        <label for="floatingPassword">Nova senha</label>
                    </div>
                    <div class="form-floating" style="margin-top: 10px;">
                        <input type="password" class="form-control" id="floatingPassword" name="conf_senha" placeholder="Password">
                        <label for="floatingPassword">Confirmar nova senha</label>
                    </div>
                    <div class="form-floating" style="margin-top: 10px;">
                        <input type="password" class="form-control" id="floatingPassword" name="atual_senha" placeholder="Password">
                        <label for="floatingPassword">Senha atual</label>
                    </div>
                    <input type="hidden" name="id_user" value="<?php echo $_SESSION['usuario']['id'] ?>">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary">Alterar senha</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel2"><b>Cancelar assinatura</b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="post">
                <div class="modal-body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error ex beatae est praesentium odit, eligendi rem deserunt tenetur quibusdam! Temporibus incidunt autem doloribus. Animi officiis sapiente nobis, enim architecto obcaecati!</p>
                    <div class="form-floating" style="margin-top: 30px;">
                        <input type="password" class="form-control" id="floatingPassword" name="atual_senha" placeholder="Password">
                        <label for="floatingPassword">Senha atual</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary">Cancelar assinatura</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel3" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel3"><b>Excluir conta</b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="php/excluir.php" method="post">
                <div class="modal-body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error ex beatae est praesentium odit, eligendi rem deserunt tenetur quibusdam! Temporibus incidunt autem doloribus. Animi officiis sapiente nobis, enim architecto obcaecati!</p>
                    <div class="form-floating" style="margin-top: 30px;">
                        <input type="password" class="form-control" id="floatingPassword" name="atual_senha" placeholder="Password">
                        <label for="floatingPassword">Senha atual</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary">Excluir definitivamente</button>
                </div>
            </form>
        </div>
    </div>
</div>
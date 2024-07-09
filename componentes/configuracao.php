<main class="config">
    <h1 style="margin-bottom: 50px;"><b>Configuração</b></h1>

    <div class="my-3 p-3 rounded shadow-sm" style="border: 1px solid #eeeeee;">
        <div class="d-flex text-muted pt-3">
            <i class="fi fi-br-user-pen" style="font-size: 25px; color: #007bff; position: absolute; margin-top: -8px;"></i>

            <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                <div class="d-flex justify-content-between">
                <strong class="text-gray-dark" style="margin-left: 40px;">Editar informações pessoais</strong>
                <a data-bs-toggle="modal" data-bs-target="#exampleModal4" href="#">Editar</a>
                </div>
            </div>
        </div>
        <div class="d-flex text-muted pt-3">
            <i class="fi fi-br-house-building" style="font-size: 25px; color: #007bff; position: absolute; margin-top: -8px;"></i>

            <div class="pb-3 mb-0 small lh-sm  w-100">
                <div class="d-flex justify-content-between" >
                <strong class="text-gray-dark" style="margin-left: 40px;">Editar endereço</strong>
                <a data-bs-toggle="modal" data-bs-target="#exampleModal5" href="#">Editar</a>
                </div>
                <span class="d-block" style="margin-left: 40px;"><?php echo "$rua_db, $cidade_db, $estado_db"; ?></span>
            </div>
        </div>
    </div>

    <div class="my-3 p-3 rounded shadow-sm" style="border: 1px solid #eeeeee;">
        <div class="d-flex text-muted pt-3">
            <i class="fi fi-br-at" style="font-size: 25px; color: #007bff; position: absolute; margin-top: -8px;"></i>

            <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                <div class="d-flex justify-content-between">
                <strong class="text-gray-dark" style="margin-left: 40px;">Alterar e-mail de acesso</strong>
                <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">Alterar</a>
                </div>
                <span class="d-block" style="margin-left: 40px;"><?php echo $_SESSION['usuario']['email'] ?></span>
            </div>
        </div>
        <div class="d-flex text-muted pt-3">
            <i class="fi fi-br-lock" style="font-size: 25px; color: #007bff; position: absolute; margin-top: -8px;"></i>

            <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                <div class="d-flex justify-content-between">
                <strong class="text-gray-dark" style="margin-left: 40px;">Alterar senha de acesso</strong>
                <a data-bs-toggle="modal" data-bs-target="#exampleModal1" href="#">Alterar</a>
                </div>
                <span class="d-block" style="margin-left: 40px;">**********</span>
            </div>
        </div>
        <div class="d-flex text-muted pt-3">
            <i class="fi fi-br-cross-circle" style="font-size: 25px; color: #007bff; position: absolute; margin-top: -8px;"></i>

            <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                <div class="d-flex justify-content-between">
                <strong class="text-gray-dark" style="margin-left: 40px;">Cancelar assinatura</strong>
                <a data-bs-toggle="modal" data-bs-target="#exampleModal2" href="#">Cancelar</a>
                </div>
                <span class="d-block" style="margin-left: 40px;">Sem informação de cobrança</span>
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

<!-- Modal -->
<div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel4" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel4"><b>Editar informações pessoais</b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="php/editar_info.php" method="post">
                <div class="modal-body">
                    <div class="form-floating" style="margin-top: 10px;">
                        <input type="text" class="form-control" id="floatingPassword" name="nome" value="<?php echo $nome_db; ?>" placeholder="Nome">
                        <label for="floatingPassword">Nome</label>
                    </div>
                    <div class="form-floating" style="margin-top: 10px;">
                        <input type="date" class="form-control" id="floatingPassword" name="nascimento" value="<?php echo $nasc_db; ?>" placeholder="Nascimento">
                        <label for="floatingPassword">Nascimento</label>
                    </div>
                    <div class="form-floating" style="margin-top: 10px;">
                        <input type="text" class="form-control" id="floatingPassword" name="cpf" value="<?php echo $cpf_db; ?>" placeholder="CPF">
                        <label for="floatingPassword">CPF</label>
                    </div>
                    <div class="form-floating" style="margin-top: 10px;">
                        <input type="text" class="form-control" id="floatingPassword" name="telefone" value="<?php echo $tel_db; ?>" placeholder="Telefone">
                        <label for="floatingPassword">Telefone</label>
                    </div>
                    <input type="hidden" name="id_user" value="<?php echo $id_db; ?>">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary">Atualizar informações</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel5" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel5"><b>Editar endereço</b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="php/editar_end.php" method="post">
                <div class="modal-body">
                    <div class="form-floating" style="margin-top: 10px;">
                        <input type="text" class="form-control" id="floatingPassword" name="logradouro" value="<?php echo $rua_db; ?>" placeholder="Logradouro">
                        <label for="floatingPassword">Logradouro</label>
                    </div>
                    <div class="form-floating" style="margin-top: 10px;">
                        <input type="text" class="form-control" id="floatingPassword" name="bairro" value="<?php echo $bairro_db; ?>" placeholder="Bairro">
                        <label for="floatingPassword">Bairro</label>
                    </div>
                    <div class="form-floating" style="margin-top: 10px;">
                        <input type="text" class="form-control" id="floatingPassword" name="estado" value="<?php echo $estado_db; ?>" placeholder="Estado">
                        <label for="floatingPassword">Estado</label>
                    </div>
                    <div class="form-floating" style="margin-top: 10px;">
                        <input type="text" class="form-control" id="floatingPassword" name="cidade" value="<?php echo $cidade_db; ?>" placeholder="Cidade">
                        <label for="floatingPassword">Cidade</label>
                    </div>
                    <div class="form-floating" style="margin-top: 10px;">
                        <input type="text" class="form-control" id="floatingPassword" name="cep" value="<?php echo $cep_db; ?>" placeholder="CEP">
                        <label for="floatingPassword">CEP</label>
                    </div>
                    <div class="form-floating" style="margin-top: 10px;">
                        <input type="text" class="form-control" id="floatingPassword" name="numero" value="<?php echo $numero_db; ?>" placeholder="Número">
                        <label for="floatingPassword">Número</label>
                    </div>
                    <input type="hidden" name="id_user" value="<?php echo $id_db; ?>">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary">Atualizar endereço</button>
                </div>
            </form>
        </div>
    </div>
</div>

<footer class="pt-3 mt-4 text-body-secondary border-top">
    <small>Todos os direitos reservados a Idearte Produção &copy; <?php echo date('Y') ?></small>
</footer>
<div style="width: 100%; height: 20px;"></div>
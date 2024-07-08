<main style="height: 100vh;">
    <h1 style="margin-bottom: 50px;"><b>Lista de Usuário</b></h1>

    <h2>Assinates</h2>
    <div class="table-responsive small">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Registro</th>
                    <th scope="col">Status</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php 
                
                // RECUPERAR VALIDAÇÃO
                $stmt = $conn->prepare('SELECT * FROM usuarios');
                $stmt->execute();  
                $results = $stmt->fetchAll();

                foreach ($results as $assinante) {
                    $id_ass       = $assinante['id'];
                    $nome_ass     = $assinante['nome'];
                    $email_ass    = $assinante['email'];

                    $nasc_ass     = $assinante['nascimento'];
                    $tel_ass      = $assinante['telefone'];
                    $cpf_ass      = $assinante['cpf'];
                    $rua_ass      = $assinante['logradouro'];
                    $bairro_ass   = $assinante['bairro'];
                    $estado_ass   = $assinante['estado'];
                    $cidade_ass   = $assinante['cidade'];
                    $cep_ass      = $assinante['cep'];
                    $numero_ass   = $assinante['numero'];

                    $registro_ass = $assinante['registro'];
                    $status_ass   = $assinante['stts'];

                    echo "
                    
                    <tr>
                        <td>$id_ass</td>
                        <td>$nome_ass</td>
                        <td>$email_ass</td>
                        <td>$registro_ass</td>
                        <td>$status_ass</td>
                        <td>
                            <button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#exampleModal$id_ass' style='font-size: 10px;'>Detalhes</button>
                        </td>
                        <td>
                            <button type='button' class='btn btn-secondary' data-bs-toggle='modal' data-bs-target='#exampleModaltwo$id_ass' style='font-size: 10px;'>Suspender</button>
                        </td>
                    </tr>

                    <!-- Modal -->
                    <div class='modal fade' id='exampleModal$id_ass' tabindex='-1' aria-labelledby='exampleModalLabel$id_ass' aria-hidden='true'>
                        <div class='modal-dialog'>
                            <div class='modal-content'>
                                <div class='modal-header'>
                                    <h1 class'modal-title fs-5' id='exampleModalLabel$id_ass' style='font-size: 20px;'><b>$nome_ass</b></h1>
                                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                </div>
                                <div class='modal-body'>
                                    <div class='form-floating' style='margin-top: 10px;'>
                                        <input type='text' class='form-control' id='floatingPassword' disabled value='$email_ass' placeholder='CPF'>
                                        <label for='floatingPassword'>E-mail</label>
                                    </div>
                                    <div class='form-floating' style='margin-top: 10px;'>
                                        <input type='text' class='form-control' id='floatingPassword' disabled value='$nasc_ass' placeholder='Nascimento'>
                                        <label for='floatingPassword'>Nascimento</label>
                                    </div>
                                    <div class='form-floating' style='margin-top: 10px;'>
                                        <input type='text' class='form-control' id='floatingPassword' disabled value='$cpf_ass' placeholder='CPF'>
                                        <label for='floatingPassword'>CPF</label>
                                    </div>
                                    <div class='form-floating' style='margin-top: 10px;'>
                                        <input type='text' class='form-control' id='floatingPassword' disabled value='$rua_ass' placeholder='Logradouro'>
                                        <label for='floatingPassword'>Logradouro</label>
                                    </div>
                                    <div class='form-floating' style='margin-top: 10px;'>
                                        <input type='text' class='form-control' id='floatingPassword' disabled value='$bairro_ass' placeholder='Bairro'>
                                        <label for='floatingPassword'>Bairro</label>
                                    </div>
                                    <div class='form-floating' style='margin-top: 10px;'>
                                        <input type='text' class='form-control' id='floatingPassword' disabled value='$bairro_ass' placeholder='Bairro'>
                                        <label for='floatingPassword'>Bairro</label>
                                    </div>
                                    <div class='form-floating' style='margin-top: 10px;'>
                                        <input type='text' class='form-control' id='floatingPassword' disabled value='$estado_ass' placeholder='Estado'>
                                        <label for='floatingPassword'>Estado</label>
                                    </div>
                                    <div class='form-floating' style='margin-top: 10px;'>
                                        <input type='text' class='form-control' id='floatingPassword' disabled value='$cidade_ass' placeholder='Cidade'>
                                        <label for='floatingPassword'>Cidade</label>
                                    </div>
                                    <div class='form-floating' style='margin-top: 10px;'>
                                        <input type'text' class='form-control' id='floatingPassword' disabled value='$cep_ass' placeholder='CEP'>
                                        <label for='floatingPassword'>CEP</label>
                                    </div>
                                    <div class='form-floating' style='margin-top: 10px;'>
                                        <input type='text' class='form-control' id='floatingPassword' disabled value='$numero_ass' placeholder='Número'>
                                        <label for='floatingPassword'>Número</label>
                                    </div>
                                </div>
                                <div class='modal-footer'>
                                    <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Fechar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class='modal fade' id='exampleModaltwo$id_ass' tabindex='-1' aria-labelledby='exampleModalLabeltwo$id_ass' aria-hidden='true'>
                        <div class='modal-dialog'>
                            <div class='modal-content'>
                                <div class='modal-header'>
                                    <h1 class'modal-title fs-5' id='exampleModalLabeltwo$id_ass' style='font-size: 20px;'><b>Suspender assinatura</b></h1>
                                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                </div>
                                <div class='modal-body'>
                                    <p>Tem certeza que deseja suspender a assinatura de $nome_ass</p>
                                </div>
                                <div class='modal-footer'>
                                    <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Fechar</button>
                                    <button type='button' class='btn btn-primary'>Suspender assinatura</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    ";
                }
                
                ?>
            </tbody>
        </table>
    </div>
</main>
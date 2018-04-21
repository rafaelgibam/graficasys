<?php

$ec = new \Controllers\EnderecoController();
    if(isset($_GET) && isset($_GET['a']) && $_GET['a'] == 'd'){
        if(isset($_GET['id'])){
            $ec->deletarEndereco($_GET['id']);
        }
    }
?>
<div class="container-fluid">
    <div class="row mt-3">
        <div class="col-md-12">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <th scope="col">ID</th>
                    <th scope="col">LOGRADOURO</th>
                    <th scope="col">NÚMERO</th>
                    <th scope="col">BAIRRO</th>
                    <th scope="col">MUNICÍPIO</th>
                    <th scope="col">UF</th>
                    <th scope="col">PAIS</th>
                    <th scope="col">COMPLEMENTO</th>
                    <th scope="col">REFERÊNCIA</th>
                    <th scope="col">CEP</th>
                    <th scope="col">Ações</th>
                </thead>
                <tbody>
                <?php foreach ($ec->findAll() as $key => $value) : ?>
                    <tr>
                        <td><?= $value->id ?></td>
                        <td><?= $value->logradouro ?></td>
                        <td><?= $value->numero ?></td>
                        <td><?= $value->bairro ?></td>
                        <td><?= $value->municipio ?></td>
                        <td><?= $value->uf ?></td>
                        <td><?= $value->pais ?></td>
                        <td><?= $value->complemento ?></td>
                        <td><?= $value->referencia ?></td>
                        <td><?= $value->cep ?></td>
                        <td><a href="endereco?a=e&id=<?= $value->id ?>"><i style="font-size: 1.6em;" class="ion-edit mr-2"></i></a>
                        <a href="endereco?a=d&id=<?= $value->id ?>"><i style="font-size: 1.8em; color: red;" class="ion-trash-b"></i></a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="container">
    <!------------------------------------------------------------------------------------------------------------------------------
    --- Formulário de edição
    -------------------------------------------------------------------------------------------------------------------------------->
    <?php
        if(isset($_GET['a']) && $_GET['a'] == 'e'):
            $value = $ec->find($_GET['id']);
    ?>
        <div class="row mt-5">
            <div class="col-md-12">
                <form action="Pages/trataform/trataEndereco.php" method="post">
                    <input type="number" name="id" value="<?= $_GET['id'] ?>" hidden>
                    <div class="form-row">
                        <div class="form-group col-md-10">
                            <label for="logradouro">Logradouro</label>
                            <input type="text" name="logradouro" id="logradouro" class="form-control" value="<?= $value->logradouro ?>">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="numero">Número</label>
                            <input type="text" name="numero" id="numero" class="form-control" value="<?= $value->numero ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="bairro">Bairro</label>
                            <input type="text" name="bairro" id="bairro" class="form-control" value="<?= $value->bairro ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="municipio">Município</label>
                            <input type="text" name="municipio" id="municipio" class="form-control" value="<?= $value->municipio ?>">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="uf">UF</label>
                            <input type="text" name="uf" id="uf" class="form-control" maxlength="2" value="<?= $value->uf ?>">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="pais">Pais</label>
                            <input type="text" name="pais" id="pais" class="form-control" value="<?= $value->pais ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-5">
                            <label for="complemento">Complemento</label>
                            <input type="text" name="complemento" id="complemento" class="form-control" value="<?= $value->complemento ?>">
                        </div>
                        <div class="form-group col-md-5">
                            <label for="referencia">Referência</label>
                            <input type="text" name="referencia" id="referencia" class="form-control" value="<?= $value->referencia ?>">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="cep">CEP</label>
                            <input type="text" name="cep" id="cep" class="form-control" value="<?= $value->cep ?>">
                        </div>
                    </div>

                    <button type="submit" name="editarEndereco" class="btn btn-primary"><span class="ion-person-add mr-2"></span>Atualizar</button>
                    <a href="/endereco" class="btn btn-danger"><span class="ion-android-cancel mr-2"></span>Cancelar</a>
                </form>
            </div>
        </div>
    <?php else: ?>

    <!------------------------------------------------------------------------------------------------------------------------------
    --- Formulário de cadastro
    -------------------------------------------------------------------------------------------------------------------------------->
    <div class="row mt-5">
        <div class="col-md-12">
            <form action="Pages/trataform/trataEndereco.php" method="post">
                <div class="form-row">
                    <div class="form-group col-md-10">
                        <label for="logradouro">Logradouro</label>
                        <input type="text" name="logradouro" id="logradouro" class="form-control">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="numero">Número</label>
                        <input type="text" name="numero" id="numero" class="form-control">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="bairro">Bairro</label>
                        <input type="text" name="bairro" id="bairro" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="municipio">Município</label>
                        <input type="text" name="municipio" id="municipio" class="form-control">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="uf">UF</label>
                        <input type="text" name="uf" id="uf" class="form-control" maxlength="2">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="pais">Pais</label>
                        <input type="text" name="pais" id="pais" class="form-control">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-5">
                        <label for="complemento">Complemento</label>
                        <input type="text" name="complemento" id="complemento" class="form-control">
                    </div>
                    <div class="form-group col-md-5">
                        <label for="referencia">Referência</label>
                        <input type="text" name="referencia" id="referencia" class="form-control">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="cep">CEP</label>
                        <input type="text" name="cep" id="cep" class="form-control">
                    </div>
                </div>

                <button type="submit" name="cadastrarEndereco" class="btn btn-primary"><span class="ion-person-add mr-2"></span>Cadastrar</button>

            </form>
        </div>
    </div>
    <?php endif; ?>

</div>
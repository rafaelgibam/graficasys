<?php
require_once "autoload.php";
$e = new \Models\Endereco();

if(isset($_POST['cadastrar'])){
        $logradouro = (isset($_POST['logradouro'])) && !empty($_POST['logradouro']) ? $_POST['logradouro'] : header("location: index.php");
        $numero = (isset($_POST['numero']) && !empty($_POST['numero'])) ? $_POST['numero'] : header("location: index.php");
        $bairro = (isset($_POST['bairro']) && !empty($_POST['bairro'])) ? $_POST['bairro'] : header("location: index.php");
        $municipio = (isset($_POST['municipio']) && !empty($_POST['municipio'])) ? $_POST['municipio'] : header("location: index.php");
        $uf = (isset($_POST['uf']) && !empty($_POST['uf'])) ? $_POST['uf'] : header("location: index.php");
        $pais = (isset($_POST['pais']) && !empty($_POST['pais'])) ? $_POST['pais'] : header("location: index.php");
        $cep = (isset($_POST['cep']) && !empty($_POST['cep'])) ? $_POST['cep'] : header("location: index.php");
        $complemento = (isset($_POST['complemento']) && !empty($_POST['complemento'])) ? $_POST['complemento'] : header("location: index.php");
        $referencia = (isset($_POST['referencia']) && !empty($_POST['referencia'])) ? $_POST['referencia'] : header("location: index.php");

        $e->setLogradouro($logradouro);
        $e->setNumero($numero);
        $e->setBairro($bairro);
        $e->setMunicipio($municipio);
        $e->setUf($uf);
        $e->setPais($pais);
        $e->setCep($cep);
        $e->setComplemento($complemento);
        $e->setReferencia($referencia);
        $e->insert();
}


if(isset($_POST['editar'])){
    if(isset($_GET['a']) && $_GET['a'] == 'e'){

        $logradouro = (isset($_POST['logradouro'])) && !empty($_POST['logradouro']) ? $_POST['logradouro'] : header("location: index.php");
        $numero = (isset($_POST['numero']) && !empty($_POST['numero'])) ? $_POST['numero'] : header("location: index.php");
        $bairro = (isset($_POST['bairro']) && !empty($_POST['bairro'])) ? $_POST['bairro'] : header("location: index.php");
        $municipio = (isset($_POST['municipio']) && !empty($_POST['municipio'])) ? $_POST['municipio'] : header("location: index.php");
        $uf = (isset($_POST['uf']) && !empty($_POST['uf'])) ? $_POST['uf'] : header("location: index.php");
        $pais = (isset($_POST['pais']) && !empty($_POST['pais'])) ? $_POST['pais'] : header("location: index.php");
        $cep = (isset($_POST['cep']) && !empty($_POST['cep'])) ? $_POST['cep'] : header("location: index.php");
        $complemento = (isset($_POST['complemento']) && !empty($_POST['complemento'])) ? $_POST['complemento'] : header("location: index.php");
        $referencia = (isset($_POST['referencia']) && !empty($_POST['referencia'])) ? $_POST['referencia'] : header("location: index.php");

        $e->setLogradouro($logradouro);
        $e->setNumero($numero);
        $e->setBairro($bairro);
        $e->setMunicipio($municipio);
        $e->setUf($uf);
        $e->setPais($pais);
        $e->setCep($cep);
        $e->setComplemento($complemento);
        $e->setReferencia($referencia);
        $e->update($_GET['id']);
    }
}


if(isset($_GET['a']) && $_GET['a'] == 'd'){
    $e->delete($_GET['id']);
}

?>
<!doctype html>
<html lang="pt-br">
<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>HomePage</title>

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">LOGRADOURO</th>
                    <th scope="col">NÚMERO</th>
                    <th scope="col">BAIRRO</th>
                    <th scope="col">MUNICIPIO</th>
                    <th scope="col">UF</th>
                    <th scope="col">PAIS</th>
                    <th scope="col">CEP</th>
                    <th scope="col">COMPLEMENTO</th>
                    <th scope="col">REFERÊNCIA</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($e->findAll() as $key => $value): ?>
                <tr>
                    <th scope="row"><?= $value->id ?></th>
                    <td><?= $value->logradouro ?></td>
                    <td><?= $value->numero ?></td>
                    <td><?= $value->bairro ?></td>
                    <td><?= $value->municipio ?></td>
                    <td><?= $value->uf ?></td>
                    <td><?= $value->pais ?></td>
                    <td><?= $value->cep ?></td>
                    <td><?= $value->complemento ?></td>
                    <td><?= $value->referencia ?></td>
                    <td><a href="?a=e&id=<?= $value->id ?>" data-toggle="modal" data-target="#modalEditar"><i class="material-icons">mode_edit</i></a></td>
                    <td><a href="?a=d&id=<?= $value->id ?>"><i class="material-icons" style="color:red">delete</i></a></td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Novo endereço</button>


            <?php
            if(isset($_GET['a']) && $_GET['a'] == 'e'):
                $resultado = $e->find($_GET['id']);
            ?>
                <!-- Modal editar -->
                <div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Editar endereço</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Logradouro</label>
                                        <input type="text" value="<?= $resultado->logradouro ?>" name="logradouro" class="form-control" id="inputEmail4" placeholder="Rua exemplo">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">Número</label>
                                        <input type="number" value="<?= $resultado->numero ?>" name="numero" class="form-control" id="inputPassword4" placeholder="0101">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">Bairro</label>
                                    <input type="text" value="<?= $resultado->bairro ?>" name="bairro" class="form-control" id="inputAddress" placeholder="Bairro">
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress2">Município</label>
                                    <input type="text" value="<?= $resultado->municipio ?>" name="municipio" class="form-control" id="inputAddress2" placeholder="Ex: São Paulo">
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress2">UF</label>
                                    <input type="text" value="<?= $resultado->uf ?>" name="uf" class="form-control" id="inputAddress2" placeholder="Ex: São Paulo">
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress2">Pais</label>
                                    <input type="text" value="<?= $resultado->pais ?>" name="pais" class="form-control" id="inputAddress2" placeholder="Ex: Brasil">
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress2">Cep</label>
                                    <input type="text" value="<?= $resultado->cep ?>" name="cep" class="form-control" id="inputAddress2" placeholder="Ex: 50721230">
                                </div>

                                <div class="form-group">
                                    <label for="inputAddress2">Complemento</label>
                                    <input type="text" value="<?= $resultado->complemento ?>" name="complemento" class="form-control" id="inputAddress2" placeholder="Ex: Casa, Apt">
                                </div>

                                <div class="form-group">
                                    <label for="inputAddress2">Referência</label>
                                    <input type="text" value="<?= $resultado->referencia ?>" name="referencia" class="form-control" id="inputAddress2" placeholder="Ex: Perto da Pastelaria">
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                    <button type="submit"  name="editar" class="btn btn-primary">Cadastrar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <?php endif;  ?>
                <!-- Modal cadastrar -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Adicionar endereço</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="post" name="cadastrar">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Logradouro</label>
                                            <input type="text" name="logradouro" class="form-control" id="inputEmail4" placeholder="Rua exemplo">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Número</label>
                                            <input type="text" name="numero" class="form-control" id="inputPassword4" placeholder="0101">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress">Bairro</label>
                                        <input type="text" name="bairro" class="form-control" id="inputAddress" placeholder="Bairro">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress2">Município</label>
                                        <input type="text" name="municipio" class="form-control" id="inputAddress2" placeholder="Ex: São Paulo">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress2">UF</label>
                                        <input type="text" name="uf" class="form-control" id="inputAddress2" placeholder="Ex: São Paulo">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress2">Pais</label>
                                        <input type="text" name="pais" class="form-control" id="inputAddress2" placeholder="Ex: Brasil">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress2">Cep</label>
                                        <input type="text" name="cep" class="form-control" id="inputAddress2" placeholder="Ex: 50721230">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputAddress2">Complemento</label>
                                        <input type="text" name="complemento" class="form-control" id="inputAddress2" placeholder="Ex: Casa, Apt">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputAddress2">Referência</label>
                                        <input type="text" name="referencia" class="form-control" id="inputAddress2" placeholder="Ex: Perto da Pastelaria">
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                        <button type="submit" name="cadastrar" class="btn btn-primary">Cadastrar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>



        </div>
        <div class="col-2"></div>
    </div>
</div>
</pre>




<!-- JavaScript (Opcional) -->
<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
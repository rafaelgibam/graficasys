<?php

$e = new \Models\Endereco();

if(isset($_POST['cadastrar'])){
        $logradouro = $_POST['logradouro'];
        $numero = $_POST['numero'];
        $bairro = $_POST['bairro'];
        $municipio = $_POST['municipio'];
        $uf = $_POST['uf'];
        $pais = $_POST['pais'];
        $cep = $_POST['cep'];
        $complemento = $_POST['complemento'];
        $referencia = $_POST['referencia'];

        if(isset($logradouro) && isset($numero) && isset($bairro) && isset($municipio) && isset($uf) && isset($pais) && isset($cep) && isset($complemento) && isset($referencia)
        && !empty($logradouro) && !empty($numero) && !empty($bairro) && !empty($municipio) && !empty($uf) && !empty($pais) && !empty($cep) && !empty($complemento) && !empty($referencia)){
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

            $sucesso = '<div class="alert alert-success" role="alert">Usuário cadastrado com sucesso!</div>';

            header("location: endereco.php");
        }else{
            $errocad = '<div class="alert alert-danger" role="alert">Desculpe não conseguimos cadastrar o endereço, verifique que existe campos vázios.</div>';
        }
}


if(isset($_POST['editar'])){
    if(isset($_GET['a']) && $_GET['a'] == 'e'){

        $logradouro = (isset($_POST['logradouro'])) && !empty($_POST['logradouro']) ? $_POST['logradouro'] : header("location: endereco.php");
        $numero = (isset($_POST['numero']) && !empty($_POST['numero'])) ? $_POST['numero'] : header("location: endereco.php");
        $bairro = (isset($_POST['bairro']) && !empty($_POST['bairro'])) ? $_POST['bairro'] : header("location: endereco.php");
        $municipio = (isset($_POST['municipio']) && !empty($_POST['municipio'])) ? $_POST['municipio'] : header("location: endereco.php");
        $uf = (isset($_POST['uf']) && !empty($_POST['uf'])) ? $_POST['uf'] : header("location: endereco.php");
        $pais = (isset($_POST['pais']) && !empty($_POST['pais'])) ? $_POST['pais'] : header("location: endereco.php");
        $cep = (isset($_POST['cep']) && !empty($_POST['cep'])) ? $_POST['cep'] : header("location: endereco.php");
        $complemento = (isset($_POST['complemento']) && !empty($_POST['complemento'])) ? $_POST['complemento'] : header("location: endereco.php");
        $referencia = (isset($_POST['referencia']) && !empty($_POST['referencia'])) ? $_POST['referencia'] : header("location: endereco.php");

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

        $sucessoedit = '<div class="alert alert-success" role="alert">Usuário alterado com sucesso!</div>';

        header("location: endereco.php");
    }else{
        $erroedit = '<div class="alert alert-danger" role="alert">Desculpe não conseguimos editar seu endereço, verifique se existe campos vázios.</div>';
    }
}


if(isset($_GET['a']) && $_GET['a'] == 'd'){
    $e->delete($_GET['id']);
}

?>



<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-12">
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
                    <td><a href="?a=e&id=<?= $value->id ?>"><i class="ion-compose"  style=" font-size: 25px"></i></a></td>
                    <td><a href="?a=d&id=<?= $value->id ?>"><i class="ion-trash-a" style="color:red; font-size: 25px"></i></a></td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
            <?php
            if(isset($_GET['a']) && $_GET['a'] == 'e'):
                $resultado = $e->find($_GET['id']);
            ?>
                 <!-- Modal editar -->
                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <form method="post">
                                <div class="form-row">
                                    <div class="form-group col-md-8">
                                        <label for="inputEmail4">Logradouro</label>
                                        <input type="text" value="<?= $resultado->logradouro ?>" name="logradouro" class="form-control" placeholder="Rua exemplo" size="255">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="inputPassword4">Número</label>
                                        <input type="number" value="<?= $resultado->numero ?>" name="numero" class="form-control"  placeholder="0101" size="10">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="inputPassword4">Bairro</label>
                                        <input type="text" value="<?= $resultado->bairro ?>" name="bairro" class="form-control" placeholder="Bairro" size="45">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-5">
                                        <label for="inputAddress2">Município</label>
                                        <input type="text" value="<?= $resultado->municipio ?>" name="municipio" class="form-control" placeholder="Ex: São Paulo" size="45">
                                    </div>
                                    <div class="form-group col-md-1">
                                        <label for="inputAddress2">UF</label>
                                        <input type="text" value="<?= $resultado->uf ?>" name="uf" class="form-control"  placeholder="Ex: SP" maxlength="2" minlength="2">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputAddress2">Pais</label>
                                        <input type="text" value="<?= $resultado->pais ?>" name="pais" class="form-control" placeholder="Ex: Brasil" size="20">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputAddress2">Cep</label>
                                        <input type="text" value="<?= $resultado->cep ?>" name="cep" class="form-control" placeholder="Ex: 50721230" size="8">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputAddress2">Complemento</label>
                                        <input type="text" value="<?= $resultado->complemento ?>" name="complemento" class="form-control"  placeholder="Ex: Casa, Apt" size="45">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="inputAddress2">Referência</label>
                                        <input type="text" value="<?= $resultado->referencia ?>" name="referencia" class="form-control" placeholder="Ex: Perto da Pastelaria" size="255">
                                    </div>
                                </div>
                                <button type="submit"  name="editar" class="btn btn-primary">Atualizar</button>
                                <a href="endereco.php"><button type="button" class="btn btn-danger">Cancelar</button></a>
                            </form>
                         </div>
                    </div>
                </div>
            <?php else:  ?>
                <!-- Modal cadastrar -->
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <?php
                            if(isset($errocad)){
                                echo $errocad;
                            }else if(isset($sucesso)){
                                echo $sucesso;
                            }
                            
                            if(isset($erroedit)){
                                echo $erroedit;
                            }else if(isset($sucessoedit)){
                                echo $sucessoedit;
                            }
                            ?>
                            <form method="post">
                                <div class="form-row">
                                    <div class="form-group col-md-8">
                                        <label for="inputEmail4">Logradouro</label>
                                        <input type="text" name="logradouro" class="form-control" placeholder="Rua exemplo">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="inputPassword4">Número</label>
                                        <input type="text" name="numero" class="form-control"  placeholder="0101">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="inputPassword4">Bairro</label>
                                        <input type="text" name="bairro" class="form-control" placeholder="Bairro">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="inputAddress2">Município</label>
                                        <input type="text" name="municipio" class="form-control" placeholder="Ex: São Paulo">
                                    </div>
                                    <div class="form-group col-md-1">
                                        <label for="inputAddress2">UF</label>
                                        <input type="text" aria-valuemax="2" name="uf" class="form-control"  placeholder="Ex: SP">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputAddress2">Pais</label>
                                        <input type="text" name="pais" class="form-control"  placeholder="Ex: Brasil">
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label for="inputAddress2">Cep</label>
                                        <input type="text" name="cep" class="form-control"  placeholder="Ex: 50721230">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputAddress2">Complemento</label>
                                        <input type="text" name="complemento" class="form-control" placeholder="Ex: Casa, Apt">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="inputAddress2">Referência</label>
                                        <input type="text" name="referencia" class="form-control" placeholder="Ex: Perto da Pastelaria">
                                    </div>
                                </div>
                                <button type="submit"  name="cadastrar" class="btn btn-success">Cadastrar</button>
                            </form>
                        </div>
                    </div>
                </div>

        <?php endif; ?>


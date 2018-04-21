<?php
require_once __DIR__ . "/../../autoload.php";


$ec = new \Controllers\EnderecoController();

if(isset($_POST['cadastrarEndereco']) && !empty($_POST)){

    $ec->inserirEndereco($_POST['logradouro'],$_POST['numero'],$_POST['bairro'],$_POST['municipio'],$_POST['uf'],$_POST['pais'],$_POST['complemento'],$_POST['referencia'],$_POST['cep']);
    header("location: ../../endereco");
}



if(isset($_POST['editarEndereco']) && !empty($_POST)){

    $ec->editarEndereco($_POST['id'],$_POST['logradouro'],$_POST['numero'],$_POST['bairro'],$_POST['municipio'],$_POST['uf'],$_POST['pais'],$_POST['complemento'],$_POST['referencia'],$_POST['cep']);
    header("location: ../../endereco");
}


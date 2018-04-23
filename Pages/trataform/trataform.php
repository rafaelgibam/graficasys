<?php
require_once __DIR__ . "/../../autoload.php";


$ec = new \Controllers\EnderecoController();
$cc = new \Controllers\ClienteController();
$fc = new \Controllers\FuncionarioController();
$forn = new \Controllers\FornecedorController();

if(isset($_POST['cadastrarEndereco']) && !empty($_POST)){

    $ec->inserirEndereco($_POST['logradouro'],$_POST['numero'],$_POST['bairro'],$_POST['municipio'],$_POST['uf'],$_POST['pais'],$_POST['complemento'],$_POST['referencia'],$_POST['cep']);
    header("location: ../../endereco");
}

if(isset($_POST['editarEndereco']) && !empty($_POST)){

    $ec->editarEndereco($_POST['id'],$_POST['logradouro'],$_POST['numero'],$_POST['bairro'],$_POST['municipio'],$_POST['uf'],$_POST['pais'],$_POST['complemento'],$_POST['referencia'],$_POST['cep']);
    header("location: ../../endereco");
}

/**************************************************************************************************************************************************************************************************
 *  Cadastro e edição do Cliente
 *************************************************************************************************************************************************************************************************/

if(isset($_POST['cadastrarCliente']) && !empty($_POST)){
    $cc->inserirCliente($_POST['cpf'],$_POST['rg'],$_POST['nome'],$_POST['sexo'],$_POST['dtnasc'],$_POST['numcelular'],$_POST['numfixo'],$_POST['estado'],$_POST['endereco']);
    header("location: ../../cliente");
}

if(isset($_POST['editarCliente']) && !empty($_POST)){
    $cc->editarCliente($_POST['id'],$_POST['cpf'],$_POST['rg'],$_POST['nome'],$_POST['sexo'],$_POST['dtnasc'],$_POST['numcelular'],$_POST['numfixo'],$_POST['estado'],$_POST['endereco']);
    header("location: ../../cliente");
}


/**************************************************************************************************************************************************************************************************
 *  Cadastro e edição do Gerente
 *************************************************************************************************************************************************************************************************/

if(isset($_POST['cadastrarGerente']) && !empty($_POST)){
    $fc->inserirGerente($_POST['cpf'],$_POST['rg'],$_POST['nome'],$_POST['sexo'],$_POST['dtnasc'],$_POST['numcelular'],$_POST['numfixo'],$_POST['estado'],$_POST['endereco'],$_POST['salario'], $_POST['dtadmissao']);
    header("location: ../../gerente");
}

if(isset($_POST['editarGerente']) && !empty($_POST)){
    $fc->editarGerente($_POST['id'],$_POST['cpf'],$_POST['rg'],$_POST['nome'],$_POST['sexo'],$_POST['dtnasc'],$_POST['numcelular'],$_POST['numfixo'],$_POST['estado'],$_POST['endereco'],$_POST['salario'], $_POST['dtadmissao']);
    header("location: ../../gerente");
}


/**************************************************************************************************************************************************************************************************
 *  Cadastro e edição do Atendente
 *************************************************************************************************************************************************************************************************/

if(isset($_POST['cadastrarAtendente']) && !empty($_POST)){
    $fc->inserirAtendente($_POST['cpf'],$_POST['rg'],$_POST['nome'],$_POST['sexo'],$_POST['dtnasc'],$_POST['numcelular'],$_POST['numfixo'],$_POST['estado'],$_POST['endereco'],$_POST['salario'], $_POST['dtadmissao']);
    header("location: ../../atendente");
}

if(isset($_POST['editarAtendente']) && !empty($_POST)){
    $fc->editarAtendente($_POST['id'],$_POST['cpf'],$_POST['rg'],$_POST['nome'],$_POST['sexo'],$_POST['dtnasc'],$_POST['numcelular'],$_POST['numfixo'],$_POST['estado'],$_POST['endereco'],$_POST['salario'], $_POST['dtadmissao']);
    header("location: ../../atendente");
}

/**************************************************************************************************************************************************************************************************
 *  Cadastro e edição do Arte Finalista
 *************************************************************************************************************************************************************************************************/

if(isset($_POST['cadastrarArteFinalista']) && !empty($_POST)){
    $fc->inserirArteFinalista($_POST['cpf'],$_POST['rg'],$_POST['nome'],$_POST['sexo'],$_POST['dtnasc'],$_POST['numcelular'],$_POST['numfixo'],$_POST['estado'],$_POST['endereco'],$_POST['salario'], $_POST['dtadmissao']);
    header("location: ../../artefinalista");
}


if(isset($_POST['editarArteFinalista']) && !empty($_POST)){
    $fc->editarArteFinalista($_POST['id'],$_POST['cpf'],$_POST['rg'],$_POST['nome'],$_POST['sexo'],$_POST['dtnasc'],$_POST['numcelular'],$_POST['numfixo'],$_POST['estado'],$_POST['endereco'],$_POST['salario'], $_POST['dtadmissao']);
    header("location: ../../artefinalista");
}


/**************************************************************************************************************************************************************************************************
 *  Cadastro e edição do Fornecedor
 *************************************************************************************************************************************************************************************************/

if(isset($_POST['cadastrarFornecedor']) && !empty($_POST)){
    $forn->inserirFornecedor($_POST['razao'],$_POST['cnpj'],$_POST['nome'],$_POST['sexo'],$_POST['dtnasc'],$_POST['numcelular'],$_POST['numfixo'],$_POST['estado'],$_POST['endereco']);
    header("location: ../../fornecedor");
}

if(isset($_POST['editarFornecedor']) && !empty($_POST)){
    $forn->editarFornecedor($_POST['id'],$_POST['razao'],$_POST['cnpj'],$_POST['nome'],$_POST['sexo'],$_POST['dtnasc'],$_POST['numcelular'],$_POST['numfixo'],$_POST['estado'],$_POST['endereco']);
    header("location: ../../fornecedor");
}
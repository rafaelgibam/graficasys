<?php

namespace Controllers;

use Models\ArteFinalista;
use Models\Atendente;
use Models\Fornecedor;
use Models\Funcionario;
use Models\Gerente;

class FornecedorController extends Fornecedor
{

    private $f;

    public function __construct()
    {
       $this->f = new Fornecedor();
    }

    public function inserirFornecedor($razao, $cnpj, $nome, $sexo, $dtnasc, $numc, $numfi, $estado, $endereco)
    {
        $this->f->setRazaosocial($razao);
        $this->f->setCnpj($cnpj);
        $this->f->setNome($nome);
        $this->f->setSexo($sexo);
        $this->f->setDtnascimento($dtnasc);
        $this->f->setNumcelular($numc);
        $this->f->setNumfixo($numfi);
        $this->f->setEstado($estado);
        $this->f->setEndereco($endereco);
        $this->f->insert();
    }

    public function editarFornecedor($id, $razao, $cnpj, $nome, $sexo, $dtnasc, $numc, $numfi, $estado, $endereco)
    {
        $this->f->setId($id);
        $this->f->setRazaosocial($razao);
        $this->f->setCnpj($cnpj);
        $this->f->setNome($nome);
        $this->f->setSexo($sexo);
        $this->f->setDtnascimento($dtnasc);
        $this->f->setNumcelular($numc);
        $this->f->setNumfixo($numfi);
        $this->f->setEstado($estado);
        $this->f->setEndereco($endereco);
        $this->f->update();
    }

    public function deletarFornecedor($id)
    {
        $this->f->setId($id);
        $this->f->delete();
    }

}
<?php

namespace Controllers;

use Models\Cliente;

class ClienteController extends Cliente
{

    private $c;

    public function __construct()
    {
        $this->c = new Cliente();
    }
    public function inserirCliente($cpf, $rg, $nome, $sexo, $dtnasc, $numc, $numfi, $estado, $endereco)
    {
        $this->c->setCpf($cpf);
        $this->c->setRg($rg);
        $this->c->setNome($nome);
        $this->c->setSexo($sexo);
        $this->c->setDtnascimento($dtnasc);
        $this->c->setNumcelular($numc);
        $this->c->setNumfixo($numfi);
        $this->c->setEstado($estado);
        $this->c->setEndereco($endereco);

        $this->c->insert();
    }

    public function editarCliente($id, $cpf, $rg, $nome, $sexo, $dtnasc, $numc, $numfi, $estado, $endereco)
    {

        $this->c->setId($id);
        $this->c->setCpf($cpf);
        $this->c->setRg($rg);
        $this->c->setNome($nome);
        $this->c->setSexo($sexo);
        $this->c->setDtnascimento($dtnasc);
        $this->c->setNumcelular($numc);
        $this->c->setNumfixo($numfi);
        $this->c->setEstado($estado);
        $this->c->setEndereco($endereco);

        $this->c->update();
    }

    public function deletarCliente($id)
    {
        $this->c->setId($id);
        $this->c->delete();
    }
}
<?php

namespace Controllers;

use Models\Endereco;

class EnderecoController extends Endereco
{

    private $e;

    public function __construct()
    {
        $this->e = new Endereco();
    }

    public function inserirEndereco($l, $n, $b, $m, $u, $p, $com, $r, $c)
    {
        $this->e->setLogradouro($l);
        $this->e->setNumero($n);
        $this->e->setBairro($b);
        $this->e->setMunicipio($m);
        $this->e->setUf($u);
        $this->e->setPais($p);
        $this->e->setComplemento($com);
        $this->e->setReferencia($r);
        $this->e->setCep($c);
        $this->e->insert();
    }

    public function editarEndereco($id, $l, $n, $b, $m, $u, $p, $com, $r, $c)
    {
        $this->e->setLogradouro($l);
        $this->e->setNumero($n);
        $this->e->setBairro($b);
        $this->e->setMunicipio($m);
        $this->e->setUf($u);
        $this->e->setPais($p);
        $this->e->setComplemento($com);
        $this->e->setReferencia($r);
        $this->e->setCep($c);

        $this->e->update($id, $this->e->getLogradouro(), $this->e->getNumero(), $this->e->getBairro(), $this->e->getMunicipio(),
        $this->e->getUf(), $this->e->getPais(), $this->e->getComplemento(), $this->e->getReferencia(), $this->e->getCep());
    }

    public function deletarEndereco($id)
    {
        $this->e->delete($id);
    }
}
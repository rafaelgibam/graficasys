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
        $this->e->setId($id);
        $this->e->setLogradouro($l);
        $this->e->setNumero($n);
        $this->e->setBairro($b);
        $this->e->setMunicipio($m);
        $this->e->setUf($u);
        $this->e->setPais($p);
        $this->e->setComplemento($com);
        $this->e->setReferencia($r);
        $this->e->setCep($c);

        $this->e->update();
    }

    public function deletarEndereco($id)
    {
        $this->e->setId($id);
        $this->e->delete();
    }
}
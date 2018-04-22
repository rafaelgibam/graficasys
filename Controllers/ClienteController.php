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

    public function inserirEndereco($l, $n, $b, $m, $u, $p, $com, $r, $c)
    {

        $this->c->insert();
    }

    public function editarEndereco($id, $l, $n, $b, $m, $u, $p, $com, $r, $c)
    {

        $this->c->setCep($c);

        $this->e->update();
    }

    public function deletarEndereco($id)
    {
        $this->e->setId($id);
        $this->e->delete();
    }
}
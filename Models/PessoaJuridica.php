<?php

namespace Models;

class PessoaJuridica extends Pessoa
{
    private $razaosocial;
    private $cnpj;

    /**
     * @return mixed
     */
    public function getRazaosocial()
    {
        return $this->razaosocial;
    }

    /**
     * @param mixed $razaosocial
     */
    public function setRazaosocial($razaosocial)
    {
        $this->razaosocial = $razaosocial;
    }

    /**
     * @return mixed
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * @param mixed $cnpj
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
    }
    
}
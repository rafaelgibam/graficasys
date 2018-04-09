<?php

namespace Models;

class EntradaProduto
{
    private $dtentrada;
    private $qtd;
    private $itemproduto;
    private $fornecedor;

    /**
     * @return mixed
     */
    public function getDtentrada()
    {
        return $this->dtentrada;
    }

    /**
     * @param mixed $dtentrada
     */
    public function setDtentrada($dtentrada)
    {
        $this->dtentrada = $dtentrada;
    }

    /**
     * @return mixed
     */
    public function getQtd()
    {
        return $this->qtd;
    }

    /**
     * @param mixed $qtd
     */
    public function setQtd($qtd)
    {
        $this->qtd = $qtd;
    }

    /**
     * @return mixed
     */
    public function getItemproduto()
    {
        return $this->itemproduto;
    }

    /**
     * @param mixed $itemproduto
     */
    public function setItemproduto($itemproduto)
    {
        $this->itemproduto = $itemproduto;
    }

    /**
     * @return mixed
     */
    public function getFornecedor() : Fornecedor
    {
        return $this->fornecedor;
    }

    /**
     * @param mixed $fornecedor
     */
    public function setFornecedor(Fornecedor $fornecedor)
    {
        $this->fornecedor = $fornecedor;
    }


}
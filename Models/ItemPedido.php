<?php

namespace Models;

class ItemPedido
{
    private $id;
    private $qtd;
    private $obs;
    private $saidaproduto;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
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
    public function getObs()
    {
        return $this->obs;
    }

    /**
     * @param mixed $obs
     */
    public function setObs($obs)
    {
        $this->obs = $obs;
    }

    /**
     * @return mixed
     */
    public function getSaidaproduto() : SaidaProduto
    {
        return $this->saidaproduto;
    }

    /**
     * @param mixed $saidaproduto
     */
    public function setSaidaproduto(SaidaProduto $saidaproduto)
    {
        $this->saidaproduto = $saidaproduto;
    }


}
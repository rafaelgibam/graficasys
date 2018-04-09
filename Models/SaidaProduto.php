<?php

namespace Models;

class SaidaProduto
{
    private $id;
    private $dtsaida;
    private $produto;

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
    public function getDtsaida()
    {
        return $this->dtsaida;
    }

    /**
     * @param mixed $dtsaida
     */
    public function setDtsaida($dtsaida)
    {
        $this->dtsaida = $dtsaida;
    }

    /**
     * @return mixed
     */
    public function getProduto() : Produto
    {
        return $this->produto;
    }

    /**
     * @param mixed $produto
     */
    public function setProduto(Produto $produto)
    {
        $this->produto = $produto;
    }


}
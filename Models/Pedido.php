<?php

namespace Models;

class Pedido
{
    private $id;
    private $numero;
    private $dtabertura;
    private $dtfechamento;
    private $valor;
    private $obs;
    private $criadoem;
    private $alteradoem;
    private $estado;
    private $itempedido;

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
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param mixed $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    /**
     * @return mixed
     */
    public function getDtabertura()
    {
        return $this->dtabertura;
    }

    /**
     * @param mixed $dtabertura
     */
    public function setDtabertura($dtabertura)
    {
        $this->dtabertura = $dtabertura;
    }

    /**
     * @return mixed
     */
    public function getDtfechamento()
    {
        return $this->dtfechamento;
    }

    /**
     * @param mixed $dtfechamento
     */
    public function setDtfechamento($dtfechamento)
    {
        $this->dtfechamento = $dtfechamento;
    }

    /**
     * @return mixed
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * @param mixed $valor
     */
    public function setValor($valor)
    {
        $this->valor = $valor;
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
    public function getCriadoem()
    {
        return $this->criadoem;
    }

    /**
     * @param mixed $criadoem
     */
    public function setCriadoem($criadoem)
    {
        $this->criadoem = $criadoem;
    }

    /**
     * @return mixed
     */
    public function getAlteradoem()
    {
        return $this->alteradoem;
    }

    /**
     * @param mixed $alteradoem
     */
    public function setAlteradoem($alteradoem)
    {
        $this->alteradoem = $alteradoem;
    }

    /**
     * @return mixed
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * @param mixed $estado
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    /**
     * @return mixed
     */
    public function getItempedido() : ItemPedido
    {
        return $this->itempedido;
    }

    /**
     * @param mixed $itempedido
     */
    public function setItempedido(ItemPedido $itempedido)
    {
        $this->itempedido = $itempedido;
    }


}
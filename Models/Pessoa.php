<?php

namespace Models;

abstract class Pessoa extends Model
{
    private $id;
    private $nome;
    private $sexo;
    private $dtnascimento;
    private $numcelular;
    private $numfixo;
    private $criadoem;
    private $endereco;
    private $estado;

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
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * @param mixed $sexo
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    /**
     * @return mixed
     */
    public function getDtnascimento()
    {
        return $this->dtnascimento;
    }

    /**
     * @param mixed $dtnascimento
     */
    public function setDtnascimento($dtnascimento)
    {
        $this->dtnascimento = $dtnascimento;
    }

    /**
     * @return mixed
     */
    public function getNumcelular()
    {
        return $this->numcelular;
    }

    /**
     * @param mixed $numcelular
     */
    public function setNumcelular($numcelular)
    {
        $this->numcelular = $numcelular;
    }

    /**
     * @return mixed
     */
    public function getNumfixo()
    {
        return $this->numfixo;
    }

    /**
     * @param mixed $numfixo
     */
    public function setNumfixo($numfixo)
    {
        $this->numfixo = $numfixo;
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
    public function getEndereco() : Endereco
    {
        return $this->endereco;
    }

    /**
     * @param mixed $endereco
     */
    public function setEndereco(Endereco $endereco)
    {
        $this->endereco = $endereco;
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

}
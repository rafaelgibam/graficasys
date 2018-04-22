<?php

namespace Models;

class Endereco extends Model
{
    private $id;
    private $logradouro;
    private $numero;
    private $bairro;
    private $municipio;
    private $uf;
    private $pais;
    private $cep;
    private $complemento;
    private $referencia;

    protected $table = "endereco";


    public function insert()
    {
        $sql = "INSERT INTO {$this->table} (logradouro,numero,bairro,municipio,uf,pais,cep,complemento,referencia) VALUES (:LOGRADOURO,:NUMERO,:BAIRRO,:MUNICIPIO,:UF,:PAIS,:CEP,:COMPLEMENTO,:REFERENCIA)";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(":LOGRADOURO", $this->logradouro );
        $stmt->bindParam(":NUMERO", $this->numero);
        $stmt->bindParam(":BAIRRO", $this->bairro);
        $stmt->bindParam(":MUNICIPIO", $this->municipio);
        $stmt->bindParam(":UF",$this->uf);
        $stmt->bindParam(":PAIS",$this->pais);
        $stmt->bindParam(":CEP",$this->cep);
        $stmt->bindParam(":COMPLEMENTO", $this->complemento);
        $stmt->bindParam(":REFERENCIA", $this->referencia);
        $stmt->execute();
        $stmt->closeCursor();
    }

    public function update()
    {
        $sql = "UPDATE {$this->table} SET logradouro = :LOGRADOURO, numero = :NUMERO, bairro = :BAIRRO, municipio = :MUNICIPIO, uf = :UF, pais = :PAIS, cep = :CEP, complemento = :COMPLEMENTO, referencia = :REFERENCIA WHERE id = :ID";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(":ID", $this->id);
        $stmt->bindParam(":LOGRADOURO", $this->logradouro );
        $stmt->bindParam(":NUMERO", $this->numero);
        $stmt->bindParam(":BAIRRO", $this->bairro);
        $stmt->bindParam(":MUNICIPIO", $this->municipio);
        $stmt->bindParam(":UF",$this->uf);
        $stmt->bindParam(":PAIS",$this->pais);
        $stmt->bindParam(":CEP",$this->cep);
        $stmt->bindParam(":COMPLEMENTO", $this->complemento);
        $stmt->bindParam(":REFERENCIA", $this->referencia);
        $stmt->execute();
        $stmt->closeCursor();
    }

    public function delete()
    {
        $sql = "DELETE FROM {$this->table} WHERE id = :ID";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(":ID", $this->id);
        $stmt->execute();
        $stmt->closeCursor();
    }


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
    public function getLogradouro()
    {
        return $this->logradouro;
    }

    /**
     * @param mixed $logradouro
     */
    public function setLogradouro($logradouro)
    {
        $this->logradouro = $logradouro;
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
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * @param mixed $bairro
     */
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
    }

    /**
     * @return mixed
     */
    public function getMunicipio()
    {
        return $this->municipio;
    }

    /**
     * @param mixed $municipio
     */
    public function setMunicipio($municipio)
    {
        $this->municipio = $municipio;
    }

    /**
     * @return mixed
     */
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * @param mixed $uf
     */
    public function setUf($uf)
    {
        $this->uf = $uf;
    }

    /**
     * @return mixed
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * @param mixed $pais
     */
    public function setPais($pais)
    {
        $this->pais = $pais;
    }

    /**
     * @return mixed
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * @param mixed $cep
     */
    public function setCep($cep)
    {
        $this->cep = $cep;
    }

    /**
     * @return mixed
     */
    public function getComplemento()
    {
        return $this->complemento;
    }

    /**
     * @param mixed $complemento
     */
    public function setComplemento($complemento)
    {
        $this->complemento = $complemento;
    }

    /**
     * @return mixed
     */
    public function getReferencia()
    {
        return $this->referencia;
    }

    /**
     * @param mixed $referencia
     */
    public function setReferencia($referencia)
    {
        $this->referencia = $referencia;
    }




}
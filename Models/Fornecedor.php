<?php

namespace Models;

class Fornecedor extends PessoaJuridica
{
    protected $table = "fornecedor";

    public function insert()
    {
        $sql = "INSERT INTO {$this->table} (razaosocial, cnpj, nome, sexo, dtnascimento, numcelular, numfixo, estado, endereco_idendereco) VALUES (:RAZAO, :CNPJ, :NOME, :SEXO, :DATANASCIMENTO, 
                :NUMEROCELULAR, :NUMEROFIXO, :ESTADO, :ENDERECO)";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(":RAZAO", $this->getRazaosocial() );
        $stmt->bindParam(":CNPJ", $this->getCnpj());
        $stmt->bindParam(":NOME", $this->getNome());
        $stmt->bindParam(":SEXO", $this->getSexo());
        $stmt->bindParam(":DATANASCIMENTO",$this->getDtnascimento());
        $stmt->bindParam(":NUMEROCELULAR",$this->getNumcelular());
        $stmt->bindParam(":NUMEROFIXO",$this->getNumfixo());
        $stmt->bindParam(":ESTADO", $this->getEstado());
        $stmt->bindParam(":ENDERECO", $this->getEndereco());
        $stmt->execute();
        $stmt->closeCursor();
    }

    public function update()
    {
        $sql = "UPDATE {$this->table} SET razaosocial = :RAZAO, cnpj = :CNPJ, nome = :NOME, sexo = :SEXO, dtnascimento = :DATANASCIMENTO, numcelular = :NUMEROCELULAR, numfixo = :NUMEROFIXO, estado = :ESTADO, 
                                          endereco_idendereco = :ENDERECO WHERE id = :ID";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(":ID", $this->getId());
        $stmt->bindParam(":RAZAO", $this->getRazaosocial() );
        $stmt->bindParam(":CNPJ", $this->getCnpj());
        $stmt->bindParam(":NOME", $this->getNome());
        $stmt->bindParam(":SEXO", $this->getSexo());
        $stmt->bindParam(":DATANASCIMENTO",$this->getDtnascimento());
        $stmt->bindParam(":NUMEROCELULAR",$this->getNumcelular());
        $stmt->bindParam(":NUMEROFIXO",$this->getNumfixo());
        $stmt->bindParam(":ESTADO", $this->getEstado());
        $stmt->bindParam(":ENDERECO", $this->getEndereco());
        $stmt->execute();
        $stmt->closeCursor();
    }

    public function delete()
    {
        $sql = "DELETE FROM {$this->table} WHERE id = :ID";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(":ID", $this->getId());
        $stmt->execute();
        $stmt->closeCursor();
    }
}
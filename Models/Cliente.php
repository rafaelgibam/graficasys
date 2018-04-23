<?php

namespace Models;

class Cliente extends PessoaFisica
{

    protected $table = "cliente";

    public function insert()
    {
        $sql = "INSERT INTO {$this->table} (cpf, rg, nome, sexo, dtnascimento, numcelular, numfixo, estado, endereco_idendereco) VALUES (:CPF, :RG, :NOME, :SEXO, :DATANASCIMENTO, 
                :NUMEROCELULAR, :NUMEROFIXO, :ESTADO, :ENDERECO)";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(":CPF", $this->getCpf() );
        $stmt->bindParam(":RG", $this->getRg());
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
        $sql = "UPDATE {$this->table} SET cpf = :CPF, rg = :RG, nome = :NOME, sexo = :SEXO, dtnascimento = :DATANASCIMENTO, numcelular = :NUMEROCELULAR, numfixo = :NUMEROFIXO, estado = :ESTADO, endereco_idendereco = :ENDERECO WHERE id = :ID";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(":ID", $this->getId());
        $stmt->bindParam(":CPF", $this->getCpf() );
        $stmt->bindParam(":RG", $this->getRg());
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
<?php

namespace Models;

abstract class Model
{
    protected $table;

    public function find($id){
        $sql = "SELECT * FROM {$this->table} WHERE id = :ID";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(":ID", $id);
        $stmt->execute();

        return $stmt->fetch();
    }

    public function findAll(){
        $sql = "SELECT * FROM {$this->table}";
        $stmt = DB::prepare($sql);
        $stmt->execute();
        
        return $stmt->fetchAll();
    }
}
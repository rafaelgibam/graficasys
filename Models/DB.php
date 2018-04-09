<?php

namespace Models;
use PDO, PDOException;

class DB
{
    public static function getConnetion()
    {
        try{
            $pdo = new PDO("mysql:host=localhost;dbname=graficasys", "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            return $pdo;
        }catch (PDOException $e){
            echo "ERRO NA CONEXÃO COM O BANCO: " . $e;
        }
    }

    public static function prepare($sql)
    {
        return self::getConnetion()->prepare($sql);
    }
}
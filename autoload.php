<?php

define('WWW_ROOT', dirname(__FILE__));
define('DS', DIRECTORY_SEPARATOR);

function __autoload( $class ){
    $class = WWW_ROOT . DS . str_replace(DS, '\\', $class) . '.php';
    if(!file_exists($class)){
        throw new Exception("O arquivo {$class} não existe!");
    }

    require_once $class;
}
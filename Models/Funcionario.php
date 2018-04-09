<?php
/**
 * Created by PhpStorm.
 * User: rafaelgibam
 * Date: 07/04/2018
 * Time: 11:02
 */

namespace Models;


class Funcionario extends PessoaFisica
{
    private $salario;
    private $dtadmissao;

    /**
     * @return mixed
     */
    public function getSalario()
    {
        return $this->salario;
    }

    /**
     * @param mixed $salario
     */
    public function setSalario($salario)
    {
        $this->salario = $salario;
    }

    /**
     * @return mixed
     */
    public function getDtadmissao()
    {
        return $this->dtadmissao;
    }

    /**
     * @param mixed $dtadmissao
     */
    public function setDtadmissao($dtadmissao)
    {
        $this->dtadmissao = $dtadmissao;
    }


}
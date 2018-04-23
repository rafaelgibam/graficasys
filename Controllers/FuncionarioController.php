<?php

namespace Controllers;

use Models\ArteFinalista;
use Models\Atendente;
use Models\Funcionario;
use Models\Gerente;

class FuncionarioController extends Funcionario
{

    private $g;
    private $a;
    private $art;

    public function __construct()
    {
        $this->g = new Gerente();
        $this->a = new Atendente();
        $this->art = new ArteFinalista();
    }

    public function inserirGerente($cpf, $rg, $nome, $sexo, $dtnasc, $numc, $numfi, $estado, $endereco, $salario, $dtadmissao)
    {
        $this->g->setCpf($cpf);
        $this->g->setRg($rg);
        $this->g->setNome($nome);
        $this->g->setSexo($sexo);
        $this->g->setDtnascimento($dtnasc);
        $this->g->setNumcelular($numc);
        $this->g->setNumfixo($numfi);
        $this->g->setEstado($estado);
        $this->g->setEndereco($endereco);
        $this->g->setSalario($salario);
        $this->g->setDtadmissao($dtadmissao);
        $this->g->insert();
    }

    public function editarGerente($id, $cpf, $rg, $nome, $sexo, $dtnasc, $numc, $numfi, $estado, $endereco, $salario, $dtadmissao)
    {
        $this->g->setCpf($cpf);
        $this->g->setRg($rg);
        $this->g->setNome($nome);
        $this->g->setSexo($sexo);
        $this->g->setDtnascimento($dtnasc);
        $this->g->setNumcelular($numc);
        $this->g->setNumfixo($numfi);
        $this->g->setEstado($estado);
        $this->g->setEndereco($endereco);
        $this->g->setSalario($salario);
        $this->g->setDtadmissao($dtadmissao);
        $this->g->update();
    }

    public function deletarGerente($id)
    {
        $this->g->setId($id);
        $this->g->delete();
    }

    public function inserirArteFinalista($cpf, $rg, $nome, $sexo, $dtnasc, $numc, $numfi, $estado, $endereco, $salario, $dtadmissao)
    {
        $this->art->setCpf($cpf);
        $this->art->setRg($rg);
        $this->art->setNome($nome);
        $this->art->setSexo($sexo);
        $this->art->setDtnascimento($dtnasc);
        $this->art->setNumcelular($numc);
        $this->art->setNumfixo($numfi);
        $this->art->setEstado($estado);
        $this->art->setEndereco($endereco);
        $this->art->setSalario($salario);
        $this->art->setDtadmissao($dtadmissao);
        $this->art->insert();
    }

    public function editarArteFinalista($id, $cpf, $rg, $nome, $sexo, $dtnasc, $numc, $numfi, $estado, $endereco, $salario, $dtadmissao)
    {

        $this->art->setId($id);
        $this->art->setCpf($cpf);
        $this->art->setRg($rg);
        $this->art->setNome($nome);
        $this->art->setSexo($sexo);
        $this->art->setDtnascimento($dtnasc);
        $this->art->setNumcelular($numc);
        $this->art->setNumfixo($numfi);
        $this->art->setEstado($estado);
        $this->art->setEndereco($endereco);
        $this->art->setSalario($salario);
        $this->art->setDtadmissao($dtadmissao);
        $this->art->update();
    }

    public function deletarArteFinalista($id)
    {
        $this->art->setId($id);
        $this->art->delete();
    }

    public function inserirAtendente($cpf, $rg, $nome, $sexo, $dtnasc, $numc, $numfi, $estado, $endereco, $salario, $dtadmissao)
    {
        $this->a->setCpf($cpf);
        $this->a->setRg($rg);
        $this->a->setNome($nome);
        $this->a->setSexo($sexo);
        $this->a->setDtnascimento($dtnasc);
        $this->a->setNumcelular($numc);
        $this->a->setNumfixo($numfi);
        $this->a->setEstado($estado);
        $this->a->setEndereco($endereco);
        $this->a->setSalario($salario);
        $this->a->setDtadmissao($dtadmissao);
        $this->a->insert();
    }

    public function editarAtendente($id, $cpf, $rg, $nome, $sexo, $dtnasc, $numc, $numfi, $estado, $endereco, $salario, $dtadmissao)
    {
        $this->a->setId($id);
        $this->a->setCpf($cpf);
        $this->a->setRg($rg);
        $this->a->setNome($nome);
        $this->a->setSexo($sexo);
        $this->a->setDtnascimento($dtnasc);
        $this->a->setNumcelular($numc);
        $this->a->setNumfixo($numfi);
        $this->a->setEstado($estado);
        $this->a->setEndereco($endereco);
        $this->a->setSalario($salario);
        $this->a->setDtadmissao($dtadmissao);
        $this->a->update();
    }

    public function deletarAtendente($id)
    {
        $this->a->setId($id);
        $this->a->delete();
    }


    /**
     * @return Gerente
     */
    public function getG(): Gerente
    {
        return $this->g;
    }

    /**
     * @return ArteFinalista
     */
    public function getArt(): ArteFinalista
    {
        return $this->art;
    }

    /**
     * @return Atendente
     */
    public function getA(): Atendente
    {
        return $this->a;
    }
}
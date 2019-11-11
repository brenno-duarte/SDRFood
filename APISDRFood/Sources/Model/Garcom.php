<?php

class Garcom {

    private $nome;
    private $dt_nasc;
    private $fone;
    private $rua;
    private $bairro;
    private $num;
    private $cpf;
    private $escolaridade;

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of dt_nasc
     */ 
    public function getDt_nasc()
    {
        return $this->dt_nasc;
    }

    /**
     * Set the value of dt_nasc
     *
     * @return  self
     */ 
    public function setDt_nasc($dt_nasc)
    {
        $this->dt_nasc = $dt_nasc;

        return $this;
    }

    /**
     * Get the value of fone
     */ 
    public function getFone()
    {
        return $this->fone;
    }

    /**
     * Set the value of fone
     *
     * @return  self
     */ 
    public function setFone($fone)
    {
        $this->fone = $fone;

        return $this;
    }

    /**
     * Get the value of rua
     */ 
    public function getRua()
    {
        return $this->rua;
    }

    /**
     * Set the value of rua
     *
     * @return  self
     */ 
    public function setRua($rua)
    {
        $this->rua = $rua;

        return $this;
    }

    /**
     * Get the value of bairro
     */ 
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * Set the value of bairro
     *
     * @return  self
     */ 
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;

        return $this;
    }

    /**
     * Get the value of num
     */ 
    public function getNum()
    {
        return $this->num;
    }

    /**
     * Set the value of num
     *
     * @return  self
     */ 
    public function setNum($num)
    {
        $this->num = $num;

        return $this;
    }

    /**
     * Get the value of cpf
     */ 
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Set the value of cpf
     *
     * @return  self
     */ 
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    /**
     * Get the value of escolaridade
     */ 
    public function getEscolaridade()
    {
        return $this->escolaridade;
    }

    /**
     * Set the value of escolaridade
     *
     * @return  self
     */ 
    public function setEscolaridade($escolaridade)
    {
        $this->escolaridade = $escolaridade;

        return $this;
    }

}
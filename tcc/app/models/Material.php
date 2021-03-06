<?php

class Material
{

    private $nome;
    private $descricao;
    private $especificacao;
    private $historico;
    private $qtd;

    public function __construct($nome=null, $descricao=null, $especificacao=null, $historico=null, $qtd=null){
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->especificacao = $especificacao;
        $this->historico = $historico;
        $this->qtd = $qtd;
    }


    public function getNome(){return $this->nome;}
    public function setNome($nome): void{$this->nome = $nome;}

    public function getDescricao(){return $this->descricao;}
    public function setDescricao($descricao): void{$this->descricao = $descricao;}

    public function getEspecificacao(){return $this->especificacao;}
    public function setEspecificacao($especificacao): void{$this->especificacao = $especificacao;}

    public function getHistorico(){return $this->historico;}
    public function setHistorico($historico): void{$this->historico = $historico;}

    public function getQtd(){return $this->qtd;}
    public function setQtd($qtd): void{$this->qtd = $qtd;}

}
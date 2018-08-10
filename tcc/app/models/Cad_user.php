<?php


class Cad_user
{
    private $cpf;
    private $nome;
    private $dataNasc;
    private $ocupacao;
    private $sexo;
    private $usuario;
    private $senha;

    public function __construct($cpf=null,$nome=null,$dataNasc=null,$ocupacao=null,$sexo=null,$usuario=null,$senha=null)
    {
        $this->cpf =      $cpf;
        $this->nome =     $nome;
        $this->dataNasc = $dataNasc;
        $this->ocupacao = $ocupacao;
        $this->sexo =     $sexo;
        $this->usuario =  $usuario;
        $this->senha =    $senha;

    }
    public function getCpf(){return  $this->cpf;}
    public function getNome(){return  $this->nome;}
    public function getData(){return $this->dataNasc;}
    public function getOcupacao(){return $this->ocupacao;}
    public function getSexo(){return $this->sexo;}
    public function getUsuario(){return $this->usuario;}
    public function getSenha(){return $this->senha;}


}

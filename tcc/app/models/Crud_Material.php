<?php
require 'Material.php';

class Crud_Material
{
    private $conexao;

    public function getMateriais(){
        $this->conexao = DBConnection::getConexao();
        $sql = "select * from emprestimo";

        $resultado = $this->conexao->query($sql);
        $material = $resultado->fetchAll(PDO::FETCH_ASSOC);

        $listaMateriais = [];

        foreach ($material as $mat) {
            $listaMateriais[] = new Material($mat['idnum'], $mat['nome'], $mat['descricao'], $mat['especificacao'], $mat['historico'], $mat['qtd']);
        }
        return $listaMateriais;

    }

    public function getMaterial($idnum)
    {
        $this->conexao = DBConnection::getConexao();
        $sql = "select * from emprestimo WHERE idnum = $idnum";

        $resultado = $this->conexao->query($sql);
        $mat = $resultado->fetch(PDO::FETCH_ASSOC);

        $materiais[] = new Material($mat['idnum'], $mat['nome'], $mat['descricao'], $mat['especificacao'], $mat['historico'], $mat['qtd']);

        return $mat;
    }
    public function insertUser(Material $mat){
        $this->conexao = DBConnection::getConexao();
        $sql = "insert into emprestimo(nome,descricao,especificao,historico,qtd) values ('{$mat->getNome()}','{$mat->getDescricao()}','{$mat->getEspecificacao()}','{$mat->getHistorico()}','{$mat->getQtd()}')";

        try {
            $this->conexao->exec($sql);
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
}
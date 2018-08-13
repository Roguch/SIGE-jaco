<?php


require 'Cad_user.php';

class CrudUser
{
    private $conexao;

    public function getUsers()
    {
        $this->conexao = DBConnection::getConexao();

        $sql = 'select * from user';

        $resultado = $this->conexao->query($sql);
        $cad_user = $resultado->fetchAll(PDO::FETCH_ASSOC);

        $listaUsers = [];

        foreach ($cad_user as $user) {
            $listaUsers[] = new Cad_user($user['cpf'], $user['nome'], $user['data_nasc'], $user['ocupacao'], $user['sexo'], $user['usuario'], $user['senha'],$user['tipo_id']);
        }


        return $listaUsers;

    }

    public function getUser($usuario, $senha)
    {
        $this->conexao = DBConnection::getConexao();
        $sql = "select * from user WHERE usuario = $usuario and senha = $senha";

        $resultado = $this->conexao->query($sql);
        $user = $resultado->fetch(PDO::FETCH_ASSOC);

        $Users[] = new Cad_user($user['cpf'], $user['nome'], $user['data_nasc'], $user['ocupacao'], $user['sexo'], $user['usuario'], $user['senha'],$user['tipo_id']);

        return $user;
    }

    public function insertUser(Cad_User $user)
    {
        //conexao
        $this->conexao = DBConnection::getConexao();

        //inserir dado
        $sql = "insert into user (cpf,nome,data_nasc,ocupacao,sexo,usuario,senha,tipo_id) values ({$user->getCpf()},'{$user->getNome()}','{$user->getData()}','{$user->getOcupacao()}','{$user->getSexo()}','{$user->getUsuario()}','{$user->getSenha()}',1)";
        //erro
        try {
            $this->conexao->exec($sql);
        } catch (PDOException $e) {
            return $e->getMessage();
        }

    }

    public function atualizaUser(Cad_user $user, $cpf)
    {
        $this->conexao = DBConnection::getConexao();
        $dados[] = $user->getCpf();
        $dados[] = $user->getNome();
        $dados[] = $user->getData();
        $dados[] = $user->getOcupacao();
        $dados[] = $user->getSexo();
        $dados[] = $user->getUsuario();
        $dados[] = $user->getSenha();
        $sql = "UPDATE user SET cpf = " . $dados[0] . ", nome = '" . $dados[1] . "', data_nasc = '" . $dados[2] . "', ocupacao = '" . $dados[3] . "',sexo = '" . $dados[4] . "',usuario = '" . $dados[5] . "',senha = '" . $dados[6] . "' WHERE cpf = $cpf";
        $this->conexao->exec($sql);
    }

    public function excluirAdmin($cpf)
    {
        $this->conexao = DBConnection::getConexao();
        $sql = "delete from user WHERE cpf = $cpf";
        $this->conexao->exec($sql);

    }

    public function acharUser($login,$senha)
    {
        $this->conexao = DBConnection::getConexao();
        $sql = "SELECT * FROM user WHERE usuario = '$login' AND senha = '$senha'";
        $resultado = $this->conexao->query($sql);
        $usuario = $resultado->fetch(PDO::FETCH_ASSOC);
        if ($usuario == null){
            return null;
        }else{
            return $usuario['tipo_id'];
        }

    }
}

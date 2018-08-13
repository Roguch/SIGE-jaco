<?php
require_once '../models/DBConnection.php';
require_once '../models/CrudUser.php';
require_once '../models/Crud_Material.php';
//essa parte já esta sendo usada pelo CrudUser -> require_once '../models/Cad_user.php';
$acao = $_GET['acao'];
$crud = new CrudUser();
$materiaisCrud = new Crud_Material();
switch ($acao){
    case 'cadastrar':
        if (isset($_POST['enviar'])){
            $user = new Cad_user($_POST['cpf'],$_POST['nome'],$_POST['data'],$_POST['ocupacao'],null,$_POST['usuario'],$_POST['senha']);
            $crud->insertUser($user);
            include '../sucess.html';
        }else{
                echo "ok";
        }break;

    case 'logar':
        if (isset($_POST['entrar'])){
            $resutado = $crud->acharUser($_POST['login'],$_POST['senha']);
            if ($resutado != null){
                if ($resutado == 0) {
                    include '../views/admin.php';
                }else{
                    $materiais = $materiaisCrud->getMateriais();
                    include '../views/blz.php';
                }
            }else{
                echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='../../index.php';               </script>";
                die();
            }
        }break;
    case 'inserir':
        if (isset($_POST['cadastrar'])){
            $material = new Material($_POST['nome'],$_POST['descricao'],$_POST['especificacao'],$_POST['historico'],$_POST['qtd']);
            $materiaisCrud->insertUser($material);
                include '../views/admin.php';
        }
}


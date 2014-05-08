<?php
include_once '../Modelo/ConexaoBD.php';
include_once '../DAO/funcionarioDAO.php';

$funcionarioDAO = new funcionarioDAO();
$funcionario = new funcionario($_POST['nome'], $_POST['username'], $_POST['tipo']);
if($funcionario->getTipo()==3){
    $funcionario->setPermissao(1);
}else{
    $funcionario->setPermissao(0);
}
$funcionarioDAO->salvar($funcionario);
header('Location:../Visao/form_cadastrar_funcionario.php');

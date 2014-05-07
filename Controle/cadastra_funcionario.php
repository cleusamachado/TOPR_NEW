<?php
include_once '../../BD/ConexaoBD.php';
include_once '../../BD/Menu/funcionarioDAO.php';

$funcionarioDAO = new funcionarioDAO();
$funcionario = new funcionario($_POST['nome'], $_POST['username'], $_POST['tipo']);
if($funcionario->getTipo()==3){
    $funcionario->setPermissao(1);
}else{
    $funcionario->setPermissao(0);
}
$funcionarioDAO->salvar($funcionario);
header('Location:../../Views/Menu/form_cadastrar_funcionario.php');

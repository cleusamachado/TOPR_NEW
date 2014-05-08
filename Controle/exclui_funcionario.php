<?php
include_once '../DAO/funcionarioDAO.php';

$funcionarioDAO = new funcionarioDAO();

$funcionarioDAO->excluir($_GET['username']);

header('Location:../../Views/Menu/form_lista_funcionario.php');

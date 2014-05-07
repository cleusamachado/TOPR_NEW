<?php
include_once '../../BD/Menu/mensais_baseDAO.php';
$mDAo = new mensais_baseDAO();
$mDAo->excluir($_GET['exclui']);
//var_dump($_GET['exclui']);
header('Location:../../Views/Menu/form_lista_fluxo.php');

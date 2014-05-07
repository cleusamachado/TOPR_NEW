<?php

include_once "classes/regrasDAO.php";

$tipo = $_POST['tipo'];
echo $tipo;

$rDAO = new RegrasDAO();
$rDAO->excluir($_GET['tipo']);

header('Location:form_regras.php');
?>

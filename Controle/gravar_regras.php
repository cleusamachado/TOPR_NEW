<?php
include_once "../../BD/Menu/regrasDAO.php";

$tipo = $_POST['tipo'];
$descricao = $_POST['descricao'];
//echo "tipo". $tipo;
//echo "descricao".$descricao;

// criar o objeto regra
$regra = new Regras($tipo,$descricao);
//$regra->setTipo(1);

// cria o mapeamento objeto-relacional
$rDAO = new RegrasDAO();
// salva
$rDAO->salvar($regra);

header('Location:../../Views/Menu/form_regras.php');
?>


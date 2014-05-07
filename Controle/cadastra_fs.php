<?php
include_once '../../classes/Menu/mensais_base.php';
include_once '../../BD/Menu/mensais_baseDAO.php';
$mDAO = new mensais_baseDAO();
$men = new mensais_base($_POST[sis], $_POST[serv], $_POST[regras], $_POST[executar], $_POST[descr], $_POST[complem], $_POST[Periodicidade], $_POST[corfs], $_POST[tarefas], $_POST[tipofs], $_POST[QtdeCol]);
//var_dump( $mDAO->obterMensais());
$sem = array('seg'=>$_POST[diasem1],'ter'=>$_POST[diasem2],'qua'=>$_POST[diasem3],'qui'=>$_POST[diasem4],'sex'=>$_POST[diasem5],'sab'=>$_POST[diasem6],'dom'=>$_POST[diasem7]);
$men->setDiasem($sem);
//var_dump($men);
$mDAO->salvar($men);
header('Location:../../Views/Menu/form_cadastrar_fs.php');
?>



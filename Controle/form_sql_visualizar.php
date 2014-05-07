<?php
session_start();
function __autoload($classe){
    include_once '../../BD/Menu/'.$classe.'.php';
}
include_once "form_pdf.php";
$mescptDAO = new tab_mescptmensaisDAO();
$rDAO = new relacaopadraoDAO();
$mDAO = new Mensais_baseDAO();
$mesworkDAO = new mesworkDAO();
$analiDAO = new analistaDAO();


$mwork = $mesworkDAO->obterMes();
$mescpt = $mescptDAO->obterMesCptMensaisPor($mwork->getNmes());
$contador = $_GET['contador'];
$mensais = $mDAO->obterMensal($_GET['contador']);
$relacao = $rDAO->obterRelacaoPelo($mensais->getServ());

$analista = $analiDAO->obterAnalistaPelo($mensais->getSis());

$_SESSION['cpt1'] = $mescpt->getCpt1();
$_SESSION['cpt2'] = $mescpt->getCpt2();
$_SESSION['chpv'] = $mescpt->getChprev();
$_SESSION['sdpv'] = $mescpt->getSdprev();

$_SESSION['nomeserv'] = $relacao->getDescserv();
$_SESSION['usuario'] = $relacao->getUsuario();
$_SESSION['codusu'] = $relacao->getCod1usu();

$_SESSION['sis'] = $mensais->getSis();
$_SESSION['serv'] = $mensais->getServ();
$regra = $mensais->getRegra();
$procedimento = $mensais->getExecutar();
$descricao = $mensais->getTarefas();
$_SESSION['complem'] = $mensais->getComplem();
$periodicidade = $mensais->getPeriodicidade();
$corfs = $mensais->getCorfs();
$_SESSION['spool'] = $mensais->getDescricao();
$diasem = $mensais->getDiasem();
$_SESSION['tipofs'] = $mensais->getTipofs();
$QtdeCol = $mensais->getQtdecol();

//******** inicio da função para gerar PDF
//function PDFClientes($sis, $serv, $complem, $procedimento, $descricao, $spool, $periodicidade, $regra, $tipofs, $analista, $descserv, $usuario, $cod1usu, $njob, $competencia1, $competencia2, $chegada, $saida) {

$pdf = new PDF('P');
$pdf->Open();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetAutoPageBreak(true, 0);  // seta  a margem inferior
// imprime cabe�alho e uma linha em branco
$pdf->Cabecalho();
$pdf->SetLeftMargin(9); //define a margem a esquerda
$pdf->Ln(25);
$pdf->Cell(20);
// $pdf->SetX(85);
// white define o texto na celula, faz quebra de linha no texto
$pdf->SetFont('Arial', 'B', 8);
$pdf->SetY(+49);
$pdf->Cell(22);

$pdf->SetY(+79);
$pdf->Cell(15);
$pdf->Cell(170, 4, $procedimento, 0, 1, 'L');
$pdf->ln(2);
$pdf->Cell(15);
$pdf->Cell(170, 4, $descricao, 0, 1, 'C');
$pdf->ln(25);
/* nº do job
  $pdf->SetY(+90);
  $pdf->Cell(15);
  $pdf->Cell(100, 3, $njob, 0, 1, 'L');
 */
$pdf->SetFont('Arial', 'B', 7);
$pdf->SetY(53);
$pdf->ln(8);
$pdf->Cell(3);
$pdf->Cell(30, 5, $analista, 0, 0, 'L');
$pdf->Cell(19, 5, $periodicidade,0, 0, 'C');
$pdf->Cell(10, 5, $regra, 0, 0, 'C');

$pdf->SetY(92);
//  $pdf->Cell(4);

$pdf->SetFont('Arial', 'B', 8); //Numera��o de 1 a 31 (dias do mes)
for ($i = 1; $i <= 31; $i++) {
    $pdf->Cell(5, 5.3,$i, 0, 1, 'C');
}

$pdf->Output();
?>

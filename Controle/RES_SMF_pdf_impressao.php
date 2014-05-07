<?php
require('pdf_js.php');
session_start();

class PDF_AutoPrint extends PDF_JavaScript
{
function AutoPrint($dialog=false)
{
	//Open the print dialog or start printing immediately on the standard printer
	$param=($dialog ? 'true' : 'false');
	$script="print($param);";
	$this->IncludeJS($script);
}

function AutoPrintToPrinter($server, $printer, $dialog=false)
{
	//Print on a shared printer (requires at least Acrobat 6)
	$script = "var pp = getPrintParams();";
	if($dialog)
		$script .= "pp.interactive = pp.constants.interactionLevel.full;";
	else
		$script .= "pp.interactive = pp.constants.interactionLevel.automatic;";
	$script .= "pp.printerName = '\\\\\\\\".$server."\\\\".$printer."';";
	$script .= "print(pp);";
	$this->IncludeJS($script);
}
}
$file = '/programas/apache/htdocs/topr/producao/php/Temp/\'$NroRES'.'_Postagem_Correio.pdf';
	if (file_exists($file)) unlink($file);

$pdf=new PDF_AutoPrint();
$pdf->AddPage();
$pdf->SetFont('Arial','',20);
//$pdf->Text(90, 50, 'Print me!');
//Open the print dialog
//$pdf->AutoPrint(true);

$NroRES = $_SESSION['NroFS'];

//	echo $NroRES;
$arquivo_novo = $NroRES;
$trans = array("/" => "-");
$text = strtr($NroRES,$trans);
//echo $text;

$_SESSION['NroFS'] = $text;

//echo "session".$_SESSION['NroFS'];

$caminho = 'Temp/';

$novo_caminho = $caminho.$text;
//echo $novo_caminho;
$pdf->AutoPrint(true);
$pdf->Output($NroRES.'_Postagem_Correio.pdf','D');

$pdf->Output($novo_caminho.'_Postagem_Correio.pdf','F');


?>


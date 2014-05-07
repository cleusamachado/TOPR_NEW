<?php
define('FPDF_FONTPATH','font/');
//require('fpdf.php');
require_once("../fpdf/fpdf.php");

class PDF extends FPDF {

function Cabecalho() {
//escreve as informa��es do cabe�alho
	$this->SetY(+13);  // posi��o inicial do cabe�alho
	$this->SetFont('Arial','B',10);  // define fonte, bold e tamanho
	$this->Ln(3);  // pula uma linha
	$this->Cell(130);
 	$this->Cell(60,5,'Porto Alegre,'.date('d').' de '.date('F').' de '.date('Y').'.',0);
 	$this->Ln(5);  // pula uma linha
	$this->SetFont('Arial','B',12);  // define fonte, bold e tamanho
 	$this->Ln(5);  // pula uma linha
	$this->Cell(70);
	$this->Cell(100,6,'RES_SMF','C'); // zero seta o tamanho at� o final da p�gina
	
	$this->Ln(7);
	$this->SetY(+25); // move a abscissa atual para a margem esquerda e define a ordenada
	$this->ln();
    $this->SetLineWidth(0.3); // define a grossura da linha novamente
	$this->SetFont('Arial','B',10);  // define fonte, bold e tamanho
}

function setMargin($l,$r) {
session_start();
	$this->SetLeftMargin($l);
	$this->SetRightMargin($r);
}

//Define o cabe�alho
function Header() {
// importa uma imagem do diretorio corrente
    $this->Image('procempa_positivo_grande.jpg', 10, 5, 70);
    $this->SetLineWidth(0.5);
    $this->Line(10,15,200,15);
    $this->SetFont('Arial','B',10);
}    


    
//Define o rodap�
function Footer() {
    
// escreve linha
   	$this->SetXY(+45,+270); // -30 � a posi��o da esquerda para a direita
    $this->SetFont('Courier','B',8);
    $this->Ln(5);
    $this->Cell(50);
    $this->Cell(0,6,'Companhia de Processamento de Dados do Municipio de Porto Alegre.');
    $this->Ln(3);
    $this->Cell(50);
    $this->Cell(0,6,'Av.Ipiranga,1200-CGCMF nº89.398.473/000100-fones:(051)32896000');
    $this->Ln(3);
    $this->Cell(50);
    $this->Cell(0,6,'Porto Alegre/RS  CEP 90160-091 email:procempa@procempa.com.br');
}

}

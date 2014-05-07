<?php

define('FPDF_FONTPATH', 'font/');
//require('fpdf.php');
require_once("../../fpdf/fpdf.php");

class PDF extends FPDF {

//define segundo cabecalho
    function Cabecalho() {
//escreve as informa��es do cabe�alho

        $this->SetY(+15);  // posi��o inicial do cabe�alho
        $this->SetFont('Arial', 'B', 9);  // define fonte, bold e tamanho
        //-------primeira linha NOME SERVI�O
        $this->Ln(20);  // pula uma linha
        $this->Cell(3);
        $this->Cell(123, 6,'' . $_SESSION['nomeserv'], 0, 0, 'L');
        $this->Cell(46, 6,'' . $_SESSION['usuario'], 0, 0, 'L');
        $this->Cell(20, 6,'' . $_SESSION['codusu'], 0, 0, 'L');
        //------segunda linha - COMPETENCIA
        $this->Ln(8);  // pula uma linha
        $this->Cell(23); //define margem
        $this->Cell(40, 5,''. $_SESSION['cpt1'], 0, 0, 'C');
        $this->Cell(15);
        $this->Cell(40, 5,''. $_SESSION['cpt2'], 0, 0, 'C');
        $this->Ln(1);
        $this->Cell(125);
        $this->Cell(37, 6, '' . $_SESSION['complem'], 0, 0, 'J');
        $this->Cell(23);
        $this->Cell(10, 6, '' . $_SESSION['tipofs'], 0, 0, 'L');
        //-------terceira linha - CHEGADA PREVISTA
        $this->SetFont('Arial', '', 7);  // define fonte, bold e tamanho
        $this->Ln(8);  // pula uma linha
        $this->Cell(2); //define margem
        $this->Cell(26, 5,'' . $_SESSION['chpv'], 0, 0, 'L');
        $this->Cell(2);
        $this->Cell(26, 5,'' . $_SESSION['sdpv'], 0, 0, 'L');
        $this->SetMargins(10, 35, 10);
//--'margem inferior
        $this->SetAutoPageBreak(true, 20);
        $this->SetFont('Arial', '', 8);
        $this->SetXY(75,50);
        $this->MultiCell(125, 3.5, '' . $_SESSION['spool'], 0, 'L', 0);


        // $this->Ln();
        //----quarta linha - Analista Responsavel
        // $this->Ln(10);  // pula uma linha
        //   $this->Cell(15);//define margem
        //  $this->Cell(25,5, ' '.$_SESSION[SIS], 1, 0, 'L');
        //  $this->Cell(25,5,' '.$_SESSION[SERV],1,0,'R');
        //**********************************************************************
    }

    var $col = 0;

    function SetCol($col) {
        //Move a posi�ao para a coluna especificada
        $this->col = $col;
        $x = 10 + $col * 65;
        $this->SetLeftMargin($x);
        $this->SetX($x);
    }

    function AcceptPageBreak() {
        if ($this->col < 2) {
            //Vai para a proxima coluna
            $this->SetCol($this->col + 1);
            $this->SetY(10);
            return false;
        } else {
            //Volta para a primeira coluna e permite a quebra de pagina
            $this->SetCol(0);
            return true;
        }
    }

    function setMargin($l, $r) {
        session_start();
        $this->SetLeftMargin($l);
        $this->SetRightMargin($r);
    }

//Define o cabe�alho
    function Header() {
// importa uma imagem do diretorio corrente
//$this->Image('Formulario_FS.jpg');
        $this->Image('../../FS.jpg', 8, 5, 198);
        //   $this->Image('procempa_positivo_grande.jpg', 10, 5, 70);
        $this->SetLineWidth(0.5); //define largura de linha

        $this->SetFont('Arial', 'B', 12); //define a fonte que sera usada
        $this->Ln(5);
        $this->Cell(85); //imprime uma celula
        $this->Cell(25, 10, '' . $_SESSION['sis'], 0, 0, 'C');
        $this->Cell(4);
        $this->Cell(10, 10, '' . $_SESSION['serv'], 0, 0, 'C');
        $this->Cell(2);
        $this->Cell(10, 10, '00', 0, 0, 'C');
        $this->Cell(5);
        $this->Cell(10, 10, '01', 0, 0, 'C');
        $this->Cell(10);
        $this->Cell(25, 10, '' . $_SESSION[NRO_FS], 0, 0, 'C');
        //$this->Line(10,15,200,15);//desenha uma linha entre dois pontos.
        $this->aliasnbpages(nb);

        $this->SetFont('Arial', 'B', 8);  // define fonte, bold e tamanho
        $this->SetTopMargin(2); //define a margem superior do documento
        $this->ln();
        $this->SetY(+25);
//session_destroy();
    }

//Define o rodap�
    function Footer() {
        
    }

}

?>

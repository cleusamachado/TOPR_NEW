<?php
ini_set( 'display_errors', TRUE );

error_reporting( E_ALL | E_STRICT ); // Para PHP > 5 e < 5.4

error_reporting( E_ALL ); // Para PHP 5.4+

include_once("../DAO/res_smfDAO.php");
include_once("../DAO/res_smf_estruturaDAO.php");

define('FPDF_FONTPATH','font/');
require_once("../fpdf/fpdf.php");

 
          

 class PDF extends FPDF
{


//define segundo cabecalho
function Cabecalho() {
//escreve as informações do cabeçalho

$rDAO = new res_smfDAO(); //instancia 

    $res = $rDAO->obterRESMF();
    
    foreach ($res as $linha) {
    
       

        $Lote_Postagem = $linha["lotePostagem"];
        // echo $Lote_Postagem;
        $Data_Postagem = sql_to_datetime($linha["dataPostagem"]);

        //  echo $Data_Postagem;
	$this->SetY(+25);  // posição inicial do cabeçalho
	$this->SetFont('Arial','B',8);  // define fonte, bold e tamanho

	$this->Ln(19);  // pula uma linha
	$this->Cell(150);
	$this->Cell(150,8,$Lote_Postagem, 0, 0, 'J');
       $this->Cell(168,6,$Data_Postagem,0,0,'C');
       $this->Cell(18,6,$NomeContratante,0,0,'C');

       $this->Ln(8);  // pula uma linha
       $this->Cell(25);//define margem

	$this->SetFont('');  // define fonte, bold e tamanho
 	$this->Ln(10);  // pula uma linha

 	//**********************************************************************

}
}

function setMargin($l,$r) {
session_start();
	$this->SetLeftMargin($l);
	$this->SetRightMargin($r);
}



//Define o cabeçalho
function Header() {
// importa uma imagem do diretorio corrente
$this->Image('../images/RES.jpg', 8,5, 198);
 //   $this->Image('procempa_positivo_grande.jpg', 10, 5, 70);
      $this->SetLineWidth(0.5);//define largura de linha
      $this->SetFont('Arial','B',10);//define a fonte que sera usada
      $this->Cell(190);//imprime uma celula
	$this->SetFont('Arial','B',8);  // define fonte, bold e tamanho
	$this->SetTopMargin(2);//define a margem superior do documento
       $this->ln();
   	$this->SetY(+25);



}

//Define o rodapé
function Footer() {
}
}
?>

<?php
session_start();

include_once("../classes/class.db.inc.php");
include_once("defines.inc.php");
define('FPDF_FONTPATH','font/');
require_once("../FPDF/fpdf.php");

include "RES_SMF_pdf.php";


// Startar uma sessï¿½o

// Instanciar a classe de banco
$db = new db;

// transforma data mysql para formato brasil
function sql_to_datetime($data) {
$data = explode(" ",$data);
return implode("/",array_reverse(explode("-",$data[0])))." ".$data[1];
}
//echo sql_to_datetime($resultado["Data_Postagem"]);

function formatando($input)
{
  if(strlen($input)<=5)
  { return $input; }
  $length=substr($input,0,strlen($input)-3);
  $formatted_input = formatando($length).".".substr($input,-3);
  return $formatted_input;
}

$NroRES = $_GET['NroRES'];
//echo $NroRES;

   $squery="select * from res_smf AS smf CROSS JOIN res_smf_estrutura WHERE NroRES = '$NroRES' ";
             $db->query($squery);
             $total = mysql_num_rows($db->res);
            // echo "$total<BR>";
             if ($total > 0) {
                for ($i = 0; $i <= ($total); $i++) {
                  $linha = $db->le_linha();
                  $NroRES = $linha["NroRES"];
  //  echo $NroRES;

    $Lote_Postagem = $linha["Lote_Postagem"];
   // echo $Lote_Postagem;
    $Data_Postagem = sql_to_datetime($linha["Data_Postagem"]);

  //  echo $Data_Postagem;
    $NomeContratante = $linha['NomeContratante'];
  //  echo $NomeContratante;
    $NumContrato = $linha['NumContrato'];
    $CodAdministrativo = $linha['CodAdministrativo'];
    $DrPostagem = $linha['DrPostagem'];
    $Localidade = $linha['Localidade'];
    $Codigo = $linha['Codigo'];
    $FacLocal = $linha['Fac_Local'];
    $FacEstadual = $linha['Fac_Estadual'];
    $FacNacional = $linha['Fac_Nacional'];
    $UnidadePostagem = $linha['UnidadePostagem'];
    $NumCartaoPostagem = $linha['NumCartaoPostagem'];
    $Codigo = $linha['Codigo'];
    $Relatorio1 =strtoupper($linha['Relatorio1']);
    $Relatorio2 =strtoupper($linha['Relatorio2']);
    $Relatorio3 =strtoupper($linha['Relatorio3']);
    $Relatorio4 =strtoupper($linha['Relatorio4']);
    $Relatorio5 =strtoupper($linha['Relatorio5']);
    $Relatorio6 =strtoupper($linha['Relatorio6']);
    $Relatorio7 =strtoupper($linha['Relatorio7']);
    $Relatorio8 =strtoupper($linha['Relatorio8']);
    $Relatorio9 =strtoupper($linha['Relatorio9']);
    $Relatorio10 =strtoupper($linha['Relatorio10']);
    $Relatorio11 =strtoupper($linha['Relatorio11']);
    $Relatorio12 =strtoupper($linha['Relatorio12']);
    $Relatorio13 =strtoupper($linha['Relatorio13']);
    $Relatorio14 =strtoupper($linha['Relatorio14']);
    $Relatorio15 =strtoupper($linha['Relatorio15']);
    $PesoUnitario = $linha['PesoUnitario'];
    $PesoUnitario2 = $linha['PesoUnitario2'];
    $PesoUnitario3 = $linha['PesoUnitario3'];
    $PesoUnitario4 = $linha['PesoUnitario4'];
    $PesoUnitario5 = $linha['PesoUnitario5'];
    $PesoUnitario6 = $linha['PesoUnitario6'];
    $PesoUnitario7 = $linha['PesoUnitario7'];
    $PesoUnitario8 = $linha['PesoUnitario8'];
    $PesoUnitario9 = $linha['PesoUnitario9'];
    $PesoUnitario10 = $linha['PesoUnitario10'];
    $PesoUnitario11 = $linha['PesoUnitario11'];
    $PesoUnitario12 = $linha['PesoUnitario12'];
    $PesoUnitario13 = $linha['PesoUnitario13'];
    $PesoUnitario14 = $linha['PesoUnitario14'];
    $PesoUnitario15 = $linha['PesoUnitario15'];

    $QuantObjetos = ($linha['QuantObjetos']);
    $QuantObjetos2 = ($linha['QuantObjetos2']);
    $QuantObjetos3 = ($linha['QuantObjetos3']);
    $QuantObjetos4 = ($linha['QuantObjetos4']);
    $QuantObjetos5 = ($linha['QuantObjetos5']);
    $QuantObjetos6 = ($linha['QuantObjetos6']);
    $QuantObjetos7 = ($linha['QuantObjetos7']);
    $QuantObjetos8 = ($linha['QuantObjetos8']);
    $QuantObjetos9 = ($linha['QuantObjetos9']);
    $QuantObjetos10 = ($linha['QuantObjetos10']);
    $QuantObjetos11 = ($linha['QuantObjetos11']);
    $QuantObjetos12 = ($linha['QuantObjetos12']);
    $QuantObjetos13 = ($linha['QuantObjetos13']);
    $QuantObjetos14 = ($linha['QuantObjetos14']);
    $QuantObjetos15 = ($linha['QuantObjetos15']);


    $Peso_Total = sprintf("%01.1f", $linha['Peso_Total']);

    $Peso_Total2 = sprintf("%01.1f",$linha['Peso_Total2']);
    $Peso_Total3 = sprintf("%01.1f",$linha['Peso_Total3']);
    $Peso_Total4 = sprintf("%01.1f",$linha['Peso_Total4']);
    $Peso_Total5 = sprintf("%01.1f",$linha['Peso_Total5']);
    $Peso_Total6 = sprintf("%01.1f",$linha['Peso_Total6']);
    $Peso_Total7 = sprintf("%01.1f",$linha['Peso_Total7']);
    $Peso_Total8 = sprintf("%01.1f",$linha['Peso_Total8']);
    $Peso_Total9 = sprintf("%01.1f",$linha['Peso_Total9']);
    $Peso_Total10 = sprintf("%01.1f",$linha['Peso_Total10']);
    $Peso_Total11 = sprintf("%01.1f",$linha['Peso_Total11']);
    $Peso_Total12 = sprintf("%01.1f",$linha['Peso_Total12']);
    $Peso_Total13 = sprintf("%01.1f",$linha['Peso_Total13']);
    $Peso_Total14 = sprintf("%01.1f",$linha['Peso_Total14']);
    $Peso_Total15 = sprintf("%01.1f",$linha['Peso_Total15']);

    $NomeServico = $linha['NomeServico'];
    $Competencia = sql_to_datetime($linha['Competencia']);
    $Complemento = $linha['Complemento'];
    $Funcionario = $linha['Funcionario'];


    $SubTotal1 = sprintf("%01.1f",$Peso_Total+$Peso_Total2+$Peso_Total3+$Peso_Total4+$Peso_Total5);
    $SubTotal2 = sprintf("%01.1f",$Peso_Total6+$Peso_Total7+$Peso_Total8+$Peso_Total9+$Peso_Total10);
    $SubTotal3 = sprintf("%01.1f",$Peso_Total11+$Peso_Total12+$Peso_Total13+$Peso_Total14+$Peso_Total15);

    $Total = sprintf("%01.1f",$SubTotal1+$SubTotal2+$SubTotal3);


    $pdf = new PDF('P');
    $pdf->Open();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',10);
    $pdf->SetAutoPageBreak(true,0);  // seta  a margem inferior

    // imprime cabeçalho e uma linha em branco
    $pdf->Cabecalho();

	//escreve as informações do cabeçalho
	$pdf->SetY(+9);  // posição inicial do cabeçalho
	$pdf->SetFont('Arial','B',10);  // define fonte, bold e tamanho
 	//$pdf->Ln();  // pula uma linha
	$pdf->SetX(10);
    $pdf->Cell(115);
	$pdf->Cell(40,6, $Lote_Postagem,'','T','C');
	$pdf->Cell(35,6,''.$Data_Postagem,'','T','C');
	$pdf->ln(12);

    $pdf->SetLeftMargin(25); //define margem esquerda
	$pdf->Cell(120,5,$NomeContratante,'','L','C');
    $pdf->Ln(10);
  	$pdf->Cell(25,6,$NumContrato,'','B','C');
    $pdf->Cell(35);
	$pdf->Cell(35,7,$CodAdministrativo,'','B','C');
    $pdf->Cell(25);
    $pdf->Cell(35,7,$NumCartaoPostagem,'','B','C');
    $pdf->Ln(10);
    $pdf->Cell(25,6,$DrPostagem,'','B','C');
    $pdf->Cell(25);
    $pdf->Cell(30,6,$Localidade,'','B','C');
    $pdf->Cell(10);
    $pdf->Cell(30,6,$UnidadePostagem,'','B','C');
    $pdf->Cell(10);
    $pdf->Cell(30,6,$Codigo,'','B','C');
    $pdf->Ln(2);


    $pdf->SetFont('Arial','',10);
    $pdf->SetLeftMargin(12); //define margem esquerda
    $pdf->SetY(+83);
    $pdf->Cell(22);
    $pdf->Cell(22,5, $FacLocal,'','B','C');
    $pdf->Ln(11);
    $pdf->Cell(1);
    $pdf->Cell(50,5, $Relatorio1,'','','L');
    $pdf->Cell(12);
    $pdf->Cell(25,4, $PesoUnitario,'','','C');
    $pdf->Cell(18);
    $pdf->Cell(25,4, $QuantObjetos,'','','C');
    $pdf->Cell(20);
    $pdf->Cell(25,4, $Peso_Total,'','B','C');

    $pdf->Ln(5);
    $pdf->Cell(1);
    $pdf->Cell(50,4, $Relatorio2,'','','L');
    $pdf->Cell(12);
    $pdf->Cell(25,4, $PesoUnitario2,'','','C');
    $pdf->Cell(18);
    $pdf->Cell(25,4, $QuantObjetos2,'','','C');
    $pdf->Cell(20);
    $pdf->Cell(25,4, $Peso_Total2,'','B','C');
    $pdf->Ln(5);
    $pdf->Cell(1);
    $pdf->Cell(50,4, $Relatorio3,'','','L');
    $pdf->Cell(12);
    $pdf->Cell(25,4, $PesoUnitario3,'','','C');
    $pdf->Cell(18);
    $pdf->Cell(25,4, $QuantObjetos3,'','','C');
    $pdf->Cell(20);
    $pdf->Cell(25,4, $Peso_Total3,'','B','C');
    $pdf->Ln(5);
    $pdf->Cell(1);
    $pdf->Cell(50,4, $Relatorio4,'','','L');
    $pdf->Cell(12);
    $pdf->Cell(25,4, $PesoUnitario4,'','','C');
    $pdf->Cell(18);
    $pdf->Cell(25,4, $QuantObjetos4,'','','C');
    $pdf->Cell(20);
    $pdf->Cell(25,4, $Peso_Total4,'','B','C');
    $pdf->Ln(5);
    $pdf->Cell(1);
    $pdf->Cell(50,4, $Relatorio5,'','','L');
    $pdf->Cell(12);
    $pdf->Cell(25,4, $PesoUnitario5,'','','C');
    $pdf->Cell(18);
    $pdf->Cell(25,4, $QuantObjetos5,'','','C');
    $pdf->Cell(20);
    $pdf->Cell(25,4, $Peso_Total5,'','B','C');
    $pdf->ln(25);
    $pdf->SetY(+53);
    $pdf->Cell(55);
    $pdf->ln(9);
   // $pdf->SetLeftMargin(18); //define margem esquerda
    $pdf->SetY(+118);
    $pdf->Cell(156);
    $pdf->Cell(30,5, $SubTotal1,'','B','C');



    $pdf->SetLeftMargin(12); //define margem esquerda
    $pdf->SetY(+125);
    $pdf->Cell(22);
    $pdf->Cell(30,5, $FacEstadual,'','B','C');
    $pdf->Ln(11);
    $pdf->Cell(1);
    $pdf->Cell(50,5, $Relatorio6,'','','L');
    $pdf->Cell(12);
    $pdf->Cell(25,4, $PesoUnitario6,'','','C');
    $pdf->Cell(18);
    $pdf->Cell(25,4, $QuantObjetos6,'','','C');
    $pdf->Cell(20);
    $pdf->Cell(25,4, $Peso_Total6,'','B','C');


    $pdf->Ln(5);
    $pdf->Cell(1);
    $pdf->Cell(50,4, $Relatorio7,'','','L');
    $pdf->Cell(12);
    $pdf->Cell(25,4, $PesoUnitario7,'','','C');
    $pdf->Cell(18);
    $pdf->Cell(25,4, $QuantObjetos7,'','','C');
    $pdf->Cell(20);
    $pdf->Cell(25,4, $Peso_Total7,'','B','C');
    $pdf->Ln(5);
    $pdf->Cell(1);
    $pdf->Cell(50,4, $Relatorio8,'','','L');
    $pdf->Cell(12);
    $pdf->Cell(25,4, $PesoUnitario8,'','','C');
    $pdf->Cell(18);
    $pdf->Cell(25,4, $QuantObjetos8,'','','C');
    $pdf->Cell(20);
    $pdf->Cell(25,4, $Peso_Total8,'','B','C');
    $pdf->Ln(4);
    $pdf->Cell(1);
    $pdf->Cell(50,4, $Relatorio9,'','','L');
    $pdf->Cell(12);
    $pdf->Cell(25,4, $PesoUnitario9,'','','C');
    $pdf->Cell(18);
    $pdf->Cell(25,4, $QuantObjetos9,'','','C');
    $pdf->Cell(20);
    $pdf->Cell(25,4, $Peso_Total9,'','B','C');
    $pdf->Ln(4);
    $pdf->Cell(1);
    $pdf->Cell(50,4, $Relatorio10,'','B','L');
    $pdf->Cell(12);
    $pdf->Cell(25,4, $PesoUnitario10,'','B','C');
    $pdf->Cell(18);
    $pdf->Cell(25,4, $QuantObjetos10,'','B','C');
    $pdf->Cell(20);
    $pdf->Cell(25,4, $Peso_Total10,'','B','C');
    $pdf->ln(25);
    $pdf->SetY(+53);
    $pdf->Cell(55);
    $pdf->ln(9);
 //   $pdf->SetLeftMargin(18); //define margem esquerda
    $pdf->SetY(+159);
    $pdf->Cell(160);
    $pdf->Cell(25,5, $SubTotal2,'','B','C');

    $pdf->SetLeftMargin(12); //define margem esquerda
    $pdf->SetY(+167);
    $pdf->Cell(21);
    $pdf->Cell(30,4, $FacNacional,'','B','C');
    $pdf->Ln(11);
    $pdf->Cell(1);
    $pdf->Cell(50,4, $Relatorio11,'','B','L');
    $pdf->Cell(12);
    $pdf->Cell(25,4, $PesoUnitario11,'','B','C');
    $pdf->Cell(18);
    $pdf->Cell(25,4, $QuantObjetos11,'','B','C');
    $pdf->Cell(20);
    $pdf->Cell(25,4, $Peso_Total11,'','B','C');


    $pdf->Ln(5);
    $pdf->Cell(1);
    $pdf->Cell(50,4, $Relatorio12,'','B','L');
    $pdf->Cell(12);
    $pdf->Cell(25,4, $PesoUnitario12,'','B','C');
    $pdf->Cell(18);
    $pdf->Cell(25,4, $QuantObjetos12,'','B','C');
    $pdf->Cell(20);
    $pdf->Cell(25,4, $Peso_Total12,'','B','C');
    $pdf->Ln(5);
    $pdf->Cell(1);
    $pdf->Cell(50,4, $Relatorio13,'','B','L');
    $pdf->Cell(12);
    $pdf->Cell(25,4, $PesoUnitario13,'','B','C');
    $pdf->Cell(18);
    $pdf->Cell(25,4, $QuantObjetos13,'','B','C');
    $pdf->Cell(20);
    $pdf->Cell(25,4, $Peso_Total13,'','B','C');
    $pdf->Ln(4);
    $pdf->Cell(1);
    $pdf->Cell(50,4, $Relatorio14,'','B','L');
    $pdf->Cell(12);
    $pdf->Cell(25,4, $PesoUnitario14,'','B','C');
    $pdf->Cell(18);
    $pdf->Cell(25,4, $QuantObjetos14,'','B','C');
    $pdf->Cell(20);
    $pdf->Cell(25,4, $Peso_Total14,'','B','C');
    $pdf->Ln(4);
    $pdf->Cell(1);
    $pdf->Cell(50,4, $Relatorio15,'','B','L');
    $pdf->Cell(12);
    $pdf->Cell(25,4, $PesoUnitario15,'','B','C');
    $pdf->Cell(18);
    $pdf->Cell(25,4, $QuantObjetos15,'','B','C');
    $pdf->Cell(20);
    $pdf->Cell(25,4, $Peso_Total15,'','B','C');
    $pdf->ln(25);
    $pdf->SetY(+53);
    $pdf->Cell(55);
    $pdf->ln(11);
    $pdf->SetLeftMargin(18); //define margem esquerda
    $pdf->SetY(+201);
    $pdf->Cell(156);
    $pdf->Cell(30,5, $SubTotal3,'','B','C');

    $pdf->SetLeftMargin(12); //define margem esquerda
    $pdf->SetY(+205);
    $pdf->Cell(25);
    $pdf->Cell(30,5, $Total,'','B','C');
    $pdf->ln(25);
    $pdf->SetY(+53);
    $pdf->Cell(55);
    $pdf->ln(9);

    $pdf->SetLeftMargin(18); //define margem esquerda
    $pdf->SetY(+217);
    $pdf->Cell(10);
    $pdf->Cell(20,5, 'SIAT','','B','C');
    $pdf->Cell(35);
    $pdf->Cell(20,5, 'SMT','','B','C');
    $pdf->Cell(48);
    $pdf->Cell(30,5, $NomeServico,'','B','C');
    $pdf->Ln(10);
    $pdf->Cell(4);
    $pdf->Cell(75,5, $Complemento,'','B','L');
    $pdf->Cell(35);
    $pdf->Cell(30,5, $Competencia,'','B','C');
    $pdf->Ln(10);
    $pdf->Cell(22);
    $pdf->Cell(75,5, 'Av.Sertório,4222 - A/C Sr.Julio','','B','C');
    $pdf->Ln(14);
    $pdf->Cell(95);
    $pdf->Cell(30,5, $Funcionario,'','B','C');

    $pdf->SetFont('Arial','B',12);
    $pdf->Ln(-2);
    $pdf->Cell(22);
    $pdf->Cell(30,5, $NroRES,'','B','C');
    $pdf->ln(25);
    $pdf->SetY(+53);
    $pdf->Cell(55);
    $pdf->ln(9);


	//echo $NroRES;
$arquivo_novo = $NroRES;
$trans = array("/" => "-");
$text = strtr($NroRES,$trans);
//echo $text;

$_SESSION['NroFS'] = $text;

//echo "session".$_SESSION['NroFS'];

$caminho = 'Temp/';

$novo_caminho = $caminho.$text;
//echo $novo_caminho;

$dados_enviados =  $_SESSION['ENVIAEMAIL'];
//echo $dados_enviados;

if($dados_enviados == false){

	$pdf->Output($NroRES.'_Postagem_Correio.pdf','D');

//	$pdf->Output($novo_caminho.'_Postagem_Correio.pdf','F');

	echo $dados_enviados;
}else{

//***********************************Enviar email para correios**************
if( substr(phpversion(),0,strpos(phpversion(), '-')) >= '5.0.0' ) {
$PHP_VERSAO = "PHP5";
} else {
$PHP_VERSAO = "PHP4";
}
// chamada da classe phpmailer
    require_once('../classes/PHPMailer_v2.0.3/class.phpmailer.php');

// Inicia a classe PHPMailer

$mail = new PHPMailer();
// Define os dados do servidor e tipo de conexão
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

//$mail->IsSMTP(); // Define que a mensagem será SMTP

//$mail->Host = "smtp.dominio.net"; // Endereço do servidor SMTP
//$mail->SMTPAuth = true; // Usa autenticação SMTP? (opcional)
//$mail->Username = 'seumail@dominio.net'; // Usuário do servidor SMTP
//$mail->Password = 'senha'; // Senha do servidor SMTP

// Define o remetente
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->From = "collares@procempa.com.br"; // Seu e-mail
$mail->FromName = "Protocolos"; // Seu nome

// Define os destinatário(s)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->AddAddress('collares@procempa.com.br', 'Cleusa Machado');
//$mail->AddAddress('alda@procempa.com.br');
//$mail->AddAddress('cleber@smf.prefpoa.com');
//$mail->AddAddress('ldex@smf.prefpoa.com.br');
//$mail->AddAddress('niraci@correios.com.br');


//$mail->AddCC('ciclano@site.net', 'Ciclano'); // Copia
//$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // Cópia Oculta

// Define os dados técnicos da Mensagem
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
//$mail->CharSet = 'iso-8859-1'; // Charset da mensagem (opcional)

// Define a mensagem (Texto e Assunto)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->Subject  = "Cartão Postagem SMF-DA-RES: $NroRES"; // Assunto da mensagem
$mail->Body = "Cartão Postagem SMF-DA";
$mail->AltBody = "Este é o corpo da mensagem de teste, em Texto Plano! \r\n ";


//************attachar RES em pdf*******************************

$NroRES = $_SESSION['NroFS'];


//echo "RES".$NroRES;
$arquivo = $NroRES."_Postagem_Correio.pdf";

//echo "teste arquivo".$arquivo;

$pdf->Output($NroRES.'_Postagem_Correio.pdf','D');

$pdf->Output($novo_caminho.'_Postagem_Correio.pdf','F');

$mail->AddAttachment("Temp/$arquivo", "$arquivo");  // Insere um anexo


// Envia o e-mail
//$enviado = $mail->Send();

    // Envia o e-mail
}
    if(!$mail->Send()) {

        $msg="Erro: ".$mail->ErrorInfo;

    } else {

	header("Location: confirma_email.php");
	exit(0);

        //$msg="Recebemos o seu comentário com sucesso, aguarde a aprovação";

    }

    // Limpa os destinatários e os anexos

    $mail->ClearAllRecipients();
    $mail->ClearAttachments();
    // Fim do envio do email

echo $dados_enviados;
}
}

?>

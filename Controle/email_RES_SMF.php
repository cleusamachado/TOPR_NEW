<?php
include_once("../classes/class.db.inc.php");
include_once("defines.inc.php");
define('FPDF_FONTPATH','font/');
require_once("../FPDF/fpdf.php"); 

// Instancia a classe db
$db = new db;


$NroRES = $_POST['input'];

echo "RES".$NroRES;

$NroRES = $_POST['NroRES'];
//echo $NroRES;


//***********************************Enviar email para correios*****************************
if( substr(phpversion(),0,strpos(phpversion(), '-')) >= '5.0.0' ) {
$PHP_VERSAO = "PHP5";
} else {
$PHP_VERSAO = "PHP4";
}
// chamada da classe phpmailer
    require_once('../classes/PHPMailer_v2.0.3/class.phpmailer.php');
  
// Inicia a classe PHPMailer

$mail = new PHPMailer();
// Define os dados do servidor e tipo de conex�o
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

//$mail->IsSMTP(); // Define que a mensagem ser� SMTP

//$mail->Host = "smtp.dominio.net"; // Endere�o do servidor SMTP
//$mail->SMTPAuth = true; // Usa autentica��o SMTP? (opcional)
//$mail->Username = 'seumail@dominio.net'; // Usu�rio do servidor SMTP
//$mail->Password = 'senha'; // Senha do servidor SMTP

// Define o remetente
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->From = "collares@procempa.com.br"; // Seu e-mail
$mail->FromName = "Protocolos"; // Seu nome

// Define os destinat�rio(s)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->AddAddress('collares@procempa.com.br', 'Cleusa Machado');
//$mail->AddAddress('alda@procempa.com.br'); 
//$mail->AddAddress('cleber@smf.prefpoa.com'); 
//$mail->AddAddress('ldex@smf.prefpoa.com.br');
//$mail->AddAddress('niraci@correios.com.br'); 
 

//$mail->AddCC('ciclano@site.net', 'Ciclano'); // Copia
//$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // C�pia Oculta

// Define os dados t�cnicos da Mensagem
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsHTML(true); // Define que o e-mail ser� enviado como HTML
//$mail->CharSet = 'iso-8859-1'; // Charset da mensagem (opcional)

// Define a mensagem (Texto e Assunto)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->Subject  = "Cart�o Postagem SMF-DA-RES: $NroRES"; // Assunto da mensagem
$mail->Body = "Cart�o Postagem SMF-DA";
$mail->AltBody = "Este � o corpo da mensagem de teste, em Texto Plano! \r\n ";

// Define os anexos (opcional)************attachar RES em pdf*******************************
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

$NroRES = $_POST['input'];

//echo "RES".$NroRES;
$arquivo = $NroRES."_Postagem_Correio.pdf";

//echo $arquivo;

if(file_exists("Temp/$arquivo")) { // verifica se arquivo existe!
//echo "O arquivo j� existe";


$mail->AddAttachment("Temp/$arquivo", "$arquivo");  // Insere um anexo


// Envia o e-mail
$enviado = $mail->Send();

// Limpa os destinat�rios e os anexos
$mail->ClearAllRecipients();
$mail->ClearAttachments();

// Exibe uma mensagem de resultado
if ($enviado) {
header("location:confirma_email.php");

//echo "E-mail enviado com sucesso!";
} else {
echo "N�o foi poss�vel enviar o e-mail.<br /><br />";
echo "<b>Informa��es do erro:</b> <br />" . $mail->ErrorInfo;
}
//******************Deletar arquivo do diretorio Temp ***************************
$arquivo = $NroRES."_Postagem_Correio.pdf";

$arquivo2 = "Temp/$arquivo";

if (!unlink($arquivo2))
{
  echo ("Erro ao deletar $arquivo");
}
else
{
  echo ("Deletado $arquivo com sucesso!");
}
}
else {
header("location:confirma_arquivo.php");
}

?>
<?php


ini_set("memory_limit", "64M"); //vai expandir a mem�ria do seu servidor

include_once("../DAO/res_smfDAO.php");
include_once("../DAO/res_smf_estruturaDAO.php");
include_once("../DAO/relatorioestadualDAO.php");
include_once("../DAO/relatorionacionalDAO.php");
include_once("../DAO/relatoriolocalDAO.php");



$file = '/programas/apache/htdocs/topr/producao/php/Temp/\'$NroRES' . '_Postagem_Correio.pdf';
if (file_exists($file)){
    unlink($file);
}
// transforma data mysql para formato brasil
function sql_to_datetime($data) {
    $data = explode(" ", $data);
    return implode("/", array_reverse(explode("-", $data[0]))) . " " . $data[1];
}

//echo sql_to_datetime($resultado["Data_Postagem"]);

function formatando($input) {
    if (strlen($input) <= 5) {
        return $input;
    }
    $length = substr($input, 0, strlen($input) - 3);
    $formatted_input = formatando($length) . "." . substr($input, -3);
    return $formatted_input;
}

$id_seed_estrutura = $_GET['id_estrutura'];

$estruturares = new res_smf_estruturaDAO();

$estrut = $estruturares->obterEstrutura($id_seed_estrutura);

        $NomeContratante = $estrut->getNomecontratante();
        $OrigemContrato = $estrut->getOrigemcontrato();
        $NumContrato = $estrut->getNumcontrato();
        $CodAdministrativo = $estrut->getCodadministrativo();
        $NumCartaoCliente = $estrut->getNumcartaocliente();
        $NumCartaoPostagem = $estrut->getNumcartaopostagem();
        $DrFaturamento = $estrut->getDrfaturamento();
        $Localidade = $estrut->getLocalidade();
        $UnidadePostagem = $estrut->getUnidadepostagem();
        $Codigo = $estrut->getCodigo();
        $Sistema = $estrut->getSistema();
        $NomeCliente = $estrut->getNomecliente();
        $Endereco = $estrut->getEndereco();
        $FacLocal = $estrut->getFac_local();
        $FacEstadual = $estrut->getFac_estadual();
        $FacNacional = $estrut->getFac_nacional();
        $Peso = $estrut->getPeso();
       
        

   $rDAO = new res_smfDAO(); //instancia 

    $res = $rDAO->obterRESMF();
    
    foreach ($res as $linha) {
    
        $NroRES = $linha["NroRES"];
        echo $NroRES;

        $Lote_Postagem = $linha["lotePostagem"];
        // echo $Lote_Postagem;
        $Data_Postagem = sql_to_datetime($linha["dataPostagem"]);
        
        $NomeServico = $linha['NomeServico'];
        $Competencia = sql_to_datetime($linha['Competencia']);
        $Complemento = $linha['Complemento'];
        $Funcionario = $linha['Funcionario'];

        
    $localDAO = new relatoriolocalDAO(); //instancia 

    $relocal = $local->obterRelLocal();
    
    var_dump($relocal);
    
    foreach ($relocal as $local) {
        $objLocal = $local['objLocal'];
        $relatorio = strtoupper($local['relatorio']);
        $Peso_TotalLocal = sprintf("%01.1f", $local['Peso_TotalLocal']);
        $SubTotalObj1 = ($local['objLocal']);

       
       
    $estadualDAO = new relatorioestadualDAO(); //instancia 

    $relest = $est->obterRelEst();
    
    foreach ($relest as $estadual) {
        
        $relatorio1 = strtoupper($estadual['relatorio']);
        $Peso_TotalEst = sprintf("%01.1f", $estadual['Peso_TotalEst']);
        $SubTotalObj1 = ($estadual['objEst']);
    

    $nacionalDAO = new relatorionacionalDAO(); //instancia 

    $relnac = $nac->obterRelNac();
    
    foreach ($relnac as $nacional) { 
        
        $relatorio2 = strtoupper($nacional['relatorio']);
        $Peso_TotalNac = sprintf("%01.1f", $nacional['Peso_TotalNac']);       
        $SubTotalObj3 = ($nacional['objNac']);

        $TotalObjetos = ($SubTotalObj1 + $SubTotalObj2 + $SubTotalObj3);


        $SubTotal1 = sprintf("%01.1f", $Peso_TotalLocal);
        $SubTotal2 = sprintf("%01.1f", $Peso_TotalEst);
        $SubTotal3 = sprintf("%01.1f", $Peso_TotalNac);

        $Total = sprintf("%01.1f", $SubTotal1 + $SubTotal2 + $SubTotal3);
    
        $local = "Porto Alegre,";
        $data = date('d/m/Y H:m:s');

        $datatual = $local . $data;

//************************
        include_once("RES_SMF_pdf.php");
        
        $pdf = new PDF;
 for ($i = 0; $i < 3; $i++) {
        $pdf->Open();
        

            $pdf->AddPage('P');


            $pdf->SetFont('Arial', 'B', 10);
            $pdf->SetAutoPageBreak('true', '0');

            $pdf->Cabecalho();

            //escreve as informa��es do cabe�alho
            $pdf->SetY(+9);  // posi��o inicial do cabe�alho
            $pdf->SetFont('Arial', 'B', 10);  // define fonte, bold e tamanho
            //$pdf->Ln();  // pula uma linha
            $pdf->SetX(10);
            $pdf->Cell(115);
            $pdf->Cell(40, 6, '', '', 'T', 'C');
           // $pdf->Cell(35, 6, '', $Data_Postagem, '', 'T', 'C');
            $pdf->ln(12);

            $pdf->SetLeftMargin(25); //define margem esquerda
            $pdf->Cell(120, 5, $NomeContratante, '', 'L', 'C');
            $pdf->Ln(10);
            $pdf->Cell(25, 6, $NumContrato, '', 'B', 'C');
            $pdf->Cell(35);
            $pdf->Cell(35, 7, $CodAdministrativo, '', 'B', 'C');
            $pdf->Cell(25);
            $pdf->Cell(35, 7, $NumCartaoPostagem, '', 'B', 'C');
            $pdf->Ln(22);
            $pdf->Cell(25, 6, $DrFaturamento, '', 'B', 'C');
            $pdf->Ln(18);
            $pdf->Cell(30,6,$Localidade,'','B','C');
            $pdf->Cell(10);
            $pdf->Cell(35, 6, $UnidadePostagem, '', 'B', 'C');
            $pdf->Cell(10);
            //$pdf->Ln(18);
            $pdf->Cell(55, 6, $Codigo, '', 'B', 'C');
            $pdf->Ln(2);


            $pdf->SetFont('Arial', 'B', 8);
            $pdf->SetLeftMargin(12); //define margem esquerda
            $pdf->SetY(+93);
            $pdf->Cell(22);
            // $pdf->Cell(22,5, $FacLocal,'','B','C');
            $pdf->Ln(9);
            $pdf->Cell(1);
            $pdf->Cell(55, 5, $FacLocal . "- FAC_LOCAL", '', 'B', 'C');
            $pdf->Cell(12);
            $pdf->Cell(35, 4, $FacEstadual . "- FAC_ESTADUAL", '', 'B', 'C');
            $pdf->Cell(18);
            $pdf->Cell(50, 4, $FacNacional . "- FAC_NACIONAL", '', 'B', 'C');
            $pdf->Cell(20);
            //$pdf->Cell(25,4, $Peso_Total,'','B','C');

            $pdf->SetFont('Arial', '', 10);
            $pdf->SetLeftMargin(10); //define margem esquerda
            $pdf->SetY(+93);
            $pdf->Ln(28);
            $pdf->Cell(1);
            $pdf->Cell(20, 4, $Peso, '', '', 'C');
            $pdf->Cell(20, 4, $objLocal, '', '', 'C');
            $pdf->Cell(20, 4, $Peso_TotalLocal, '', 'B', 'C');
            $pdf->Ln(7);
            $pdf->Cell(1);
            $pdf->Cell(20, 4, $Peso, '', '', 'C');
            $pdf->Cell(20, 4, $objEst, '', '', 'C');
            $pdf->Cell(20, 4, $Peso_TotalEst, '', 'B', 'C');
            $pdf->Ln(7);
            $pdf->Cell(1);
            $pdf->Cell(20, 4, $Peso, '', '', 'C');
            $pdf->Cell(20, 4, $objNac, '', '', 'C');
            $pdf->Cell(20, 4, $Peso_TotalNac, '', 'B', 'C');
            $pdf->Ln(7);
            $pdf->Cell(1);
           
            $pdf->SetFont('Arial', 'B', 10);

            $pdf->SetLeftMargin(12); //define margem esquerda
            $pdf->SetY(+166);
            $pdf->Cell(168);
            $pdf->Cell(20, 5, $TotalObjetos, '', 'B', 'C');
            $pdf->ln(10);
            $pdf->Cell(168);
            $pdf->Cell(20, 5, $Total, '', 'B', 'C');
            $pdf->Ln(12);
            $pdf->Cell(20);
            $pdf->Cell(120, 4, $relatorio, '', 'B', 'L');

            $pdf->ln(10);
            $pdf->SetFont('Arial', 'I', 8);
            $pdf->Cell(100, 3, $datatual, '', '', 'R');

            $pdf->SetFont('Arial', 'B', 10);
            $pdf->SetY(+205);

            $pdf->Cell(25);
            $pdf->Cell(100, 5, $Lote_Postagem, '1', '', 'L');


            $pdf->Cell(55);
            $pdf->ln(9);


            $pdf->SetFont('Arial', 'B', 10);
            $pdf->SetLeftMargin(18); //define margem esquerda
            $pdf->SetY(+217);
            $pdf->Cell(10);
            $pdf->Cell(20, 5, 'SIAT', '', 'B', 'C');
            $pdf->Cell(35);
            $pdf->Cell(20, 5, 'SMT', '', 'B', 'C');
            $pdf->Cell(48);
            $pdf->Cell(30, 5, $NomeServico, '', 'B', 'C');
            $pdf->Ln(10);
            $pdf->Cell(4);
            $pdf->Cell(75, 5, $Complemento, '', 'B', 'L');
            $pdf->Cell(35);
            $pdf->Cell(30, 5, $Competencia, '', 'B', 'C');
            $pdf->Ln(10);
            $pdf->Cell(22);
            $pdf->Cell(75, 5, 'Av.Sert�rio,4222 - A/C Sr.Julio', '', 'B', 'C');
            $pdf->Ln(14);
            $pdf->Cell(95);
            $pdf->Cell(30, 5, $Funcionario, '', 'B', 'C');

            $pdf->SetFont('Arial', 'B', 12);
            $pdf->Ln(-2);
            $pdf->Cell(22);
            $pdf->Cell(30, 5, $NroRES, '', 'B', 'C');
            $pdf->ln(25);
            $pdf->SetY(+53);
            $pdf->Cell(55);
            $pdf->ln(9);
        }
    }
    }
    }
    }

        $arquivo_novo = $NroRES;
        $trans = array("/" => "-");
        $text = strtr($NroRES, $trans);
//echo $text;

        $_SESSION['NroFS'] = $text;

//echo "session".$_SESSION['NroFS'];

        $novoarquivo = $_SESSION['NroFS'];

        $caminho = 'Temp/';

        $novo_caminho = $caminho . $text;
//echo $novo_caminho;

        $dados_enviados = $_SESSION['ENVIAEMAIL'];
//echo $dados_enviados;

        if ($dados_enviados == 'true') {



//***********************************Enviar email para correios*****************************
            //M�TODO USANDO A CLASSE PHPMAILER
// Detecta a vers�o do PHP.
            if (substr(phpversion(), 0, strpos(phpversion(), '-')) >= '5.0.0') {
                $PHP_VERSAO = "PHP5";
            } else {
                $PHP_VERSAO = "PHP4";
            }
// Inclui a classe phpmailer de acordo com a vers�o do PHP.
            include('../classes/PHPMailer_v2.0.3/class.phpmailer.php');

            $nome = 'Cleusa'; //PEGA O Nome DO REMETENTE
            $de = 'protocolos@procempa.com.br'; //PEGA O E-MAIL DO REMETENTE
            $para = 'collares@procempa.com.br';
            'cmcollares@gmail.com'; //PEGA O E-MAIL DO DESTINAT�RIO
            $assunto = "Cart�o Postagem SMF-DA-RES"; //PEGA O ASSUNTO DO E-MAIL
            $msn = "Cart�o Postagem SMF-DA-RES"; //PEGA A MENSAGEM DO E-MAIL
            $escondido = 'cmcollares@gmail.com';

//$mail->AddAddress('collares@procempa.com.br', 'Cleusa Machado');
//$mail->AddAddress('cleber@smf.prefpoa.com.br'); 
//$mail->AddAddress('ldex@smf.prefpoa.com.br','Leila Dexheimer');
//$mail->AddAddress('niraci@correios.com.br'); 
//$mail->AddAddress('adrianam@smf.prefpoa.com.br','Adriana da Rosa Marchiori');
//$mail->AddCc('alda@procempa.com.br'); // Copia
//$mail->AddBCc('collares@procempa.com.br'); // C�pia Oculta




            $mail = new PHPMailer(); //Instanciamos a classe PHPMailer
            $mail->IsMail(true); //Caso queira utilizar o programa de e-mail do seu servidor unix/linux para o envio de e-mail. Caso seja servidor windows o e-mail precisa ser enviado via STMP, ent�o ai inv�z de utilizar a fun��o $mail->IsMail() utilizamos $mail->IsSMTP()
            $mail->IsHTML(false);
            $mail->From = $de; //E-mail do remente da mensagem
            $mail->FromName = $nome; //Nome do remente da mensagem
            $mail->AddAddress("$para"); //E-mail que a mensagem ser� enviada
            $mail->AddBcc("$escondido"); // Adiciona c�pia oculta
            $mail->Body = $msn;
            $mail->Subject = $assunto; //Assunto da mensagem


            $arquivoteste = $novoarquivo . '_Postagem_Correio.pdf';
 

            $pdf->Output($novo_caminho . '_Postagem_Correio.pdf', 'F');


            //vamos anexar os arquivos:

            $mail->AddAttachment("Temp/$arquivoteste", "$arquivoteste");  // Insere um anexo
            //echo "Temp/$arquivoteste";

            $pdf->Output($NroRES . '_Postagem_Correio.pdf', 'I');
			
			$mail->Send();

            /*if ($mail->Send()) { //Envia a mensagem
                echo "E-mail enviado com sucesso!"; //Mensagem do envio realizado com sucesso
            } else {

                echo "<font color=red>Erro ao enviar e-mail, tente novamente mais tarde!</font>"; //Mensagem de erro, caso n�o seja poss�vel enviar a mensagem
            }*/
        } else {

            $pdf->Output($NroRES . '_Postagem_Correio.pdf', 'I');

            $pdf->Output($novo_caminho . '_Postagem_Correio.pdf', 'F');
        }
	

//******************Deletar arquivo do diretorio Temp ***************************
        $arquivo = $NroRES . "_Postagem_Correio.pdf";

        $arquivo2 = "Temp/$arquivo";

        if (!unlink($arquivo2)) {
            echo ("Erro ao deletar $arquivo");
        } else {
            echo ("Deletado $arquivo com sucesso!");
        }
    

?>                

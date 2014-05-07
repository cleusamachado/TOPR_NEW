<?php

// Include dos arquivos de classes e define
 include_once("../classes/class.db.inc.php");
 include_once("defines.inc.php");
 include_once("../classes/class.TemplatePower.inc.php");

 include 'pes_RES_SMF_pdf.php';

 // Instancia a classe db
 $db = new db;
 
//var_dump($_POST);
 
 //traz do form pesquisaData.php as datas atraz do post
 
$Sdata_inicio=$_POST["data_inicio"];
//echo $Sdata_inicio;

function ConverteData($Sdata_inicio){
  if (strstr($Sdata_inicio, "/"))//verifica se tem a barra /
 {
  $d = explode ("/", $Sdata_inicio);//tira a barra
 $rstData = "$d[2]-$d[1]-$d[0]";//separa as datas $d[2] = ano $d[1] = mes etc...
 return $rstData;
 } elseif(strstr($Sdata_inicio, "-")){
 $d = explode ("-", $Sdata_inicio);
 $rstData = "$d[2]/$d[11]/$d[00]";
 return $rstData;
 }else{
 return "Data invalida";
 }
 //echo $rstData;
 }

//echo ConverteData("$Sdata_inicio"); // formato nacional
ConverteData("$Sdata_inicio"); // formato americano

 $Sdata_inicio = ConverteData("$Sdata_inicio");
 $data = date('Y-m-d', strtotime($Sdata_inicio));
 $data;
 //echo "$data <BR>";

 
 
$Sdata_fim=$_POST["data_fim"];

function ConverteData1($Sdata_fim){
  if (strstr($Sdata_fim, "/"))//verifica se tem a barra /
 {
  $d = explode ("/", $Sdata_fim);//tira a barra
 $rstData = "$d[2]-$d[1]-$d[0]";//separa as datas $d[2] = ano $d[1] = mes etc...
 return $rstData;
 } elseif(strstr($Sdata_fim, "-")){
 $d = explode ("-", $Sdata_fim);
 $rstData = "$d[2]/$d[1]/$d[0]";
 return $rstData ;
 }else{
 return "Data invalida";
 }
 }

 $Sdata_fim = ConverteData1("$Sdata_fim");
 $data1 = date('Y-m-d', strtotime($Sdata_fim));
 $data1;
  //echo "$data1<BR>";
 



//verifica se campos estao preenchidos

$erro=0;

	if (empty ($data))
		{echo "<script> location.href = 'erro_pesquisa.php?&data=$data'; </script>";$erro=1;}

	if (empty ($data1))
		{echo "<script> location.href = 'erro_pesquisa.php?&data1=$data1'; </script>";$erro=1;}


    $pdf = new PDF('P');
    $pdf->Open();
    $pdf->AddPage();
    $pdf->SetFont('Arial','',10);
    $pdf->SetAutoPageBreak(true,19);  // seta  a margem inferior


    // imprime cabeçalho e uma linha em branco
    $pdf->Cabecalho();
    $pdf->Ln();
    $pdf->SetFont('Arial','B',10);  // define fonte, bold e tamanho
    $pdf->SetTopMargin(25);
    

//	$pdf->SetFillColor(200);
 	$pdf->Cell(30,5,'Lotes',1,0,'C',0);       
	$pdf->Cell(30,5,'Competencia',1,0,'',0);
	$pdf->Cell(30,5,'DataPostagem',1,0,'C',0);
        $pdf->Cell(60,5,'Relatorio',1,0,'',0);
        $pdf->Cell(30,5,'QuantObjetos',1,0,'C',0); 
          		
                  
               $sql = "select * from res_smf " 
		    . " WHERE competencia >='$data' AND competencia <='$data1' "			
                    . " ORDER BY id_seed_smf DESC";
                        $db->query($sql);
                        $total = mysql_num_rows($db->res);
                        //echo "$total";
	 // Verifica o nro de registros retornados pelo banco
	 if ($total <> 0 )
	// echo "$total";
	 {

	   $muda_cor = true;
	   for ($i=0;$i<=($total);  $i++){

                            $linha = $db->le_linha();
			    $Lote_Postagem = $linha['Lote_Postagem'];
                            //echo $Lote_Postagem;
                            $Competencia = $linha['Competencia'];
                            $Data_Postagem = $linha['Data_Postagem'];
                            
            $pdf->SetFont('Arial','',8);
            $pdf->Ln();
            $pdf->Cell(30,5,$Lote_Postagem,1,0,'C',0); 
            $pdf->Cell(30,5,$Competencia,1,0,'',0);
            $pdf->Cell(30,5,$Data_Postagem,1,0,'',0);
            
           } 
         $pdf->Ln();
          
          $squery = "select * from res_smf " 
		    . " WHERE competencia >='$data' AND competencia <='$data1' "			
                    . " ORDER BY id_seed_smf DESC";
        
          
                        $resultc=mysql_query($squery);
                        $quantc=mysql_num_rows($resultc);
                             //echo " <p> $quantc </p>";
      //$total_geral = 0;
    for($i=0;$i<>$quantc;$i++){
        $dados=mysql_fetch_array($resultc);
         
        $pdf->SetFont('Arial','',8);
        
        $array = array($dados['Relatorio1'],$dados['Relatorio2'],$dados['Relatorio3'],$dados['Relatorio4'],$dados['Relatorio5'],$dados['Relatorio6'],$dados['Relatorio7'],$dados['Relatorio8'],$dados['Relatorio9'],$dados['Relatorio10'],
            $dados['Relatorio11'],$dados['Relatorio12'],$dados['Relatorio13'],$dados['Relatorio14'],$dados['Relatorio15']);
        
        $array2 = array($dados['QuantObjetos'],$dados['QuantObjetos2'],$dados['QuantObjetos3'],
              $dados['QuantObjetos4'],$dados['QuantObjetos5'],$dados['QuantObjetos6'],
              $dados['QuantObjetos7'],$dados['QuantObjetos8'],$dados['QuantObjetos9'],$dados['QuantObjetos10'],
              $dados['QuantObjetos11'],$dados['QuantObjetos12'],$dados['QuantObjetos13'],$dados['QuantObjetos14'],$dados['QuantObjetos15']);  
                    foreach ($array as  $chave =>  $valor){ 
                            //$pdf->SetX(+10);
                            $pdf->Cell(60,5,$valor,1,0,'C',0);                    
                            $pdf->Ln();
                    }
                            
    
                    foreach ($array2 as  $chave2 =>  $valor2){
                        //echo $chave2."=>".$valor2."<br>";
                            //$pdf->SetX(+10); 
                        $pdf->Cell(62);
                        $pdf->Cell(30,5,$valor2,1,0,'C',0);                    
                         $pdf->Ln();
                    }
    }  
        }
         
$pdf->Ln();
     
        
      
                         
           	
                      
        
        
         
    $pdf->Output();
        
// final da function
//verifica se não houve erro
if($erro=0){
}        
     $db->libera_result();
         
?>
<?php
extract ($_GET,EXTR_OVERWRITE); // para $_GET
extract ($_POST,EXTR_OVERWRITE); //para $_POST

// Include dos arquivos de classes e define
include_once("../classes/class.db.inc.php");
include_once("defines.inc.php");
include_once("../classes/class.TemplatePower.inc.php");
//include_once("../fuction_array.php");

// Startar uma sessï¿½o
session_start();
// Instanciar a classe de banco
$db = new db;
 // Startar uma sessï¿½o

$data = date("Y-m-d");
//echo $data;


function DataBrasilMySQL($data) {
    // a data esta em d-m-Y para fazer a converção correta
    if (strlen($data) == 0) $data = date("d-m-Y");;
    if (strlen($data) <> 10) $data = date("d-m-Y");;
    $ano=strval(substr($data,6,4));
    $mes=strval(substr($data,3,2));
    $dia=strval(substr($data,0,2));
    return date("Y-m-d", mktime (0,0,0,$mes,$dia,$ano));
}
//echo DataBrasilMySQL($resultado["PERCOMINI"]);

//var_dump($_POST);
//var_dump($_REQUEST);

//echo $_POST[ 'dados_enviar'];
$_SESSION['ENVIAEMAIL'] = $_POST['dados_enviar'];


$_SESSION['IMPRIMIR'] = $_POST['imprimir'];

//echo $_SESSION['IMPRIMIR'];

//echo  $_SESSION['ENVIAEMAIL'];

if(isset($_POST['imprimir'])){


$Lote_Postagem = ($_POST['Lote_Postagem']);
//echo "Lote_Postagem:$Lote_Postagem<br>";
$Data_Postagem = DataBrasilMySQL($_POST['Data_Postagem']);
//echo "data_postagem:$Data_Postagem<br>";
$NomeContratante= ($_POST['NomeContratante']);
//echo "nomecontratante:$NomeContratante<br>";
$NumContrato= ($_POST['NumContrato']);
//echo "numcontrato:$NumContrato<br>";
$CodAdministrativo= ($_POST["CodAdministrativo"]);
//echo "codAdministrativo:$CodAdministrativo<br>";
$NumCartaoPostagem = ($_POST['NumCartaoPostagem']);
//echo "NumCartaoPostagem:$NumCartaoPostagem<br>";
$DrPostagem= ($_POST['DrPostagem']);
//echo "DrPostagem:$DrPostagem<br>";
$Localidade= ($_POST['Localidade']);
//echo "Localidade:$Localidade<br>";
$UnidadePostagem=$_POST['UnidadePostagem'];
//echo "UnidadePostagem: $UnidadePostagem<br>";
$Codigo = $_POST['Codigo'];
//echo "Codigo:$Codigo<br>";



$id_seed_estrutura = $_REQUEST['id_estrutura'];
//echo "id_estrutura: $id_seed_estrutura<br>";

$FacLocal = $_POST['Fac_Local'];
//echo "FacLocal: $FacLocal<br>";

$Relatorio1 = $_REQUEST['Relatorio1'];
//echo "relatorio1: $Relatorio1<br>";
$PesoUnitario = $_REQUEST['PesoUnitario'];
//echo "PesoUnitario: $PesoUnitario<br>";
$QuantObjetos = $_REQUEST['QuantObjetos'];
//echo "QuantObjetos: $QuantObjetos<br>";
$Peso_Total = $_REQUEST['Peso_Total'];
///echo "Peso_Total: $Peso_Total<br>";

$Relatorio2 = $_REQUEST['Relatorio41'];
//echo "relatorio2: $Relatorio2<br>";
$PesoUnitario2 = $_REQUEST['PesoUnitario41'];
//echo "PesoUnitario2: $PesoUnitario2<br>";
$QuantObjetos2 = $_REQUEST['QuantObjetos41'];
//echo "QuantObjetos2: $QuantObjetos2<br>";
$Peso_Total2 = $_REQUEST['Peso_Total41'];
//echo "Peso_Total2: $Peso_Total2<br>";

$Relatorio3 = $_REQUEST['Relatorio42'];
//echo "relatorio3: $Relatorio3<br>";
$PesoUnitario3 = $_REQUEST['PesoUnitario42'];
//echo "PesoUnitario3: $PesoUnitario3<br>";
$QuantObjetos3 = $_REQUEST['QuantObjetos42'];
//echo "QuantObjetos3: $QuantObjetos3<br>";
$Peso_Total3 = $_REQUEST['Peso_Total42'];
//echo "Peso_Total3: $Peso_Total3<br>";

$Relatorio4 = $_REQUEST['Relatorio43'];
//echo "relatorio4: $Relatorio4<br>";
$PesoUnitario4 = $_REQUEST['PesoUnitario43'];
//echo "PesoUnitario4: $PesoUnitario4<br>";
$QuantObjetos4 = $_REQUEST['QuantObjetos43'];
//echo "QuantObjetos4: $QuantObjetos4<br>";
$Peso_Total4 = $_REQUEST['Peso_Total43'];
//echo "Peso_Total4: $Peso_Total4<br>";

$Relatorio5 = $_REQUEST['Relatorio44'];
//echo "relatorio5: $Relatorio5<br>";
$PesoUnitario5 = $_REQUEST['PesoUnitario44'];
//echo "PesoUnitario5: $PesoUnitario5<br>";
$QuantObjetos5 = $_REQUEST['QuantObjetos44'];
//echo "QuantObjetos5: $QuantObjetos5<br>";
$Peso_Total5 = $_REQUEST['Peso_Total44'];
//echo "Peso_Total5: $Peso_Total5<br>";

$FacEstadual = $_POST['Fac_Estadual'];
//echo "FacEstadual: $FacEstadual<br>";

$Relatorio6 = $_REQUEST['Relatorio2'];
//echo "relatorio6: $Relatorio6<br>";
$PesoUnitario6 = $_REQUEST['PesoUnitario2'];
//echo "PesoUnitario6: $PesoUnitario6<br>";
$QuantObjetos6 = $_REQUEST['QuantObjetos2'];
//echo "QuantObjetos6: $QuantObjetos6<br>";
$Peso_Total6 = $_REQUEST['Peso_Total2'];
//echo "Peso_Total6: $Peso_Total6<br>";

$Relatorio7 = $_REQUEST['Relatorio51'];
//echo "relatorio7: $Relatorio7<br>";
$PesoUnitario7 = $_REQUEST['PesoUnitario51'];
//echo "PesoUnitario7: $PesoUnitario7<br>";
$QuantObjetos7 = $_REQUEST['QuantObjetos51'];
//echo "QuantObjetos7: $QuantObjetos7<br>";
$Peso_Total7 = $_REQUEST['Peso_Total51'];
//echo "Peso_Total7: $Peso_Total7<br>";

$Relatorio8 = $_REQUEST['Relatorio52'];
//echo "relatorio8: $Relatorio8<br>";
$PesoUnitario8 = $_REQUEST['PesoUnitario52'];
//echo "PesoUnitario8: $PesoUnitario8<br>";
$QuantObjetos8 = $_REQUEST['QuantObjetos52'];
//echo "QuantObjetos8: $QuantObjetos8<br>";
$Peso_Total8 = $_REQUEST['Peso_Total52'];
//echo "Peso_Total8: $Peso_Total8<br>";

$Relatorio9 = $_REQUEST['Relatorio53'];
//echo "relatorio9: $Relatorio9<br>";
$PesoUnitario9 = $_REQUEST['PesoUnitario53'];
//echo "PesoUnitario9: $PesoUnitario9<br>";
$QuantObjetos9 = $_REQUEST['QuantObjetos53'];
//echo "QuantObjetos9: $QuantObjetos9<br>";
$Peso_Total9 = $_REQUEST['Peso_Total53'];
//echo "Peso_Total9: $Peso_Total9<br>";

$Relatorio10 = $_REQUEST['Relatorio54'];
//echo "relatorio10: $Relatorio10<br>";
$PesoUnitario10 = $_REQUEST['PesoUnitario54'];
//echo "PesoUnitario10: $PesoUnitario10<br>";
$QuantObjetos10 = $_REQUEST['QuantObjetos54'];
//echo "QuantObjetos10: $QuantObjetos10<br>";
$Peso_Total10 = $_REQUEST['Peso_Total54'];
//echo "Peso_Total10: $Peso_Total10<br>";

$FacNacional = $_POST['Fac_Nacional'];
//echo "FacNacional: $FacNacional<br>";

$Relatorio11 = $_REQUEST['Relatorio3'];
//echo "relatorio11: $Relatorio11<br>";
$PesoUnitario11 = $_REQUEST['PesoUnitario3'];
//echo "PesoUnitario11: $PesoUnitario11<br>";
$QuantObjetos11 = $_REQUEST['QuantObjetos3'];
//echo "QuantObjetos11: $QuantObjetos11<br>";
$Peso_Total11 = $_REQUEST['Peso_Total3'];
//echo "Peso_Total11: $Peso_Total11<br>";

$Relatorio12 = $_REQUEST['Relatorio61'];
//echo "relatorio12: $Relatorio12<br>";
$PesoUnitario12 = $_REQUEST['PesoUnitario61'];
//echo "PesoUnitario12: $PesoUnitario12<br>";
$QuantObjetos12 = $_REQUEST['QuantObjetos61'];
//echo "QuantObjetos12: $QuantObjetos12<br>";
$Peso_Total12 = $_REQUEST['Peso_Total61'];
//echo "Peso_Total12: $Peso_Total12<br>";

$Relatorio13 = $_REQUEST['Relatorio62'];
//echo "relatorio13: $Relatorio13<br>";
$PesoUnitario13 = $_REQUEST['PesoUnitario62'];
//echo "PesoUnitario13: $PesoUnitario13<br>";
$QuantObjetos13 = $_REQUEST['QuantObjetos62'];
//echo "QuantObjetos13: $QuantObjetos13<br>";
$Peso_Total13 = $_REQUEST['Peso_Total62'];
//echo "Peso_Total13: $Peso_Total13<br>";

$Relatorio14 = $_REQUEST['Relatorio63'];
//echo "relatorio14: $Relatorio14<br>";
$PesoUnitario14 = $_REQUEST['PesoUnitario63'];
//echo "PesoUnitario14: $PesoUnitario14<br>";
$QuantObjetos14 = $_REQUEST['QuantObjetos63'];
//echo "QuantObjetos14: $QuantObjetos14<br>";
$Peso_Total14 = $_REQUEST['Peso_Total63'];
//echo "Peso_Total14: $Peso_Total14<br>";

$Relatorio15 = $_REQUEST['Relatorio64'];
//echo "relatorio15: $Relatorio64<br>";
$PesoUnitario15 = $_REQUEST['PesoUnitario64'];
//echo "PesoUnitario15: $PesoUnitario15<br>";
$QuantObjetos15 = $_REQUEST['QuantObjetos64'];
//echo "QuantObjetos15: $QuantObjetos15<br>";
$Peso_Total15 = $_REQUEST['Peso_Total64'];
//echo "Peso_Total15: $Peso_Total15<br>";

$NomeServico = $_REQUEST['NomeServico'];
//echo "NomeServico: $NomeServico<br>";
$Competencia = DataBrasilMySQL($_REQUEST['Competencia']);
//echo "Competencia: $Competencia<br>";
$Complemento = $_REQUEST['Complemento'];
//echo "Complemento: $Complemento<br>";

$Funcionario = $_REQUEST['funcionario'];
//echo "funcionario: $Funcionario<br>";


  
          $sql1 = "select * from nro_res_smf order by nro_seq desc";
             $db->query($sql1);
             $total = mysql_num_rows($db->res);
             //echo "$total<BR>";
             if ($total > 0) {
                //for ($i = 0; $i <= ($total); $i++) {
                  $linha = $db->le_linha();
                  //echo "$linha[nro_seq]";
                  $nro_seq = $linha[nro_seq];
                  //echo "sequencia".$nro_seq;

// define data e hora
$data_inclusao = date("Y-m-d h:i:s");
//echo $data_inclusao;
$nroano = date("Y");
//echo $nroano;

if ($nroano != $nroano) {
   $nro_seq = 0;
}

//echo "$nroseq <BR>";
$nro_seqNovo = $nro_seq + 1;
//$str=(strlen($nroseq));
//echo $nro_seqNovo;

if (strlen($nro_seqNovo) == "1") {
    $zeros = "000";
} elseif (strlen($nroseqNovo) == "2") {
    $zeros = "00";
} else {
    $zeros = "0";
}
// concatena campos
$nro_form = $zeros . $nro_seqNovo;

//echo "com zeros<BR>".$nro_form;
// concatena o Numero de FS para gravar banco
$nro_formINT = $nro_form . $nroano;
//concatenar para mostrar formulario
$nro_RES = $nro_form . "/" . $nroano;
//echo "Inteiro:<BR>".$nro_formINT;
}

  $sql = "INSERT INTO nro_res_smf (nro_ano, nro_seq, NRORES) VALUES ('$nroano', '$nro_seqNovo', '$nro_formINT')";
      $db->query($sql);
    $id_mat = mysql_insert_id();

// insere na tabela temporária
  $cadastrar = "INSERT INTO res_smf (NroRES, id_seed_smf, id_seed_estrutura, Lote_Postagem, Data_Postagem ,Relatorio1,Relatorio2,Relatorio3,Relatorio4,Relatorio5 ,Relatorio6, Relatorio7, Relatorio8, Relatorio9 , Relatorio10, Relatorio11 , Relatorio12, Relatorio13 , Relatorio14, Relatorio15, QuantObjetos , QuantObjetos2, QuantObjetos3, QuantObjetos4 , QuantObjetos5 , QuantObjetos6 , QuantObjetos7 , QuantObjetos8 , QuantObjetos9, QuantObjetos10 , QuantObjetos11, QuantObjetos12 ,QuantObjetos13, QuantObjetos14 , QuantObjetos15, PesoUnitario, PesoUnitario2, PesoUnitario3, PesoUnitario4 , PesoUnitario5, PesoUnitario6 , PesoUnitario7 , PesoUnitario8, PesoUnitario9 , PesoUnitario10 , PesoUnitario11 , PesoUnitario12, PesoUnitario13 , PesoUnitario14, PesoUnitario15, Peso_Total, Peso_Total2, Peso_Total3, Peso_Total4 , Peso_Total5 , Peso_Total6 , Peso_Total7 , Peso_Total8, Peso_Total9, Peso_Total10, Peso_Total11, Peso_Total12 , Peso_Total13, Peso_Total14 , Peso_Total15 , NomeServico ,Complemento, Competencia,Funcionario) VALUES ('$nro_RES', '', '$_REQUEST[id_estrutura]', '$Lote_Postagem','$Data_Postagem', '$Relatorio1', '$Relatorio2', '$Relatorio3', '$Relatorio4', '$Relatorio5', '$Relatorio6', '$Relatorio7', '$Relatorio8', '$Relatorio9', '$Relatorio10', '$Relatorio11', '$Relatorio12', '$Relatorio13', '$Relatorio14', '$Relatorio15','$QuantObjetos', '$QuantObjetos2', '$QuantObjetos3', '$QuantObjetos4','$QuantObjetos5', '$QuantObjetos6', '$QuantObjetos7', '$QuantObjetos8', '$QuantObjetos9', '$QuantObjetos10', '$QuantObjetos11','$QuantObjetos12', '$QuantObjetos13','$QuantObjetos14', '$QuantObjetos15', '$PesoUnitario', '$PesoUnitario2', '$PesoUnitario3',  '$PesoUnitario4', '$PesoUnitario5', '$PesoUnitario6', '$PesoUnitario7', '$PesoUnitario8',  '$PesoUnitario9', '$PesoUnitario10', '$PesoUnitario11', '$PesoUnitario12','$PesoUnitario13', '$PesoUnitario14', '$PesoUnitario15', '$Peso_Total', '$Peso_Total2', '$Peso_Total3', '$Peso_Total4', '$Peso_Total5', '$Peso_Total6', '$Peso_Total7', '$Peso_Total8', '$Peso_Total9', '$Peso_Total10', '$Peso_Total11', '$Peso_Total12', '$Peso_Total13', '$Peso_Total14', '$Peso_Total15', '$NomeServico', '$Complemento', '$Competencia','$Funcionario')";

  $db->query($cadastrar);
    $id_material = mysql_insert_id();
  
  if (mysql_affected_rows() == 1) {
                    
		header('Location:RES_SMF_sql.php');
	
          //final - busca dados no banco de dados

    }else{

        //tela de erro label em branco
        $_SESSION[MENSAGEM_ERRO] = "Erro ao Atualizar !!!";
        header('Location: erro.php');
    // fim do else
}
}
?>


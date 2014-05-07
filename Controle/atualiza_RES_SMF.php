<?php
include_once("../DAO/res_smfDAO.php");
include_once("../DAO/res_smf_estruturaDAO.php");
include_once("../DAO/nro_res_smfDAO.php");
include_once("../DAO/relatorioestadualDAO.php");
include_once("../DAO/relatorionacionalDAO.php");
include_once("../DAO/relatoriolocalDAO.php");


// Startar uma sessï¿½o
session_start();

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

$lotePostagem = ($_POST['lotePostagem']);
//echo "Lote_Postagem:$lotePostagem<br>";
$dataPostagem = DataBrasilMySQL($_POST['dataPostagem']);
 //echo $dataPostagem;
$id_seed_estrutura = $_GET['id_estrutura'];
//echo "id_estrutura: $id_seed_estrutura<br>";

$FacLocal = $_POST['Fac_Local'];
//echo "FacLocal: $FacLocal<br>";

$relatorio = $_POST['relatorio'];
//echo "relatorio1: $relatorio<br>";

foreach (($_POST['Peso']) as $peso){
     //   echo "teste de post".$peso;
    }
$objLocal = $_POST['objLocal'];
$objEst = $_POST['objEst'];
$objNac = $_POST['objNac'];

//echo "QuantObjetos: $QuantObjetos<br>";
$Peso_TotalLocal = $_POST['Peso_TotalLocal'];
///echo "Peso_Total: $Peso_Total<br>";

$Peso_TotalEst = $_POST['Peso_TotalEst'];

$Peso_TotalNac = $_POST['Peso_TotalNac'];
//echo $Peso_TotalNac;

$FacEstadual = $_POST['Fac_Estadual'];
//echo "FacEstadual: $FacEstadual<br>";

$FacNacional = $_POST['Fac_Nacional'];
//echo "FacNacional: $FacNacional<br>";

$nomeservico = $_POST['NomeServico'];
//echo "NomeServico: $NomeServico<br>";
$competencia = DataBrasilMySQL($_REQUEST['Competencia']);
//echo "Competencia: $Competencia<br>";
$complemento = $_REQUEST['Complemento'];
//echo "Complemento: $Complemento<br>";

$funcionario = $_REQUEST['funcionario'];
//echo "funcionario: $Funcionario<br>";


       //Pesquisa tabela nro_res_smf 
    $nDAO = new nro_res_smfDAO(); //instancia 

    $nrosmf = $nDAO->obterNum();
   //var_dump($nrosmf);

   //Criar numero de fs
$data_inclusao = date("Y-m-d h:i:s");
//echo $data_inclusao;
$nro_ano = date("Y");
//echo $nro_ano;
$nroseq = $nrosmf->getNro_seq();   
$nro_seqNovo = $nroseq + 1;
$str=(strlen($nroseq));
//echo $nro_seqNovo;
   
if (strlen($nro_seqNovo) == "1") {
    $zeros = "000";
} elseif (strlen($nro_seqNovo) == "2") {
    $zeros = "00";
} else {
    $zeros = "0";
}
// concatena campos
$nro_form = $zeros . $nro_seqNovo;
//echo "com zeros<BR>".$nro_form;
// concatena o Numero de FS para gravar banco
$nro_formINT = $nro_form . $nro_ano;
//concatenar para mostrar formulario
$nro_RES = $nro_form . "/" . $nro_ano;
//echo "Inteiro:<BR>".$nro_formINT;
//echo "separado ".$nro_RES;

$nrores = $nro_formINT;

//Salvar em tabela nro_res_smf
           
$nro = new nro_res_smf($nro_ano, $nro_seqNovo, $nrores);

$salvar = $nDAO->salvar($nro);


//Salvar em tabela res_smf
$cDAO = new res_smfDAO(); //instancia 
$lote = new Res_smf($lotePostagem,$dataPostagem,$nomeservico,$competencia,$complemento,$funcionario,'',$id_seed_estrutura,$nrores);
$salva = $cDAO->salvar($lote);
  
//salvar em tabela relatoriolocal
  $localDAO = new relatoriolocalDAO(); //instancia 
    $relacaolocal = new relatoriolocal($objLocal, $Peso_TotalLocal,$relatorio, $nrores);
    $rel = $localDAO->salvar($relacaolocal);
    
    
  //salvar em tabela relatorioestadual     
       
    $estadualDAO = new relatorioestadualDAO(); //instancia 

    $relest = new relatorioestadual($objetoest, $Peso_TotalEst, $relatorio, $nrores);
    $salvar = $estadualDAO->salvar($relest);
    
    //salvar em tabela relatorionacional
    $nacionalDAO = new relatorionacionalDAO(); //instancia 

    $relnac = new relatorionacional($objnac, $Peso_TotalNac, $relatorio, $nrores);
    $salvar = $nacionalDAO->salvar(relnac);
    
     
     
  header("Location:RES_SMF_sql.php?id_estrutura=$endestrutura");

    //final - busca dados no banco de dados

   }else{

        //tela de erro label em branco
        $_SESSION[MENSAGEM_ERRO] = "Erro ao Atualizar !!!";
        header('Location: erro.php');
    // fim do else
}

?>


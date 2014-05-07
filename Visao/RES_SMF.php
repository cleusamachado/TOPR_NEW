<html>
<head>
<?php include_once ("head_SMF.php"); ?>
    
        
<title>RES_SMF</title>

<div id="conteiner" >
    

<h2>RES_SMF_Correios </h2>
<script type="text/javascript" src="../javascript/jquery-1.5.min.js"></script>
<script type="text/javascript" src="../javascript/teste.js"></script>
<script type="text/javascript" src="../javascript/formatar_moeda.js"></script>
</head>
<script language="JavaScript">

function number_format(number, decimals, dec_point, thousands_sep)
{
var n = number, prec = decimals;

var toFixedFix = function(n, prec)
{
var k = Math.pow(10, prec);
return (Math.round(n * k) / k).toString();
};

n = !isFinite(+n) ? 0 : +n;
prec = !isFinite(+prec) ? 0 : Math.abs(prec);
var sep = (typeof thousands_sep === 'undefined') ? '.' : thousands_sep;
var dec = (typeof dec_point === 'undefined') ? '.' : dec_point;

var s = (prec > 0) ? toFixedFix(n, prec) : toFixedFix(Math.round(n), prec); //fix for IE parseFloat(0.55).toFixed(0) = 0;

var abs = toFixedFix(Math.abs(n), prec);
var _, i;

if (abs >= 1000)
{
_ = abs.split(/\D/);
i = _[0].length % 3 || 3;

_[0] = s.slice(0, i + (n < 0)) + _[0].slice(i).replace(/(\d{3})/g, sep + '$1');
s = _.join(dec);
}
else
{
s = s.replace('.', dec);
}

var decPos = s.indexOf(dec);

if (prec >= 1 && decPos !== -1 && (s.length - decPos - 1) < prec)
{
s += new Array(prec - (s.length - decPos - 1)).join(0) + '0';
}
else if (prec >= 1 && decPos === -1)
{
s += dec + new Array(prec).join(0) + '0';
}

return s;
}
</script>
<script language="javascript">
function barra(objeto) {
if (objeto.value.length == 2 || objeto.value.length == 5) {
objeto.value = objeto.value + "/";
}
}
</script>
<script language="JavaScript">
function AnalizaTeclas()
{
var tecla = window.event.keyCode;
if (tecla == 13) {
event.keyCode = 0;
event.returnValue = false;
}
}
</script> 
  
<script type="text/javascript">
ValidarFormulario = function(f) {
var msgErro = "";
var result = true;

if (!f["lotePostagem"].value) msgErro += "lotePostagem; ";
if (!f["dataPostagem"].value) msgErro += "dataPostagem; ";
if (!f["relatorio"].value) msgErro += "relatorio; ";
if (!f["funcionario"].value) 
msgErro += "funcionario; ";


if (msgErro) {
alert("Faltam preencher os seguintes campos: \n\n" + msgErro);
result = false;
}
return result;
}
</script>
<script type="text/javascript">
function frm_number_only_exc() {
// allowed: numeric keys, numeric numpad keys, backspace, del and delete keys
if (event.keyCode == 37 || event.keyCode == 38 || event.keyCode == 39 || event.keyCode == 40 || event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || (event.keyCode < 106 && event.keyCode > 95)) {
return true;
} else {
return false;
}
}

$(document).ready(function() {

$("input.frm_number_only").keydown(function(event) {

if (frm_number_only_exc()) {

} else {
if (event.keyCode < 48 || event.keyCode > 57) {
event.preventDefault();
}
}
});

});
</script>
<script>
function fecha() {
window.opener : window
window.close("#")
}
</script>

<script>
function formReset()
{
document.getElementById("formulario1").reset();
}
</script>


<?php
include_once("../DAO/res_smf_estruturaDAO.php");

$sDAO = new res_smf_estruturaDAO(); //instancia 
//var_dump($sDAO->obterEstrut()); // imprimir um objeto ou um vetor

$estrutura = ($sDAO->obterEstrut());


foreach ($estrutura as $item) { // pegar so a parte do array - getItem retorna o array de pedidos(pedido Ã© um objeto do array pedidos)
//var_dump($estrutura);
?>
<body onKeyDown="AnalizaTeclas();"> 
    
<form  method="POST" id="formulario1" name="formulario1" onsubmit="return ValidarFormulario(this);" action="../Controle/atualiza_RES_SMF.php?id_estrutura=<?php echo $item->getId_seed_estrutura(); ?>" />
<input type="hidden" nome ="id_seed_estrutura" value="<?php echo $item->getId_seed_estrutura(); ?>"/>
<input type="hidden" id="ans" name="dados_enviar" value="" />

<table class="table">

<table WIDTH="700" BORDER="0" align="center" CELLPADDING="0" CELLSPACING="0" BGCOLOR="#F3F021">
<tr>
<div id="texto" >
<td><div align="right">
<font face="Arial" size="2" color="#004080">
<strong>Lote_Postagem:</font></strong>
<td><font FACE="Arial" SIZE="2">
<input type="text" name="lotePostagem" size="15" onkeypress="IsNumTel(this, event);" ></td></td></div>

<td><div align="right">
<font face="Arial" size="2" color="#004080">
<strong>Data_Postagem:</strong></font> </td>
<td><input type="text" size="15" onKeyUp="barra(this)" name="dataPostagem"></font></td></div>
</tr>
</table>
<table WIDTH="700" BORDER="0" align="center" CELLPADDING="0" CELLSPACING="0" BGCOLOR="#BEE4FC">
<tr>
<td><div align="right">
<font face="Arial" size="2" color="#004080">
<strong>NomeContratante:</strong></font> </td>
<td><font FACE="Arial" SIZE="2">
<input type="text" name="NomeContratante" size="85" readonly="readonly" value="<?php echo $item->getNomeContratante() ?>">
</font></td>
</tr>
</table>
<table WIDTH="700" BORDER="0" align="center" CELLPADDING="0" CELLSPACING="0" BGCOLOR="#BEE4FC">
<tr>
<td><div align="right">
<font face="Arial" size="2" color="#004080">
<strong>NumContrato:</strong></font> 
<td><font FACE="Arial" SIZE="2">
<input name="NumContrato" size="15" readonly="readonly" value="<?php echo $item->getNumContrato(); ?>" >
</td></td>

<td><div align="right">
<font face="Arial" size="2" color="#004080">
<strong>CodAdministrativo:</strong></font>
<td><font FACE="Arial" SIZE="2">
<input name="CodAdministrativo" size="15" readonly="readonly" value="<?php echo $item->getCodAdministrativo(); ?>" >
</td></td>
<td><div align="right">
<font face="Arial" size="2" color="#004080">
<strong>NumCartaoPostagem:</strong></font>
<td><font FACE="Arial" SIZE="2">
<input name="NumCartaoPostagem" size="15" readonly="readonly" value="<?php echo $item->getNumCartaoPostagem(); ?>" >
</font></td></td>
</tr>
</table>

<table WIDTH="700" BORDER="1" align="center" CELLPADDING="0" CELLSPACING="0" BGCOLOR="#BEE4FC">

<tr>
<td><div align="right">
<font face="Arial" size="2" color="#004080">
<strong>DrFaturamento:</strong></font></td>
<td><font FACE="Arial" SIZE="2">
<input name="DrFaturamento"  size="10" readonly="readonly" value="<?php echo $item->getDrFaturamento(); ?>" > 
</font></td>

<td> <td><div align="right">
<font face="Arial" size="2" color="#004080">
<strong>Localidade:</strong></font></td>

<td><font FACE="Arial" SIZE="2">
<input name="Localidade" size="10" readonly="readonly" value="<?php echo $item->getLocalidade(); ?>" ></font></td>

<td>
<font face="Arial" size="2" color="#004080">
<strong>UnidadePostagem:</strong></font>
<font FACE="Arial" SIZE="2">
<input name="UnidadePostagem" size="10" readonly="readonly" value="<?php echo $item->getUnidadePostagem(); ?>"></font></td>

<td>
<font face="Arial" size="2" color="#004080">
<strong>Codigo:</strong></font>
<font FACE="Arial" SIZE="2">
<input name="Codigo" readonly="readonly" value="<?php echo $item->getCodigo(); ?>"></font></td></td>

</tr>
</table>
<?php
}
?>
<table WIDTH="700" BORDER="0" align="center" CELLPADDING="3" CELLSPACING="3" BGCOLOR="#004080">
<th>
</table>


<table WIDTH="700" BORDER="0" align="center" CELLPADDING="0" CELLSPACING="0" BGCOLOR="#BEE4FC">
</tr>
<td>
<font face="Arial" size="2" color="#004080">
<div align="left">
<strong>Relatórios:<input type="text" name="relatorio" id="relatorio" size="100" style="text-transform:uppercase;" value=""></div></font></td>
</tr>
<th>
</table>
<table WIDTH="700" BORDER="0" align="center" CELLPADDING="3" CELLSPACING="3" BGCOLOR="#004080">
<th>
</table>
<!--*******************FAC_LOCAL***********************************************-->

<script language="JavaScript">
function somafx1() { // fun?ao para somar os campos fixos.

document.getElementById("Peso_Total").value = '0'
var PesoUnitario = parseFloat(document.getElementById("Peso").value);
var QuantObjetos = parseFloat(document.getElementById("objLocal").value);
document.getElementById("Peso_Total").value = number_format((PesoUnitario * QuantObjetos), 1, '.', '');
//document.getElementById("Peso_Total").value =PesoUnitario * QuantObjetos;

}
</SCRIPT>

<table WIDTH="700" BORDER="0" align="center" CELLPADDING="0" CELLSPACING="0" BGCOLOR="#BEE4FC">
<tr>
<td>
<font face="Arial" size="2" color="#004080">
<strong>Fac_Local</b></font></strong></td>
<td>
<font face="Arial" size="2" color="#004080">
<strong>Peso_Unitário(g)</b></font></strong></td>
<td>
<font face="Arial" size="2" color="#004080">
<strong>Quant_Objetos</b></font></strong></td>
<td>
<font face="Arial" size="2" color="#004080">
<strong>Peso_Total(g)</b></font></strong></td>
<td></td>

</tr>
<center><div class="dados">
<p class="campoDados">
<tr>
<!--<td><a href="#" class="removerCampos"><input type="image" src="lixo.gif" name="excluir" ></a></td>-->
<td>
<input type="text" id="Fac_Local" name="Fac_Local"  value="<?php echo $item->getFac_Local(); ?>" readonly="readonly"></b></td>
<td>
<input type="text" id="Peso" name="Peso[]" value="<?php echo $item->getPeso(); ?>" readonly="readonly" size="10" ></b></td>
<td>
<input type="text" id="objLocal" name="objLocal"  size="14" value="0" onblur="somafx1()" > </b></td>
<td>
<input type="text" id="Peso_Total" name="Peso_TotalLocal" value="" size="10" ></b></td>

</tr>

</table>

<table WIDTH="700" BORDER="0" align="center" CELLPADDING="0" CELLSPACING="0" BGCOLOR="#004080">
<th>
<div id="my_div"></td></tr></div>
</div>
</table>

<!--********************FAC_ESTADUAL********************************************-->
<table WIDTH="700" BORDER="1" align="center" CELLPADDING="0" CELLSPACING="7" BGCOLOR="#BEE4FC">

<tr>
<td>
</td>
</tr>  
</table>
<table WIDTH="700" BORDER="0" align="center" CELLPADDING="0" CELLSPACING="0" BGCOLOR="#BEE4FC">

<script language="JavaScript">
function somafx() {

document.getElementById("Peso_Total2").value = '0'
var PesoUnitario2 = parseFloat(document.getElementById("Peso").value);
var QuantObjetos2 = parseFloat(document.getElementById("objEst").value);
document.getElementById("Peso_Total2").value = number_format((PesoUnitario2 * QuantObjetos2), 1, '.', '');
}
</SCRIPT>
</table>
<table WIDTH="700" BORDER="0" align="center" CELLPADDING="0" CELLSPACING="0" BGCOLOR="#BEE4FC" id="usuario2" >
<tr>
<td>
<font face="Arial" size="2" color="#004080">
<strong>Fac_Estadual</b></font></strong></td>
<td>
<font face="Arial" size="2" color="#004080">
<strong>Peso_Unitário(g)</b></font></strong></td>
<td>
<font face="Arial" size="2" color="#004080">
<strong>Quant_Objetos</b></font></strong></td>
<td>
<font face="Arial" size="2" color="#004080">
<strong>Peso_Total(g)</b></font></strong></td>
<td>
</tr>
<tr>
<center><div class="dados1">
<p class="campoDados1">
<td>
<input type="text" name="Fac_Estadual"  readonly="readonly" value="<?php echo $item->getFac_Estadual();?>"></b></td>
<td>
<input type="text" id="Peso" name="Peso[]" value="<?php echo $item->getPeso(); ?>" readonly="readonly" size="10" ></b></td>
<td>
<input type="text" id="objEst" name="objEst" size="14" value="0" onblur="somafx()" ></b></td>
<td>
<input type="text" id="Peso_Total2" name="Peso_TotalEst"  size="10" value="" ></b></td>

</tr>

</table>
<table WIDTH="700" BORDER="0" align="center" CELLPADDING="0" CELLSPACING="0" BGCOLOR="#004080">
<th>
<div id="my_div1"></td></tr></div>
</div>
</table>
<!--********************FAC_NACIONAL********************************************-->
<table WIDTH="700" BORDER="1" align="center" CELLPADDING="0" CELLSPACING="7" BGCOLOR="#BEE4FC">

<tr>
<td>
</td>
</tr>  
</table>
<table WIDTH="700" BORDER="0" align="center" CELLPADDING="0" CELLSPACING="0" BGCOLOR="#BEE4FC">

<script language="JavaScript">
function somafx3() {

document.getElementById("Peso_Total3").value = '0'
var PesoUnitario3 = parseFloat(document.getElementById("Peso").value);
var QuantObjetos3 = parseFloat(document.getElementById("objNac").value);
document.getElementById("Peso_Total3").value = number_format((PesoUnitario3 * QuantObjetos3), 1, '.', '');

}
</SCRIPT>

<SCRIPT language="javascript">
function getMessage(ans)
{
var ans;
ans = window.confirm("Deseja enviar Email?");
//alert ("testando"+ ans);

var objetoDados = document.getElementById('ans');
//altera o atributo value desta tag
objetoDados.value = ans;

if (ans == true)
{
document.getElementById().value = 'Yes';
}
else
{
document.getElementById().value = 'No';
}
closed();
}
</SCRIPT>

<table  WIDTH="700" BORDER="0" align="center" CELLPADDING="0" CELLSPACING="0" BGCOLOR="#BEE4FC" id="usuario">
<tr >
<td>
<font face="Arial" size="2" color="#004080">
<strong>Fac_Nacional</b></font></strong></td>
<td>
<font face="Arial" size="2" color="#004080">
<strong>Peso_Unitário(g)</b></font></strong></td>
<td>
<font face="Arial" size="2" color="#004080">
<strong>Quant_Objetos</b></font></strong></td>
<td>
<font face="Arial" size="2" color="#004080">
<strong>Peso_Total(g)</b></font></strong></td>
<td></td>
</tr>
<tr>

<!--<td> <a href="#" class="removerCampos2"><input type="image" src="lixo.gif" name="excluir" ></a></td>-->
<td><input type="text" name="Fac_Nacional" size="20" readonly="readonly" value="<?php echo $item->getFac_Nacional() ?>"> </td>
<td>
<input type="text" id="Peso" name="Peso[]" value="<?php echo $item->getPeso(); ?>" readonly="readonly" size="10" ></b></td>
<td>
<input type="text" id="objNac" name="objNac" value="0" size="14" onblur="somafx3()"></b></td>
<td>
<input type="text" id="Peso_Total3" name="Peso_TotalNac" size="10" value="0"></b></td>

</tr>
</table>
<table WIDTH="700" BORDER="0" align="center" CELLPADDING="0" CELLSPACING="0" BGCOLOR="#004080">
<th>
</table>

<table WIDTH="700" BORDER="1" align="center" CELLPADDING="0" CELLSPACING="7" BGCOLOR="#BEE4FC">         
<tr>
<td>
</td>
</tr>  
</table>
<table WIDTH="700" BORDER="0" align="center" CELLPADDING="0" CELLSPACING="0" BGCOLOR="#BEE4FC">
<tr>
<td>
<div align="left">
<font face="Arial" size="2" color="#004080">
<strong>NomeServiço:</strong></font>
<input name="NomeServico" size="35" style="text-transform:uppercase;" value="" ></td>

<td>
<font face="Arial" size="2" color="#004080">
<strong>Competencia:</strong></font>
<input name="Competencia" value="" onKeyUp="barra(this)" ></td>
<td>
<div align="left">
<font face="Arial" size="2" color="#004080">
<strong>Sistema:</strong></font>
<input name="Sistema" size="15" readonly="readonly" value="SIAT"></td>

<td>
<font face="Arial" size="2" color="#004080">
<strong>NomeCliente:</strong></font>
<input name="NomeCliente" value="SMF" readonly="readonly" size="15" ></td>
</tr>
</table>
<table WIDTH="700" BORDER="0" align="center" CELLPADDING="0" CELLSPACING="0" BGCOLOR="#BEE4FC">
<tr>
<td>
<div align="left">
<font face="Arial" size="2" color="#004080">
<strong>Complemento:</strong></font>
<input name="Complemento" size="55" value="" ></td>

<td>
<font face="Arial" size="2" color="#004080">
<strong>Endereço:</strong></font>
<input name="Endereco" value="Av.Sertório,4222-A/C Sr.Julio" readonly="readonly" size="35" ></td>

<td>
<font face="Arial" size="2" color="#004080">
<strong>Funcionario:</strong></font>
<select name="funcionario" id="funcionario" onkeypress="IsNumTel(this, event);"/>
<option value=""></option>
<option value="Alda">Alda</option>
<option value="Claudia">Claudia</option>
<option value="Cleusa">Cleusa</option>
<option value="Lielson">Lielson</option>
<option value="Leno">Leno</option>
<option value="Luiz_Manoel">Luiz Manoel</option>
<option value="Mario_Terroso">Mario Terroso</option>
<option value="Myrta">Myrta</option>
<option value="Romero">Romero</option>
<option value="Tania">Tania</option>
<select /><td>
</tr>
</table>
<table WIDTH="700" BORDER="0" align="center" CELLPADDING="0" CELLSPACING="0" BGCOLOR="#BEE4FC" height="62">

<tr  align="center">

<td><input type="submit"  name="imprimir" id="imprimir" value="Imprimir" onclick="getMessage();" style="background-color: rgb(255,255,255); color: rgb(0,0,128); font-weight: bold;">

</form>			 
<form  method="POST" action="numero_RES.php" name="formul">
<td>
<input type="submit" name="email"  value="Enviar_Email" style="background-color: rgb(255,255,255); color: rgb(0,0,128); font-weight: bold;" ></td>
</form>
<td><input  type="button" onclick="formReset()"  value="LIMPAR" style="background-color: rgb(255,255,255); color: rgb(0,0,128); font-weight: bold;"></td>
<td><input name="button" type="button" onClick="fecha()" value="Fechar Janela" style="background-color: rgb(255,255,255); color: rgb(0,0,128); font-weight: bold;"></td></td>
</tr>
</table>
</div>
</center>
</body>
</html>




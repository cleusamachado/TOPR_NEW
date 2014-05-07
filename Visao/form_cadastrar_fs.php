<?php
include_once '../../BD/Menu/regrasDAO.php';
include_once '../../BD/Menu/mensais_baseDAO.php';
include_once '../../classes/Menu/mensais_base.php';

$rDAO = new regrasDAO();
$regras = $rDAO->obterRegras();

//$_GET['contador'] = 570;
//$sis=NULL;
//$serv =NULL;
$mDAO = new mensais_baseDAO();
if($_GET['contador']!=NULL){
    $mensais = $mDAO->obterMensal($_GET['contador']);
    $diasem = $mensais->getDiasem();
    $sis = $mensais->getSis();
    $serv = $mensais->getServ();
    $complem = $mensais->getComplem();
    $executar = $mensais->getExecutar();
    $periodicidade = $mensais->getPeriodicidade();
    $tarefas = $mensais->getTarefas();
    $qtdcol = $mensais->getQtdecol();
    $descr = $mensais->getDescricao();
    $tipofs = $mensais->getTipofs();
    $regra = $mensais->getRegra();
    $corfs = $mensais->getCorfs();
}
?>
<!DOCTYPE html>
<html>
    <?php include_once 'head.php'; ?>
    <script type="text/javascript">
    var checked = true;
    function change(){
        var elemento = document.getElementsByClassName(checkbox-inline);
        if(checked === true){checked = false;}else{checked=true;}
        elemento.checked = checked;
    }
    function changeCorfs(){
        var elemento = document.getElementById(corfs);
        if(cheked ===true){checked=false;}else{chequed=true;}
        elemento.checked = checked;
    }
    </script>
    <body>
        <!--Cabeçalho-->
        <?php include_once 'cabecalho.php';?>
        <!--Menu-->
        <div class="container">
            <div class="jumbotrom">
                <?php include_once 'cabecalhoMenu.php';?>
                <h2 class="text-center">Cadastrar Fluxo Serviço</h2>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <form class="form-horizontal" role="form" action="<?php if($_GET['contador']==NULL){echo '../../controller/Menu/cadastra_fs.php';}else{echo '../../controller/Menu/atualiza_fs.php?contador='.$_GET['contador'];}?>" method="post">
                                        <div class="form-group">
                                            <label class="col-md-1 control-label" for="sis">Sistema</label>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" name="sis" id="sis" value="<?php echo$sis;?>">
                                            </div>
                                            <label class="col-md-1 control-label" for="serv">Serviço</label>
                                            <div class="col-md-2">
                                                <input type="text" class="form-control" name="serv" id="serv" value="<?php echo$serv;?>">
                                            </div>
                                            <label class="col-md-2 control-label" for="complem">Complemento</label>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" name="complem" id="complem" value="<?php echo$complem;?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-1 control-label">Executar</label>
                                            <div class="col-md-6">
                                                <textarea class="form-control" rows="5" name="executar"><?php echo$executar;?></textarea>
                                            </div>
                                            <label class="col-md-2 control-label">Periodicidade</label>
                                            <div class="col-md-3">
                                                <select class="form-control" name="Periodicidade" id="Periodicidade">
                                                    <option value="<?php echo$periodicidade?>"><?php echo$periodicidade;?></option>
                                                    <option value="Diario">Diario</option>
                                                    <option value="Semanal">Semanal</option>
                                                    <option value="Mensal">Mensal</option>
                                                    <option value="Trimestral">Trimestral</option>
                                                    <option value="Anual">Anual</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-1 control-label">Tarefas</label>
                                            <div class="col-md-6">
                                                <textarea class="form-control" rows="5" name="tarefas"><?php echo$tarefas;?></textarea>
                                            </div>
                                            <label class="col-md-2 control-label">Qnt colunas</label>
                                            <div class="col-md-3">
                                                <select class="form-control" name="QtdeCol" id="QtdeCol">
                                                    <option value="<?php echo$qtdcol;?>"><?php echo$qtdcol;?></option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-1 control-label">Descrição</label>
                                            <div class="col-md-6">
                                                <textarea class="form-control" rows="5" name="descr"><?php echo$descr;?></textarea>
                                            </div>
                                            <label class="col-md-2">Tipo FS</label>
                                            <div class="col-md-3">
                                                <select class="form-control" name="tipofs" id="tipofs">
                                                    <option value="<?php echo$tipofs;?>"><?php echo$tipofs;?></option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-1 control-label">Regras</label>
                                            <div class="col-md-2">
                                                <select name="regras" id="regras" class="form-control">
                                                    <option value="<?php echo$regra;?>"><?php echo$regra;?></option>
                                                <?php
                                                    foreach ($regras as $regrass){
                                                ?>
                                                    <option value="<?php echo $regrass->getTipo();?>"><?php echo $regrass->getTipo();?>-<?php echo $regrass->getDescricao();?></option>
                                                <?php
                                                    }
                                                ?>
                                                </select>
                                            </div>
                                            <div class="col-md-5">
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" id="inlineCheckbox" value="1" <?php if($diasem['seg']==1){echo 'checked="checked"';}?> onclick="change();" name="diasem1">seg
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" id="inlineCheckbox" value="1" <?php if($diasem['ter']==1){echo 'checked="checked"';}?> onclick="change();" name="diasem2">ter
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" id="inlineCheckbox" value="1" <?php if($diasem['qua']==1){echo 'checked="checked"';}?> onclick="change();" name="diasem3">qua
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" id="inlineCheckbox" value="1" <?php if($diasem['qui']==1){echo 'checked="checked"';}?> onclick="change();" name="diasem4">qui
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" id="inlineCheckbox" value="1" <?php if($diasem['sex']==1){echo 'checked="checked"';}?> onclick="change();" name="diasem5">sex
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" id="inlineCheckbox" value="1" <?php if($diasem['sab']==1){echo 'checked="checked"';}?> onclick="change();" name="diasem6">sab
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" id="inlineCheckbox" value="1" <?php if($diasem['dom']==1){echo 'checked="checked"';}?> onclick="change();" name="diasem7">dom
                                                </label>
                                            </div>
                                            <label class="col-md-2">FS Azul</label>
                                            <div class="col-md-1">
                                                <input type="checkbox" value="1"<?php if($corfs==1){echo 'checked="checked"';}?> onclick="changeCorfs();" name="corfs" id="corfs">
                                            </div>
                                        </div>
                                        <?php if($_GET['contador']==NULL){?>
                                        <button type="submit" class="btn btn-default">Cadastrar</button>
                                        <?php }else{?>
                                        <button type="submit" class="btn btn-default">Atualizar</button>
                                        <?php } ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once '../../rodape.php'; ?>
    </body>
</html>
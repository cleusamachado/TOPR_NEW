<?php
include_once '../../BD/Menu/mensais_baseDAO.php';
$mDAO = new mensais_baseDAO();
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include_once 'head.php';?>
    </head>
    <body>
        <!--Cabeçalho-->
        <?php include_once 'cabecalho.php';?>
        <!--Menu-->
        <div class="container">
            <div class="jumbotron">
                <?php include_once 'cabecalhoMenu.php';?>
                <h2 class="text-center">Fluxo Serviço</h2>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="table">
                                        <table class="table table-striped table-bordered text-center">
                                            <tr>
                                                <td>Sistema</td>
                                                <td>Serviços</td>
                                                <td>Complemento</td>
                                                <td>Periodicidade</td>
                                                <td>Editar</td>
                                                <td>Visualizar</td>
                                                <td>Excluir</td>
                                            </tr>
                                            <?php
                                             $mensais = $mDAO->obterMensais();
                                             foreach($mensais as $mensaiss){
                                            ?>
                                            <tr>
                                                <td><?php echo $mensaiss->getSis();?></td>
                                                <td><?php echo $mensaiss->getServ();?></td>
                                                <td><?php echo $mensaiss->getComplem();?></td>
                                                <td><?php echo $mensaiss->getPeriodicidade();?></td>
                                                <td><a href="../../Views/Menu/form_cadastrar_fs.php?contador=<?php echo $mensaiss->getContador();?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
                                                <td><a href="../../controller/Menu/form_sql_visualizar.php?contador=<?php echo $mensaiss->getContador();?>"><span class="glyphicon glyphicon-eye-open"></span></a></td>
                                                <td><a href="../../controller/Menu/exclui_fs.php?exclui=<?php echo $mensaiss->getContador();?>"><span class="glyphicon glyphicon-remove"></span></a></td>
                                            <?php
                                             }
                                            ?>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once '../../rodape.php';?>
    </body>
</html>
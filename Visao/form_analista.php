<?php
include_once '../../BD/Menu/analistaDAO.php';

$aDAO = new analistaDAO();
$analistas = $aDAO->obterAnalista();
?>
<!DOCTYPE html>
<html>
    <?php include_once 'head.php';?>
    <body>
        <?php include_once 'cabecalho.php';?>
        <div class="container">
            <div class="jumbotron">
                <?php include_once 'cabecalhoMenu.php';?>
                <h2 class="text-center">Relação de Analistas</h2>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="table">
                                        <table class="table table-striped table-bordered text-center">
                                            <tr>
                                                <td>Nome analista</td>
                                                <td>Sistema</td>
                                            </tr>
                                            <?php
                                            foreach ($analistas as $anali){
                                            ?>
                                            <tr>
                                                <td><?php echo $anali->getAnalista();?></td>
                                                <td><?php echo $anali->getSis1();?></td>
                                            </tr>
                                            <?php
                                            }
                                            ?>
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


<?php
include_once '../../BD/Menu/regrasDAO.php';

$rDAO = new regrasDAO();
$regras = $rDAO->obterRegras();
?>
<!DOCTYPE html>
<html>
    <?php include_once 'head.php'; ?>
    <body>
        <?php include_once 'cabecalho.php'; ?>
        <div class="container">
            <div class="jumbotron">
                <?php include_once 'cabecalhoMenu.php';?>
                <h2 class="text-center">Regras</h2>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="table">
                                        <table class="table table-striped table-bordered text-center">
                                            <tr>
                                                <td>Tipo</td>
                                                <td>Descrição</td>
                                                <td>Excluir</td>
                                            </tr>
                                            <?php
                                            foreach ($regras as $linha){
                                            ?>
                                            <tr>
                                                <td><?php echo $linha->getTipo();?></td>
                                                <td><?php echo $linha->getDescricao();?></td>
                                                <td><a href="#"><span class="glyphicon glyphicon-remove"></span></a></td>
                                            </tr>
                                            <?php
                                            }
                                            ?>
                                        </table>
                                        <a href="form_cadastrar_regras.php"><button class="btn btn-default">Cadastrar</button></a>
                                    </div>
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
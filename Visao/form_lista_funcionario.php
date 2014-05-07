<?php
include_once '../../BD/Menu/funcionarioDAO.php';

$fDAO = new funcionarioDAO();
$func = $fDAO->obterFuncionarios();
?>
<!DOCTYPE html>
<html>
    <?php include_once 'head.php';?>
    <body>
        <?php include_once 'cabecalho.php';?>
        <div class="container">
            <div class="jumbotron">
                <?php include_once 'cabecalhoMenu.php';?>
                <h2 class="text-center">Relação de Funcionários</h2>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="table">
                                        <table class="table table-striped table-bordered text-center">
                                            <tr>
                                                <td>Nome</td>
                                                <td>Username</td>
                                                <td>Excluir</td>
                                            </tr>
                                            <?php
                                            foreach ($func as $fun){
                                            ?>
                                            <tr>
                                                <td><?php echo $fun->getNome();?></td>
                                                <td><?php echo $fun->getUsername();?></td>
                                                <td><a href="../../controller/Menu/exclui_funcionario.php?username=<?php echo $fun->getUsername();?>"><span class="glyphicon glyphicon-remove"></span></a></td>
                                            </tr>
                                            <?php
                                            }
                                            ?>
                                        </table>
                                         <a href="../../Views/Menu/form_cadastrar_funcionario.php"><button class="btn btn-default">Cadastrar</button></a>
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

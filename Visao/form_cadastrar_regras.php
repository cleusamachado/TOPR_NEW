<!DOCTYPE html>
<html>
    <?php include_once 'head.php'; ?>
    <body>
        <!--Cabeçalho-->
        <?php include_once 'cabecalho.php';?>
        <!--Menu-->
        <div class="container">
            <div class="jumbotron">
                <?php include_once 'cabecalhoMenu.php';?>
                <h2 class="text-center">Cadastro de Regras</h2>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <form class="form-horizontal" role="form" action="../../controller/Menu/gravar_regras.php" method="post">
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="tipo">Tipo</label>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" name="tipo" id="tipo">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="descricao">Descrição</label>
                                            <div class="col-md-4">
                                                <textarea class="form-control" rows="4" name="descricao" id="descricao"></textarea>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-default">Cadastrar</button>
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


<!DOCTYPE html>
<html>
    <?php include_once 'head.php';?>
    <body>
        <?php include_once 'cabecalho.php';?>
        <div class="container">
            <div class="jumbotron">
                <?php include_once 'cabecalhoMenu.php';?>
                <h2 class="text-center">Cadastrar Funcionário</h2>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <form class="form-horizontal" role="form" action="../Controle/cadastra_funcionario.php" method="post">
                                        <div class="form-group">
                                            <label class="col-md-5 control-label" for="nome">Nome</label>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" name="nome" id="nome">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-5 control-label" for="username">Username</label>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" name="username" id="username">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-5 control-label" for="tipo">Tipo</label>
                                            <div class="col-md-3">
                                                <select class="form-control" name="tipo" id="tipo">
                                                    <option value=""></option>
                                                    <option value="3">Administrador</option>
                                                    <option value="1">Usuário 1 </option>
                                                    <option value="2">Usuario 2</option>
                                                </select>
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
        <?php include_once '../rodape.php';?>
    </body>
</html>

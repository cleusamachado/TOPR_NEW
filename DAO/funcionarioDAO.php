<?php
include_once "../Modelo/conexaoBD.php";
include_once "../Modelo/funcionario.php";

class funcionarioDAO {

    private $con;

    public function __construct() {
        $this->con = ConexaoBD::obterConexao();
    }

    public function obterFuncionarioPeloLogin($username) {
        $funcionario = null;
        $comando = "SELECT nome,tipo,permissao
                    FROM relacao_funcionarios
					WHERE username = '$username'";
        foreach ($this->con->query($comando) as $linha) {
            $funcionario = new Funcionario($linha['nome'], $username, $linha['permissao'], $linha['tipo']);
        }
        return $funcionario;
    }

    public function obterFuncionarios() {
        $funcionario = array();
        $comando = "SELECT nome,tipo,permissao,username
                    FROM relacao_funcionarios
                    ORDER BY nome";
        foreach ($this->con->query($comando) as $linha) {
            $funcionario = new Funcionario($linha['nome'], $linha['username'], $linha['permissao'], $linha['tipo']);
            $funcionarios[] = $funcionario;
        }
        return $funcionarios;
    }

    public function salvar($funcionario) {
        $nome = $funcionario->getNome();
        $username = $funcionario->getUsername();
        $permissao = $funcionario->getPermissao();
        $tipo = $funcionario->getTipo();

        $comando = "INSERT INTO relacao_funcionarios (nome,username,permissao,tipo)
                    VALUES ('$nome','$username','$permissao','$tipo')";
        $this->con->exec($comando);
    }

    public function excluir($username) {
        $comando = "DELETE from relacao_funcionarios
                    WHERE username = '$username'";
        $this->con->exec($comando);
    }

    public function validar($nome, $username) { //verifica se tem login e senha no banco
        $comando = "SELECT username
                    FROM relacao_funcionarios
                    WHERE username ='$username' AND nome='$nome'";
        if (count($this->con->query($comando)->fetchAll())== 0 ) {
            return false;
        }
        return true;
    }

    public function obterTipo($username) {
        $funcionario = null;
        $comando = "SELECT nome,tipo,permissao
                    FROM relacao_funcionarios
                    WHERE username = '$username'";
        foreach ($this->con->query($comando) as $linha) {
            $funcionario = new Funcionario($linha['nome'], $linha['username'], $linha['permissao'], $linha['tipo']);
        }
        return $funcionario->getTipo();
    }

}

?>

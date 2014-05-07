<?php
include_once "conexaoBD.php";
include_once "funcionario.php";

class funcionarioDAO {
    private $con;
    public function __construct() {
        $this->con = ConexaoBD::obterConexao();
    }

	public function obterFuncionarioPeloLogin($login) {
        $funcionario = null;
        $comando = "SELECT id_funcionario,nome,senha
                    FROM funcionario
					WHERE login = '$login'";
        foreach ($this->con->query($comando) as $linha) {
            $funcionario = new Funcionario($linha['nome'],$login,$linha['senha']);
            $funcionario->setId_Funcionario($linha['id_funcionario']);
        }
        return $funcionario;
    }

    public function obterFuncionarios() {
        $funcionarios = array();
        $comando = "SELECT id_funcionario,nome,login,senha
                    FROM funcionario";
        foreach ($this->con->query($comando) as $linha) {
            $funcionario = new Funcionario($linha['nome'],$linha['login'],$linha['senha']);
            $funcionario->setId_Funcionario($linha['id_funcionario']);
            $funcionarios[] = $funcionario;
        }
        return $funcionarios;
    }
	
    public function salvar($funcionario) {
        $id_funcionario = $funcionario->getId_Funcionario();
        $nome = $funcionario->getNome();
        $login = $funcionario->getLogin();       
        $senha = $funcionario->getSenha();
        $tipo = $funcionario->getTipo();
       
        if ($id_funcionario == null) {
            $comando = "INSERT INTO funcionario (nome,login,senha,tipo)
                        VALUES ('$nome','$login','$senha','$tipo')";
        } else {
            $comando = "UPDATE funcionario
                        SET nome = '$nome', login = '$login', senha = '$senha', tipo = '$tipo'
                        WHERE id_funcionario = $id_funcionario";
        }
        $this->con->exec($comando);
    }

	public function excluir($id) {
        $comando = "DELETE from funcionario
                    WHERE id_funcionario = $id";
        $this->con->exec($comando);
    }
	
	public function validar($login, $senha){ //verifica se tem login e senha no banco
		$comando = "SELECT id_funcionario
					FROM funcionario
					WHERE login ='$login' AND senha='$senha'";
		foreach ($this->con->query($comando) as $linha){
			return true;		
		}
		return false;
	}
    public function obterTipo($login){
		$funcionario = null;
        $comando = "SELECT id_funcionario,nome,login,senha,tipo
                    FROM funcionario
                    WHERE login = '$login'";
        foreach ($this->con->query($comando) as $linha) {
            $funcionario = new Funcionario($linha['nome'],$login,$linha['senha'],$linha['tipo']);
            $funcionario->setId_Funcionario($linha['id_funcionario']);
        }
        return $funcionario->getTipo();

	}

}

?>

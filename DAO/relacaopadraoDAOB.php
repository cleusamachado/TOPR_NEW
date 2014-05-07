<?php
include_once "../../BD/conexaoBD.php";
include_once "../../classes/Menu/relacaopadrao.php";

class relacaopadraoDAO {
     private $con;
    public function __construct() {
        $this->con = ConexaoBD::obterConexao();
    }
     public function obterRelacao() {
        $relacao = array();
        $comando = "SELECT sis,serv,descserv,cod1usu,usuario,tp,periodexec
                    FROM relacaopadrao ORDER BY sis";
        foreach ($this->con->query($comando) as $linha) {
            $relacao = new relacaopadrao($linha['sis'],$linha['serv'],$linha['descserv'],$linha['cod1usu'],$linha['usuario'],$linha['tp'],$linha['periodexec']);
            $relacoes[] = $relacao;
        }
        return $relacoes;
    }
    public function obterRelacaoPelo($servico) {
        $comando = "SELECT sis,serv,descserv,cod1usu,usuario,tp,periodexec
                    FROM relacaopadrao
                    WHERE serv = $servico";
        foreach ($this->con->query($comando) as $linha){
            $relacao = new relacaopadrao($linha['sis'],$linha['serv'],$linha['descserv'],$linha['cod1usu'],$linha['usuario'],$linha['tp'],$linha['periodexec']);
        }
        return $relacao;
    }
}
?>

<?php
include_once "conexaoBD.php";
include_once "relacaopadrao.php";

class relacaopadraoDAO {
     private $con;
    public function __construct() {
        $this->con = ConexaoBD::obterConexao();
    }
     public function obterRelacao() {
        $relacoes = array();
        $comando = "SELECT sis,serv,cod1usu,usuario,periodexec
		FROM relacaopadrao ORDER BY sis";
        foreach ($this->con->query($comando) as $linha) {
            $relacao = new Relacaopadrao($linha['sis'],$linha['serv'],$linha['descserv'],$linha['cod1usu'],$linha['usuario'],$linha['tp'],$linha['periodexec']);
            $relacao->setServ($linha["serv"]);
            $relacoes[] = $relacao;
        }
        return $relacoes;
    }
}

?>

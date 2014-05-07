<?php
include_once "conexaoBD.php";
include_once "analista.php";

class analistaDAO {
    private $con;
    public function __construct() {
        $this->con = ConexaoBD::obterConexao();
    }
    public function obterAnalista() {
        $analistas = array();
        $comando = "SELECT analista,sis1
                    FROM analista ORDER BY sis1";
        foreach ($this->con->query($comando) as $linha) {
            $analista = new Analista($linha['analista'],$linha['sis1'],$linha['opcao'],$linha['username'],$linha['titular']);
            $analista->setAnalista($linha['analista']);
            $analistas[] = $analista;
        }
        return $analistas;
    }
	   
}

?>

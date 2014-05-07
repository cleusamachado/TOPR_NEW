<?php
include_once "../../BD/conexaoBD.php";
include_once "../../classes/Menu/analista.php";

class analistaDAO {
    private $con;
    public function __construct() {
        $this->con = ConexaoBD::obterConexao();
    }
    public function obterAnalista() {
        $analista = array();
        $comando = "SELECT analista,sis1,opcao,username,titular
                    FROM analista ORDER BY sis1";
        foreach ($this->con->query($comando) as $linha) {
            $analista = new Analista($linha['analista'],$linha['sis1'],$linha['opcao'],$linha['username'],$linha['titular']);
            $analistas[] = $analista;
        }
        return $analistas;
    }
    
    public function obterAnalistaPelo($sistema){
        $comando = "SELECT analista FROM analista WHERE sis1 = '$sistema' AND titular = 1";
        foreach($this->con->query($comando) as $linha){
            $analista = $linha['analista'];
        }
        return $analista;
        
        
        
    }
}
?>

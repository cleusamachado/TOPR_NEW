<?php
include_once '../../BD/ConexaoBD.php';
include_once '../../classes/Menu/tab_mescptmensais.php';

class tab_mescptmensaisDAO {
    private $con;
    
    public function __construct() {
        $this->con = ConexaoBD::obterConexao();
    }
    
    public function obterMesCptMensais() {
        $memsal = array();
        $comando = "SELECT nmes,cpt1,cpt2,chprev,sdprev,flgpce FROM tab_mescptmensais";
        foreach ($this->con->query($comando) as $linha){
            $mensal = new tab_mescptmensais($linha['nmes'],$linha['cpt1'],$linha['cpt2'],$linha['chprev'],$linha['sdprev'],$linha['flgpce']);
            $mensais[] = $mensal;
        }
        return $mensais;
    }
    
    public function obterMesCptMensaisPor($mes) {
        $memsal = array();
        $comando = "SELECT nmes,cpt1,cpt2,chprev,sdprev,flgpce FROM tab_mescptmensais WHERE nmes = $mes";
        foreach ($this->con->query($comando) as $linha){
            $mensal = new tab_mescptmensais($linha['nmes'],$linha['cpt1'],$linha['cpt2'],$linha['chprev'],$linha['sdprev'],$linha['flgpce']);
        }
        return $mensal;
    }
}

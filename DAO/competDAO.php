<?php
include_once "conexaoBD.php";
include_once "compet.php";

class competDAO {
     private $con;
    public function __construct() {
        $this->con = ConexaoBD::obterConexao();
    }
    public function obterCompetencia() {
        $competencia = array();
        $comando = "SELECT codser, subcodser
                    FROM compet ORDER BY codser";
        foreach ($this->con->query($comando) as $linha) {
            $competencia = new Compet($linha['codser'],$linha['subcodser'],$linha['percomini'],$linha['codfasser'],$linha['percomfim'],$linha['datausu'],$linha['datapro'],$linha['mesfs']);
            $competencia->setCodser($linha['codser']);
            $competencias[] = $competencia;
        }
        return $competencias;
    }
	   

}
?>

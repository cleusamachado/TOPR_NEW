<?php
include_once "../../BD/conexaoBD.php";
include_once "../../classes/Menu/compet.php";

class competDAO {
    private $con;
    public function __construct() {
        $this->con = ConexaoBD::obterConexao();
    }
    
    public function obter($param) {
        
    }
}


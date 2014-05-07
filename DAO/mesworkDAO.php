<?php
include_once '../../BD/ConexaoBD.php';
include_once '../../classes/Menu/meswork.php';
class mesworkDAO {
    private $con;
    
    public function __construct() {
        $this->con = ConexaoBD::obterConexao();
    }
    
    public function obterMes() {
        $comando = "SELECT mes,controle FROM meswork";
        foreach ($this->con->query($comando) as $value) {
            $mes = new meswork($value['mes']);
        }
        return $mes;
    }
}

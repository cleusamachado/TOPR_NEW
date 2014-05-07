<?php

include_once "../Modelo/conexaoBD.php";
include_once "../Modelo/relatoriolocal.php";

class relatoriolocalDAO {
    
     private $con;
    public function __construct() {
        $this->con = ConexaoBD::obterConexao();
    }
     public function obterRelLocal() {
        $rel = array();
        $comando = "SELECT id_relLocal,objLocal,$Peso_TotalLocal,$relatorio,$nrores
		FROM relatoriolocal";
        foreach ($this->con->query($comando) as $linha) {
            $rel = new Relatoriolocal($linha['id_relLocal'],$linha['objLocal'],$linha['Peso_TotalLocal'],$linha['relatorio'],$linha['nrores']);
            $rel->setId_relLocal($linha["id_relLocal"]);
            $relacoes[] = $rel;
        }
        return $relacoes;
    }
       public function salvar($rel) {
        $id_relLocal = $rel->getId_relLocal();
        $objLocal = $rel->getObjLocal();
        $Peso_TotalLocal = $rel->getPeso_TotalLocal();
        $relatorio = $rel->getRelatorio();
        if ($id_relLocal == Null) {
        $comando = "INSERT INTO relatoriolocal(objLocal,Peso_TotalLocal, relatorio,nrores)
                        VALUES ('$objlocal','$Peso_TotalLocal','$relatorio','$nrores')";
        } else {
        $comando = "UPDATE relatorioestadual
                        SET  objLocal = '$objLocal', Peso_TotalLocal = '$Peso_TotalLocal',relatorio = '$relatorio', NroRES ='$nrores'
                        WHERE id_relLocal = $id_relLocal";
        }
        $this->con->exec($comando);
    }
}
?>

<?php
include_once "../Modelo/conexaoBD.php";
include_once "../Modelo/relatorioestadual.php";
class relatorioestadualDAO {
    
     private $con;
    public function __construct() {
        $this->con = ConexaoBD::obterConexao();
    }
     public function obterRelEst() {
        $rel = array();
        $comando = "SELECT id_relEst,objEst,id_seed_smf
		FROM relatorioestadual";
        foreach ($this->con->query($comando) as $linha) {
            $rel = new Relatorioestadual($linha['id_relEst'],$linha['objEst'],$linha['id_seed_smf']);
            $rel->setId_relEst($linha["id_relEst"]);
            $relacoes[] = $rel;
        }
        return $relacoes;
    }
       public function salvar($rel) {
        $id_relEst = $rel->getId_relEst();
        $objEst = $rel->getObjEst();
        $id_seed_smf = $rel->getId_seed_smf();
        if ($id_relEst !== Null) {
        $comando = "INSERT INTO relatorioestadual(id_relEst,objEst,id_seed_smf)
                        VALUES ('','$objEst','$id_seed_smf')";
        } else {
        $comando = "UPDATE relatorioestadual
                        SET id_relEst = '', objEst = '$objEst', id_seed_smf = '$id_seed_smf'
                        WHERE id_relEst = $id_relEst";
        }
        $this->con->exec($comando);
    }
}
?>

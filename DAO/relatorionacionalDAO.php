<?php
include_once "../Modelo/conexaoBD.php";
include_once "../Modelo/relatorionacional.php";

class relatorionacionalDAO {
       
     private $con;
    public function __construct() {
        $this->con = ConexaoBD::obterConexao();
    }
     public function obterRelNac() {
        $rel = array();
        $comando = "SELECT id_relNac,objNac,id_seed_smf
		FROM relatorionacional";
        foreach ($this->con->query($comando) as $linha) {
            $rel = new Relatorionacional($linha['id_relNac'],$linha['objNac'],$linha['id_seed_smf']);
            $rel->setId_relNac($linha["id_relNac"]);
            $relacoes[] = $rel;
        }
        return $relacoes;
    }
       public function salvar($rel) {
        $id_relNac = $rel->getId_relNac();
        $objNac = $rel->getObjNac();
        $id_seed_smf = $rel->getId_seed_smf();
        if ($id_relNac !== Null) {
        $comando = "INSERT INTO relatorionacional(id_relNac,objNac,id_seed_smf)
                        VALUES ('','$objNac','$id_seed_smf')";
        } else {
        $comando = "UPDATE relatorionacional
                        SET id_relNac = '', objNac = '$objNac', id_seed_smf = '$id_seed_smf'
                        WHERE id_relNac = $id_relNac";
        }
        $this->con->exec($comando);
    }
}
?>

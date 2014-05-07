<?php
include_once "../Modelo/conexaoBD.php";
include_once "../Modelo/nro_res_smf.php";

class nro_res_smfDAO {
    
    private $con;

    public function __construct() {
        $this->con = ConexaoBD::obterConexao();
    }
		
    public function obterNum() {         
        $comando = "SELECT * FROM nro_res_smf
                    ORDER BY nro_seq DESC";
                    
            $linha = $this->con->query($comando)->fetchAll();
            $nrosmf = new Nro_res_smf($linha[0][0],$linha[0][1],$linha[0][2]);
          
        //var_dump($nrosmf);
        return $nrosmf;
    }

       
	 public function salvar($obj) {	
             //var_dump($obj);
                $nro_ano = $obj->getNro_ano();
                $nro_seq = $obj->getNro_seq();
		$nrores = $obj->getNrores();
                    $comando = "INSERT INTO nro_res_smf (nro_ano,nro_seq, NRORES)
                        VALUES ('$nro_ano',$nro_seq,'$nrores')";
               $this->con->exec($comando);
    }   

}

?>
    
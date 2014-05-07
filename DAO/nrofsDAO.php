<?php
include_once "../Modelo/conexaoBD.php";
include_once "../Modelo/nrofs.php";


class nrofsDAO {
   
    private $con;

    public function __construct() {
        $this->con = ConexaoBD::obterConexao();
    }
		
    public function obterFS() { 
        
        $comando = "SELECT nromes,nroseq,nrofs,nromensal
                    FROM nrofs";
                    
        foreach ($this->con->query($comando) as $linha) {
            $nrofs = new nrofs($linha['nromes'],$linha['nroseq'],$linha['nrofs'],$linha['nromensal']);
            $nrofs->setNroseq($linha['nroseq']);
        }
        return $nrofs;
    }

       
	 public function salvar($nrofs) {
		$nroseq = $nrofs->getNroseq();
	    $nromes = $nrofs->getNromes();
		$nrofs = $nrofs->getNrofs();
		$nromensal = $nrofs->getNromensal();
	     		$comando = "INSERT INTO nrofs (nromes,nroseq,nrofs,nromensal)
                        VALUES ('$nromes','$nroseq','$nrofs','$nromensal')";
               $this->con->exec($comando);
    }   

}

?>

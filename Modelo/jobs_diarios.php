<?php

class jobs_diarios {
    private $nome_job;
    private $contador;
    
     public function __construct($nome_job, $contador){
         $this->nome_job = $nome_job;
         $this->contador = $contador;
     }
     
public function getNome_job() {
return $this->nome_job;
}

public function setNome_job($nome_job) {
$this->nome_job = $nome_job;
}

public function getContador() {
return $this->contador;
}

public function setContador($contador) {
$this->contador = $contador;
}

}

?>

<?php

class tab_mensais_ldetalhe {
    private $contador;
    private $njob;
    private $nmes;
    private $id;
    
    public function __construct($contador, $njob, $nmes, $id){
        $this->contador = $contador;
        $this->njob = $njob;
        $this->nmes = $nmes;
        $this->id = $id;
    }
    public function getContador() {
        return $this->contador;
    }

    public function setContador($contador) {
        $this->contador = $contador;
    }

    public function getNjob() {
        return $this->njob;
    }

    public function setNjob($njob) {
        $this->njob = $njob;
    }

    public function getNmes() {
        return $this->nmes;
    }

    public function setNmes($nmes) {
        $this->nmes = $nmes;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }
}

?>

<?php

class jobs_cabecalho {
    private $sis;
    private $periodicidade;
    private $data_inclusao;
    
    
    public function __construct($sis,$periodicidade, $data_inclusao){
        $this->sis = $sis;
        $this->periodicidade = $periodicidade;
        $this->data_inclusao = $data_inclusao;
    }
    public function getSis() {
        return $this->sis;
    }

    public function getPeriodicidade() {
        return $this->periodicidade;
    }

    public function getData_inclusao() {
        return $this->data_inclusao;
    }

    public function setSis($sis) {
        $this->sis = $sis;
    }

    public function setPeriodicidade($periodicidade) {
        $this->periodicidade = $periodicidade;
    }

    public function setData_inclusao($data_inclusao) {
        $this->data_inclusao = $data_inclusao;
    }
    
}

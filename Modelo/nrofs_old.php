<?php


class nrofs {
    private $nromes;
    private $nroseq;
    private $nrofs;
    private $nromensal;
    
    public function __construct($nromes, $nroseq, $nrofs, $nromensal){
        $this->nromes = $nromes;
        $this->nroseq = $nroseq;
        $this->nrofs = $nrofs;
        $this->nromensal = $nromensal;
    }
    public function getNromes() {
        return $this->nromes;
    }

    public function setNromes($nromes) {
        $this->nromes = $nromes;
    }

    public function getNroseq() {
        return $this->nroseq;
    }

    public function setNroseq($nroseq) {
        $this->nroseq = $nroseq;
    }

    public function getNrofs() {
        return $this->nrofs;
    }

    public function setNrofs($nrofs) {
        $this->nrofs = $nrofs;
    }

    public function getNromensal() {
        return $this->nromensal;
    }

    public function setNromensal($nromensal) {
        $this->nromensal = $nromensal;
    }
}

?>

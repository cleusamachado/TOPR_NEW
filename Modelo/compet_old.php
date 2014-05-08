<?php

class compet {
   private $codser;
   private $subcodser;
   private $percomini;
   private $codfasser;
   private $percomfim;
   private $datusu;
   private $datpro;
   private $mesfs;
   
    public function __construct($codser, $subcodser, $percomini, $codfasser, $percomfim, $datausu, $datpro, $mesfs){
        $this->codser = $codser;
        $this->subcodser = $subcodser;
        $this->percomini = $percomini;
        $this->codfasser = $codfasser;
        $this->percomfim = $percomfim;
        $this->datusu = $datausu;
        $this->datpro = $datpro;
        $this->mesfs = $mesfs;
                
    }
    public function getCodser() {
        return $this->codser;
    }

    public function setCodser($codser) {
        $this->codser = $codser;
    }

    public function getSubcodser() {
        return $this->subcodser;
    }

    public function setSubcodser($subcodser) {
        $this->subcodser = $subcodser;
    }

    public function getPercomini() {
        return $this->percomini;
    }

    public function setPercomini($percomini) {
        $this->percomini = $percomini;
    }

    public function getCodfasser() {
        return $this->codfasser;
    }

    public function setCodfasser($codfasser) {
        $this->codfasser = $codfasser;
    }

    public function getPercomfim() {
        return $this->percomfim;
    }

    public function setPercomfim($percomfim) {
        $this->percomfim = $percomfim;
    }

    public function getDatusu() {
        return $this->datusu;
    }

    public function setDatusu($datusu) {
        $this->datusu = $datusu;
    }

    public function getDatpro() {
        return $this->datpro;
    }

    public function setDatpro($datpro) {
        $this->datpro = $datpro;
    }

    public function getMesfs() {
        return $this->mesfs;
    }

    public function setMesfs($mesfs) {
        $this->mesfs = $mesfs;
    }
}
?>

<?php

class meswork {
    private $nmes;
    private $controle;
    
    public function __construct($nmes) {
        $this->nmes = $nmes;
        $this->controle = 0;
    }
    public function getNmes() {
        return $this->nmes;
    }

    public function getControle() {
        return $this->controle;
    }

    public function setNmes($nmes) {
        $this->nmes = $nmes;
    }

    public function setControle($controle) {
        $this->controle = $controle;
    }


}

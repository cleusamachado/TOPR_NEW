<?php

 class tab_mensais_etiqueta { 
 
 //** * @var int */ 
 private $contador; /** * @var string */ 
 private $label; /** * @var string */ 
 private $tipo_fita; /** * @var string */ 
 private $volume; /** * @var string */ 
 private $compet; /** * @var string */ 
 private $label_afm; /** * @var int */ 
 private $CRDATE; /** * @var int */ 
 private $compet_afm; 
 
 function __construct(){
      }
      public function getContador() {
          return $this->contador;
      }

      public function getLabel() {
          return $this->label;
      }

      public function getTipo_fita() {
          return $this->tipo_fita;
      }

      public function getVolume() {
          return $this->volume;
      }

      public function getCompet() {
          return $this->compet;
      }

      public function getLabel_afm() {
          return $this->label_afm;
      }

      public function getCRDATE() {
          return $this->CRDATE;
      }

      public function getCompet_afm() {
          return $this->compet_afm;
      }

      public function setContador($contador) {
          $this->contador = $contador;
      }

      public function setLabel($label) {
          $this->label = $label;
      }

      public function setTipo_fita($tipo_fita) {
          $this->tipo_fita = $tipo_fita;
      }

      public function setVolume($volume) {
          $this->volume = $volume;
      }

      public function setCompet($compet) {
          $this->compet = $compet;
      }

      public function setLabel_afm($label_afm) {
          $this->label_afm = $label_afm;
      }

      public function setCRDATE($CRDATE) {
          $this->CRDATE = $CRDATE;
      }

      public function setCompet_afm($compet_afm) {
          $this->compet_afm = $compet_afm;
      }


}  
?>
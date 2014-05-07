<?php
 
class controledeatualizacaomensal {
 public $mes; 
 private $controle; 
 
 function __construct(){
      }
      public function getMes() {
          return $this->mes;
      }

      public function getControle() {
          return $this->controle;
      }

      public function setMes($mes) {
          $this->mes = $mes;
      }

      public function setControle($controle) {
          $this->controle = $controle;
      }


}
?>
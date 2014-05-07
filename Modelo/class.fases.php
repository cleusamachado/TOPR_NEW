<?php
 class fases {  
 
 private $CODFAS; 
 private $DESFAS; 
 
 function __construct(){
      }
      public function getCODFAS() {
          return $this->CODFAS;
      }

      public function getDESFAS() {
          return $this->DESFAS;
      }

      public function setCODFAS($CODFAS) {
          $this->CODFAS = $CODFAS;
      }

      public function setDESFAS($DESFAS) {
          $this->DESFAS = $DESFAS;
      }


 }
 ?>
		  
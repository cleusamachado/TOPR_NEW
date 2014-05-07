<?php
 class tabela_feriados {
 	 /** * @var int */ 
 	 private $cpt; 
 	 
         function __construct(){
      }
      public function getCpt() {
          return $this->cpt;
      }

      public function setCpt($cpt) {
          $this->cpt = $cpt;
      }
 }
?>
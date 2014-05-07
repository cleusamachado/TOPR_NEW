<?php
 class tab_mescptmensais {
 	 /** * @var int */ 
 	 private $nmes; /** * @var int */ 
 	 private $cpt1; /** * @var int */ 
 	 private $cpt2; /** * @var int */ 
 	 private $chprev; /** * @var int */ 
 	 private $sdprev; /** * @var int */ 
 	 private $flgpce; 
 	 
         
         function __construct(){
      }
 	 
      public function getNmes() {
          return $this->nmes;
      }

      public function getCpt1() {
          return $this->cpt1;
      }

      public function getCpt2() {
          return $this->cpt2;
      }

      public function getChprev() {
          return $this->chprev;
      }

      public function getSdprev() {
          return $this->sdprev;
      }

      public function getFlgpce() {
          return $this->flgpce;
      }

      public function setNmes($nmes) {
          $this->nmes = $nmes;
      }

      public function setCpt1($cpt1) {
          $this->cpt1 = $cpt1;
      }

      public function setCpt2($cpt2) {
          $this->cpt2 = $cpt2;
      }

      public function setChprev($chprev) {
          $this->chprev = $chprev;
      }

      public function setSdprev($sdprev) {
          $this->sdprev = $sdprev;
      }

      public function setFlgpce($flgpce) {
          $this->flgpce = $flgpce;
      }

	
} 
?>
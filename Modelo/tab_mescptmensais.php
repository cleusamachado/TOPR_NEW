<?php

class tab_mescptmensais {
   private $nmes;
   private $cpt1;
   private $cpt2;
   private $chprev;
   private $sdprev;
   private $flgpce;
   
   public function __construct($nmes, $cpt1, $cpt2, $chprev, $sdprev, $flgpce){
       $this->nmes = $nmes;
       $this->cpt1 = $cpt1;
       $this->cpt2 = $cpt2;
       $this->chprev = $chprev;
       $this->sdprev = $sdprev;
       $this->flgpce = $flgpce;
   }
   public function getNmes() {
       return $this->nmes;
   }

   public function setNmes($nmes) {
       $this->nmes = $nmes;
   }

   public function getCpt1() {
       return $this->cpt1;
   }

   public function setCpt1($cpt1) {
       $this->cpt1 = $cpt1;
   }

   public function getCpt2() {
       return $this->cpt2;
   }

   public function setCpt2($cpt2) {
       $this->cpt2 = $cpt2;
   }

   public function getChprev() {
       return $this->chprev;
   }

   public function setChprev($chprev) {
       $this->chprev = $chprev;
   }

   public function getSdprev() {
       return $this->sdprev;
   }

   public function setSdprev($sdprev) {
       $this->sdprev = $sdprev;
   }

   public function getFlgpce() {
       return $this->flgpce;
   }

   public function setFlgpce($flgpce) {
       $this->flgpce = $flgpce;
   }
         
}

?>

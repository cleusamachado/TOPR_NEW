<?php
 class nomefase { 
  
  //** * @var int */ 
  private $fase1; /** * @var string */ 
  private $nomefase; 
  
  function __construct(){
      }
      public function getFase1() {
          return $this->fase1;
      }

      public function getNomefase() {
          return $this->nomefase;
      }

      public function setFase1($fase1) {
          $this->fase1 = $fase1;
      }

      public function setNomefase($nomefase) {
          $this->nomefase = $nomefase;
      }

   }
   ?>
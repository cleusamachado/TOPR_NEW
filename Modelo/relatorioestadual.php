<?php

class relatorioestadual{
    private $id_relest;
    private $objetoest;
    private $Peso_TotalEst;
    private $relatorio;
    private $nrores;
   
    
      public function __construct($objetoest,$Peso_TotalEst,$relatorio,$nrores){
            
          $this->objetoest = $objetoest;          
          $this->relatorio= $relatorio;
          $this->nrores = $nrores;
     }
     public function getId_relest() {
         return $this->id_relest;
     }

   
     public function getObjetoest() {
         return $this->objetoest;
     }

     public function setId_relest($id_relest) {
         $this->id_relest = $id_relest;
     }

     public function setObjetoest($objetoest) {
         $this->objetoest = $objetoest;
     }
     public function getPeso_TotalEst() {
         return $this->Peso_TotalEst;
     }

     public function getRelatorio() {
         return $this->relatorio;
     }

     public function setPeso_TotalEst($Peso_TotalEst) {
         $this->Peso_TotalEst = $Peso_TotalEst;
     }

     public function setRelatorio($relatorio) {
         $this->relatorio = $relatorio;
     }

     public function getNrores() {
         return $this->nrores;
     }

     public function setNrores($nrores) {
         $this->nrores = $nrores;
     }



}

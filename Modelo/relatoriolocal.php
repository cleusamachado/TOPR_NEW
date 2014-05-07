<?php

class relatoriolocal  {
   private $id_rellocal;
   private $objlocal;   
   private $relatorio;
   private $Peso_TotalLocal;
   private $nrores;
   
   
     public function __construct($objlocal, $Peso_TotalLocal,$relatorio,$nrores){
         
         $this->objlocal = $objlocal;
         $this->Peso_TotalLocal = $Peso_TotalLocal;
         $this->relatorio = $relatorio;
         $this->nrores = $nrores;
         
     }
     public function getId_rellocal() {
         return $this->id_rellocal;
     }

     public function getObjlocal() {
         return $this->objlocal;
     }

     public function setId_rellocal($id_rellocal) {
         $this->id_rellocal = $id_rellocal;
     }

     public function setObjlocal($objlocal) {
         $this->objlocal = $objlocal;
     }
     public function getRelatorio() {
         return $this->relatorio;
     }

     public function getPeso_TotalLocal() {
         return $this->Peso_TotalLocal;
     }

     public function getNrores() {
         return $this->nrores;
     }

     public function setRelatorio($relatorio) {
         $this->relatorio = $relatorio;
     }

     public function setPeso_TotalLocal($Peso_TotalLocal) {
         $this->Peso_TotalLocal = $Peso_TotalLocal;
     }

     public function setNroRes($nrores) {
         $this->nrores = $Nrores;
     }




}

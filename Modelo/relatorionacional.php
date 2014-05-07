<?php

class relatorionacional {
    private $id_relnac;
    private $objnac;
    private $Peso_TotalNac;
    private $relatorio;
    private $nrores;
    
      public function __construct($objnac,$Peso_TotalNac,$relatorio, $nrores){
          $this->objnac = $objnac;
          $this->Peso_TotalNac = $Peso_TotalNac;
          $this->relatorio = $relatorio;
          $this->nrores = $nrores;
      }
      public function getId_relnac() {
          return $this->id_relnac;
      }

      public function getObjnac() {
          return $this->objnac;
      }

      public function setId_relnac($id_relnac) {
          $this->id_relnac = $id_relnac;
      }

      public function setObjnac($objnac) {
          $this->objnac = $objnac;
      }
      public function getPeso_TotalNac() {
          return $this->Peso_TotalNac;
      }

      public function getRelatorio() {
          return $this->relatorio;
      }

      public function setPeso_TotalNac($Peso_TotalNac) {
          $this->Peso_TotalNac = $Peso_TotalNac;
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
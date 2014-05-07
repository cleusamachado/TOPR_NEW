<?php
class compet_old { 
 

 private $CODSER; /** * @var int */ 
 private $SUBCODSER; /** * @var int */ 
 private $PERCOMINI; /** * @var int */ 
 private $CODFASSER; /** * @var int */ 
 private $PERCOMFIM; /** * @var int */ 
 private $DATUSU; /** * @var int */ 
 private $DATPRO; /** * @var int */ 
 private $VOLPRE; /** * @var int */ 
 private $MESFS; /** * @var int */ 
 private $datanex; 
 
 function __construct(){
      }
      public function getCODSER() {
          return $this->CODSER;
      }

      public function getSUBCODSER() {
          return $this->SUBCODSER;
      }

      public function getPERCOMINI() {
          return $this->PERCOMINI;
      }

      public function getCODFASSER() {
          return $this->CODFASSER;
      }

      public function getPERCOMFIM() {
          return $this->PERCOMFIM;
      }

      public function getDATUSU() {
          return $this->DATUSU;
      }

      public function getDATPRO() {
          return $this->DATPRO;
      }

      public function getVOLPRE() {
          return $this->VOLPRE;
      }

      public function getMESFS() {
          return $this->MESFS;
      }

      public function getDatanex() {
          return $this->datanex;
      }

      public function setCODSER($CODSER) {
          $this->CODSER = $CODSER;
      }

      public function setSUBCODSER($SUBCODSER) {
          $this->SUBCODSER = $SUBCODSER;
      }

      public function setPERCOMINI($PERCOMINI) {
          $this->PERCOMINI = $PERCOMINI;
      }

      public function setCODFASSER($CODFASSER) {
          $this->CODFASSER = $CODFASSER;
      }

      public function setPERCOMFIM($PERCOMFIM) {
          $this->PERCOMFIM = $PERCOMFIM;
      }

      public function setDATUSU($DATUSU) {
          $this->DATUSU = $DATUSU;
      }

      public function setDATPRO($DATPRO) {
          $this->DATPRO = $DATPRO;
      }

      public function setVOLPRE($VOLPRE) {
          $this->VOLPRE = $VOLPRE;
      }

      public function setMESFS($MESFS) {
          $this->MESFS = $MESFS;
      }

      public function setDatanex($datanex) {
          $this->datanex = $datanex;
      }


}
?> 
<?php

class mensais_base {
    private $contador;
    private $sis;
    private $serv;
    private $regra;
    private $procedimento;
    private $descricao;
    private $complem;
    private $periodicidade;
    private $corfs;
    private $spool;
    private $diasem1;
    private $diasem2;
    private $diasem3;
    private $diasem4;
    private $diasem5;
    private $diasem7;
    private $tipofs;
    private $qtdecol;
    

    public function __construct($sis,$serv,$regra,$procedimento,$descricao,$complem, $periodicidade, $corfs,$spool, $diasem1,$diasem2,$diasem3,$diasem4,$diasem5,$diasem6,$diasem7,$tipofs,$qtdecol){
        $this->sis = $sis;
        $this->serv = $serv;
        $this->regra = $regra;
        $this->procedimento = $procedimento;
        $this->descricao = $descricao;
        $this->complem = $complem;
        $this->periodicidade = $periodicidade;
        $this->corfs = $corfs;
        $this->spool = $spool;
        $this->diasem1 = $diasem1;
        $this->diasem2 = $diasem2;
        $this->diasem3 = $diasem3;
        $this->diasem4 = $diasem4;
        $this->diasem5 = $diasem5;
        $this->diasem6 = $diasem6;
        $this->diasem7 = $diasem7;
        $this->tipofs = $tipofs;
        $this->qtdecol = $qtdecol;
        
      }
      public function getContador() {
          return $this->contador;
      }

      public function setContador($contador) {
          $this->contador = $contador;
      }

      public function getSis() {
          return $this->sis;
      }

      public function setSis($sis) {
          $this->sis = $sis;
      }

      public function getServ() {
          return $this->serv;
      }

      public function setServ($serv) {
          $this->serv = $serv;
      }

      public function getRegra() {
          return $this->regra;
      }

      public function setRegra($regra) {
          $this->regra = $regra;
      }

      public function getProcedimento() {
          return $this->procedimento;
      }

      public function setProcedimento($procedimento) {
          $this->procedimento = $procedimento;
      }

      public function getDescricao() {
          return $this->descricao;
      }

      public function setDescricao($descricao) {
          $this->descricao = $descricao;
      }

      public function getComplem() {
          return $this->complem;
      }

      public function setComplem($complem) {
          $this->complem = $complem;
      }

      public function getPeriodicidade() {
          return $this->periodicidade;
      }

      public function setPeriodicidade($periodicidade) {
          $this->periodicidade = $periodicidade;
      }

      public function getCorfs() {
          return $this->corfs;
      }

      public function setCorfs($corfs) {
          $this->corfs = $corfs;
      }

      public function getSpool() {
          return $this->spool;
      }

      public function setSpool($spool) {
          $this->spool = $spool;
      }

      public function getDiasem1() {
          return $this->diasem1;
      }

      public function setDiasem1($diasem1) {
          $this->diasem1 = $diasem1;
      }

      public function getDiasem2() {
          return $this->diasem2;
      }

      public function setDiasem2($diasem2) {
          $this->diasem2 = $diasem2;
      }

      public function getDiasem3() {
          return $this->diasem3;
      }

      public function setDiasem3($diasem3) {
          $this->diasem3 = $diasem3;
      }

      public function getDiasem4() {
          return $this->diasem4;
      }

      public function setDiasem4($diasem4) {
          $this->diasem4 = $diasem4;
      }

      public function getDiasem5() {
          return $this->diasem5;
      }

      public function setDiasem5($diasem5) {
          $this->diasem5 = $diasem5;
      }

      public function getDiasem6() {
          return $this->diasem6;
      }

      public function setDiasem6($diasem6) {
          $this->diasem6 = $diasem6;
      }

      public function getDiasem7() {
          return $this->diasem7;
      }

      public function setDiasem7($diasem7) {
          $this->diasem7 = $diasem7;
      }

      public function getTipofs() {
          return $this->tipofs;
      }

      public function setTipofs($tipofs) {
          $this->tipofs = $tipofs;
      }

      public function getQtdecol() {
          return $this->qtdecol;
      }

      public function setQtdecol($qtdecol) {
          $this->qtdecol = $qtdecol;
      }
}

?>

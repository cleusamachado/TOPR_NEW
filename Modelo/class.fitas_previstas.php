<?php
   class fitas_previstas { 
    
    //** * @var string */ 
    private $label_afm; /** * @var int */ 
    private $CRDATE; /** * @var int */ 
    private $compet_afm; /** * @var string */ 
    private $nro_fita; /** * @var string */ 
    private $funcionario; /** * @var int */ 
    private $data_anexacao; 
    
    
    function __construct(){
      }
      public function getLabel_afm() {
          return $this->label_afm;
      }

      public function getCRDATE() {
          return $this->CRDATE;
      }

      public function getCompet_afm() {
          return $this->compet_afm;
      }

      public function getNro_fita() {
          return $this->nro_fita;
      }

      public function getFuncionario() {
          return $this->funcionario;
      }

      public function getData_anexacao() {
          return $this->data_anexacao;
      }

      public function setLabel_afm($label_afm) {
          $this->label_afm = $label_afm;
      }

      public function setCRDATE($CRDATE) {
          $this->CRDATE = $CRDATE;
      }

      public function setCompet_afm($compet_afm) {
          $this->compet_afm = $compet_afm;
      }

      public function setNro_fita($nro_fita) {
          $this->nro_fita = $nro_fita;
      }

      public function setFuncionario($funcionario) {
          $this->funcionario = $funcionario;
      }

      public function setData_anexacao($data_anexacao) {
          $this->data_anexacao = $data_anexacao;
      }


   }
   ?>
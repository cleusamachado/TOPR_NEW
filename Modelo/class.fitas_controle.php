<?php
class fitas_controle { 
 
 //** * @var int */ 
 private $data_mensal; /** * @var int */ 
 private $data_atual_fitas; /** * @var int */ 
 private $mes; 
 
 
 function __construct(){
      }
      public function getData_mensal() {
          return $this->data_mensal;
      }

      public function getData_atual_fitas() {
          return $this->data_atual_fitas;
      }

      public function getMes() {
          return $this->mes;
      }

      public function setData_mensal($data_mensal) {
          $this->data_mensal = $data_mensal;
      }

      public function setData_atual_fitas($data_atual_fitas) {
          $this->data_atual_fitas = $data_atual_fitas;
      }

      public function setMes($mes) {
          $this->mes = $mes;
      }


 } 
?>


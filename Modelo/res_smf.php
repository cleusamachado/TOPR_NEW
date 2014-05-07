<?php

class res_smf {
    
    private $lotePostagem;
    private $dataPostagem;
    private $nomeservico ;
    private $competencia;
    private $complemento ;
    private $funcionario;
    private $reemitir;
    private $id_seed_estrutura;
    private $nrores;
    
   
    
     public function __construct($lotePostagem,$dataPostagem,$nomeservico,$competencia,$complemento,$funcionario,$reemitir,$id_seed_estrutura,$nrores){
         $this->lotePostagem = $lotePostagem;
         $this->dataPostagem = $dataPostagem;        
         $this->nomeservico = $nomeservico;
	 $this->competencia = $competencia;
         $this->complemento = $complemento;
         $this->funcionario = $funcionario;
         $this->reemitir = $reemitir; 
	 $this->id_seed_estrutura = $id_seed_estrutura;
	 $this->nrores = $nrores;
	  
                 
     }
    
     public function getLotePostagem() {
         return $this->lotePostagem;
     }

     public function getDataPostagem() {
         return $this->dataPostagem;
     }

     public function getNomeServico() {
         return $this->nomeservico;
     }

     public function getCompetencia() {
         return $this->competencia;
     }

     public function getComplemento() {
         return $this->complemento;
     }

     public function getFuncionario() {
         return $this->funcionario;
     }

     public function getReemitir() {
         return $this->reemitir;
     }

     public function getId_seed_estrutura() {
         return $this->id_seed_estrutura;
     }

     public function getNrores() {
         return $this->nrores;
     }

     public function setLotePostagem($lotePostagem) {
         $this->lotePostagem = $lotePostagem;
     }

     public function setDataPostagem($dataPostagem) {
         $this->dataPostagem = $dataPostagem;
     }

     public function setNomeServico($nomeServico) {
         $this->nomeServico = $nomeServico;
     }

     public function setCompetencia($competencia) {
         $this->competencia = $competencia;
     }

     public function setComplemento($complemento) {
         $this->complemento = $complemento;
     }

     public function setFuncionario($funcionario) {
         $this->funcionario = $funcionario;
     }

     public function setReemitir($reemitir) {
         $this->reemitir = $reemitir;
     }

     public function setId_seed_estrutura($id_seed_estrutura) {
         $this->id_seed_estrutura = $id_seed_estrutura;
     }

     public function setNrores($nrores) {
         $this->nrores = $nrores;
     }
}

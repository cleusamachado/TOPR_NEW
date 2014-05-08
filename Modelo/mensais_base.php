<?php
class mensais_base {

    private $contador;
    private $sis;
    private $serv;
    private $regra;
    private $executar;
    private $tarefas;
    private $complem;
    private $periodicidade;
    private $corfs;
    private $descricao;
    private $diasem = array();
    private $tipofs;
    private $qtdecol;

    public function __construct($sis, $serv, $regra, $executar, $descricao, $complem, $periodicidade, $corfs, $tarefas, $tipofs, $qtdecol) {
        $this->sis = $sis;
        $this->serv = $serv;
        $this->regra = $regra;
        $this->executar = $executar;
        $this->descricao = $descricao;
        $this->complem = $complem;
        $this->periodicidade = $periodicidade;
        $this->corfs = $corfs;
        $this->tarefas = $tarefas;
        $this->tipofs = $tipofs;
        $this->qtdecol = $qtdecol;
    }
    public function getDiasem() {
        return $this->diasem;
    }

    public function setDiasem($diasem) {
        $this->diasem = $diasem;
    }

    
        public function getContador() {
        return $this->contador;
    }

    public function getSis() {
        return $this->sis;
    }

    public function getServ() {
        return $this->serv;
    }

    public function getRegra() {
        return $this->regra;
    }

    public function getExecutar() {
        return $this->executar;
    }

    public function getTarefas() {
        return $this->tarefas;
    }

    public function getComplem() {
        return $this->complem;
    }

    public function getPeriodicidade() {
        return $this->periodicidade;
    }

    public function getCorfs() {
        return $this->corfs;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getTipofs() {
        return $this->tipofs;
    }

    public function getQtdecol() {
        return $this->qtdecol;
    }

    public function setContador($contador) {
        $this->contador = $contador;
    }

    public function setSis($sis) {
        $this->sis = $sis;
    }

    public function setServ($serv) {
        $this->serv = $serv;
    }

    public function setRegra($regra) {
        $this->regra = $regra;
    }

    public function setExecutar($executar) {
        $this->executar = $executar;
    }

    public function setTarefas($tarefas) {
        $this->tarefas = $tarefas;
    }

    public function setComplem($complem) {
        $this->complem = $complem;
    }

    public function setPeriodicidade($periodicidade) {
        $this->periodicidade = $periodicidade;
    }

    public function setCorfs($corfs) {
        $this->corfs = $corfs;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function setTipofs($tipofs) {
        $this->tipofs = $tipofs;
    }

    public function setQtdecol($qtdecol) {
        $this->qtdecol = $qtdecol;
    }


}
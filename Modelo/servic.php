<?php

class servic
{
    private $codser;
    private $subcodser;
    private $nomser;
    private $codcli;
    private $nomusu;
    private $ano;
    private $resusu;
    private $respro;
    private $obs;
    private $camporha;
    private $sis;
    private $spool;
    private $tipofs;
    
    public function __construct($codser,$subcodser,$nomser,$codcli,$nomusu,_
            $ano,$resusu,$respro,$obs,$camporha,$sis,$spool,$tipofs){
    
        $this->codser = $codser;
        $this->subcodser = $subcodser;
        $this->nomser = $nomser;
        $this->codcli = $codcli;
        $this->nomusu = $nomusu;
        $this->ano = $ano;
        $this->resusu = $resusu;
        $this->respro = $respro;
        $this->obs = $obs;
        $this->camporha = $camporha;
        $this->sis = $sis;
        $this->spool = $spool;
        $this->tipofs = $tipofs;
        }
        public function getCodser() {
            return $this->codser;
        }

        public function getSubcodser() {
            return $this->subcodser;
        }

        public function getNomser() {
            return $this->nomser;
        }

        public function getCodcli() {
            return $this->codcli;
        }

        public function getNomusu() {
            return $this->nomusu;
        }

        public function getAno() {
            return $this->ano;
        }

        public function getResusu() {
            return $this->resusu;
        }

        public function getRespro() {
            return $this->respro;
        }

        public function getObs() {
            return $this->obs;
        }

        public function getCamporha() {
            return $this->camporha;
        }

        public function getSis() {
            return $this->sis;
        }

        public function getSpool() {
            return $this->spool;
        }

        public function getTipofs() {
            return $this->tipofs;
        }

        public function setCodser($codser) {
            $this->codser = $codser;
        }

        public function setSubcodser($subcodser) {
            $this->subcodser = $subcodser;
        }

        public function setNomser($nomser) {
            $this->nomser = $nomser;
        }

        public function setCodcli($codcli) {
            $this->codcli = $codcli;
        }

        public function setNomusu($nomusu) {
            $this->nomusu = $nomusu;
        }

        public function setAno($ano) {
            $this->ano = $ano;
        }

        public function setResusu($resusu) {
            $this->resusu = $resusu;
        }

        public function setRespro($respro) {
            $this->respro = $respro;
        }

        public function setObs($obs) {
            $this->obs = $obs;
        }

        public function setCamporha($camporha) {
            $this->camporha = $camporha;
        }

        public function setSis($sis) {
            $this->sis = $sis;
        }

        public function setSpool($spool) {
            $this->spool = $spool;
        }

        public function setTipofs($tipofs) {
            $this->tipofs = $tipofs;
        }


}

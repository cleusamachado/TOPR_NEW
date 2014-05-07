<?php

class res_smf_estrutura {
    private $id_seed_estrutura;
    private $nomecontratante;
    private $origemcontrato;
    private $numcontrato;
    private $codadministrativo;
    private $numcartaocliente;
    private $numcartaopostagem;
    private $drfaturamento;
    private $localidade;
    private $unidadepostagem;
    private $codigo;
    private $sistema;
    private $nomecliente;
    private $endereco;
    private $fac_local;
    private $fac_estadual;
    private $fac_nacional;
    private $Peso;
    
    function __construct($nomecontratante,
            $origemcontrato, $numcontrato,$codadministrativo,
            $numcartaocliente, $numcartaopostagem,            
            $drfaturamento, $localidade, $unidadepostagem,
            $codigo, $sistema, $nomecliente, $endereco,
            $fac_local,$fac_estadual, $fac_nacional,$Peso){
        
        
        $this->nomecontratante = $nomecontratante;
        $this->origemcontrato = $origemcontrato;
        $this->numcontrato = $numcontrato;
        $this->codadministrativo = $codadministrativo;
        $this->numcartaocliente = $numcartaocliente;
        $this->numcartaopostagem = $numcartaopostagem;
        $this->drfaturamento = $drfaturamento;
        $this->localidade = $localidade;
        $this->unidadepostagem = $unidadepostagem;
        $this->codigo = $codigo;
        $this->sistema = $sistema;
        $this->nomecliente = $nomecliente;
        $this->endereco = $endereco;
        $this->fac_local = $fac_local;
        $this->fac_estadual = $fac_estadual;
        $this->fac_nacional = $fac_nacional;
        $this->Peso = $Peso;
            }
            
            public function getId_seed_estrutura() {
                return $this->id_seed_estrutura;
            }

            public function getNomecontratante() {
                return $this->nomecontratante;
            }

            public function getOrigemcontrato() {
                return $this->origemcontrato;
            }

            public function getNumcontrato() {
                return $this->numcontrato;
            }

            public function getCodadministrativo() {
                return $this->codadministrativo;
            }

            public function getNumcartaocliente() {
                return $this->numcartaocliente;
            }

            public function getNumcartaopostagem() {
                return $this->numcartaopostagem;
            }

            public function getDrfaturamento() {
                return $this->drfaturamento;
            }

            public function getLocalidade() {
                return $this->localidade;
            }

            public function getUnidadepostagem() {
                return $this->unidadepostagem;
            }

            public function getCodigo() {
                return $this->codigo;
            }

            public function getSistema() {
                return $this->sistema;
            }

            public function getNomecliente() {
                return $this->nomecliente;
            }

            public function getEndereco() {
                return $this->endereco;
            }

            public function setId_seed_estrutura($id_seed_estrutura) {
                $this->id_seed_estrutura = $id_seed_estrutura;
            }

            public function setNomecontratante($nomecontratante) {
                $this->nomecontratante = $nomecontratante;
            }

            public function setOrigemcontrato($origemcontrato) {
                $this->origemcontrato = $origemcontrato;
            }

            public function setNumcontrato($numcontrato) {
                $this->numcontrato = $numcontrato;
            }

            public function setCodadministrativo($codadministrativo) {
                $this->codadministrativo = $codadministrativo;
            }

            public function setNumcartaocliente($numcartaocliente) {
                $this->numcartaocliente = $numcartaocliente;
            }

            public function setNumcartaopostagem($numcartaopostagem) {
                $this->numcartaopostagem = $numcartaopostagem;
            }

            public function setDrfaturamento($drfaturamento) {
                $this->drfaturamento = $drfaturamento;
            }

           public function setLocalidade($localidade) {
                $this->localidade = $localidade;
            }

            public function setUnidadepostagem($unidadepostagem) {
                $this->unidadepostagem = $unidadepostagem;
            }

            public function setCodigo($codigo) {
                $this->codigo = $codigo;
            }

            public function setSistema($sistema) {
                $this->sistema = $sistema;
            }

            public function setNomecliente($nomecliente) {
                $this->nomecliente = $nomecliente;
            }

            public function setEndereco($endereco) {
                $this->endereco = $endereco;
            }
            public function getFac_local() {
                return $this->fac_local;
            }

            public function getFac_estadual() {
                return $this->fac_estadual;
            }

            public function getFac_nacional() {
                return $this->fac_nacional;
            }

            public function getPeso() {
                return $this->Peso;
            }

            public function setFac_local($fac_local) {
                $this->fac_local = $fac_local;
            }

            public function setFac_estadual($fac_estadual) {
                $this->fac_estadual = $fac_estadual;
            }

            public function setFac_nacional($fac_nacional) {
                $this->fac_nacional = $fac_nacional;
            }

            public function setPeso($peso) {
                $this->peso = $peso;
            }



    }
        
            


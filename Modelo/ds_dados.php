<?php

class ds_dados {
    private $idCodigo;
    private $dataInclusao;
    private $obs;
    private $identSaida;
    private $nomeSaida;
    private $codForm;
    private $qtde;
    private $clienteUsuario;
    private $acabamento;
    private $exclui;
    private $idDsdados;
   
    public function __construct($idCcodigo, $dataInclusao,$obs,$identSaida,$nomeSaida,$codForm,$qtde,$clienteUsuario,$acabamento,$exclui,$idDsdados){
        $this->idCodigo = $idCcodigo;
        $this->dataInclusao = $dataInclusao;
        $this->obs = $obs;
        $this->identSaida = $identSaida;
        $this->nomeSaida = $nomeSaida;
        $this->codForm = $codForm;
        $this->qtde = $qtde;
        $this->clienteUsuario = $clienteUsuario;
        $this->acabamento = $acabamento;
        $this->exclui = $exclui;
        $this->idDsdados = $idDsdados;
    }
    public function getIdCodigo() {
        return $this->idCodigo;
    }

    public function getDataInclusao() {
        return $this->dataInclusao;
    }

    public function getObs() {
        return $this->obs;
    }

    public function getIdentSaida() {
        return $this->identSaida;
    }

    public function getNomeSaida() {
        return $this->nomeSaida;
    }

    public function getCodForm() {
        return $this->codForm;
    }

    public function getQtde() {
        return $this->qtde;
    }

    public function getClienteUsuario() {
        return $this->clienteUsuario;
    }

    public function getAcabamento() {
        return $this->acabamento;
    }

    public function getExclui() {
        return $this->exclui;
    }

    public function getIdDsdados() {
        return $this->idDsdados;
    }

    public function setIdCodigo($idCodigo) {
        $this->idCodigo = $idCodigo;
    }

    public function setDataInclusao($dataInclusao) {
        $this->dataInclusao = $dataInclusao;
    }

    public function setObs($obs) {
        $this->obs = $obs;
    }

    public function setIdentSaida($identSaida) {
        $this->identSaida = $identSaida;
    }

    public function setNomeSaida($nomeSaida) {
        $this->nomeSaida = $nomeSaida;
    }

    public function setCodForm($codForm) {
        $this->codForm = $codForm;
    }

    public function setQtde($qtde) {
        $this->qtde = $qtde;
    }

    public function setClienteUsuario($clienteUsuario) {
        $this->clienteUsuario = $clienteUsuario;
    }

    public function setAcabamento($acabamento) {
        $this->acabamento = $acabamento;
    }

    public function setExclui($exclui) {
        $this->exclui = $exclui;
    }

    public function setIdDsdados($idDsdados) {
        $this->idDsdados = $idDsdados;
    }


 }

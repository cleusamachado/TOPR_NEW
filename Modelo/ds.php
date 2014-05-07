<?php

class ds {
    private $sis;
    private $usuario;
    private $descserv;
    private $periodicidade;
    private $serv;
    private $data_inclusao;
    private $id_codigo;
    private $etapa;
    
    public function __construct($sis,$usuario,$descserv,$periodicidade, $serv,$data_inclusao, $id_codigo, $etapa){
        $this->sis = $sis;
        $this->usuario = $usuario;
        $this->descserv = $descserv;
        $this->periodicidade = $periodicidade;
        $this->serv = $serv;
        $this->data_inclusao = $data_inclusao;
        $this->id_codigo = $id_codigo;
        $this->etapa = $etapa;        
    }
    public function getSis() {
        return $this->sis;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function getDescserv() {
        return $this->descserv;
    }

    public function getPeriodicidade() {
        return $this->periodicidade;
    }

    public function getServ() {
        return $this->serv;
    }

    public function getData_inclusao() {
        return $this->data_inclusao;
    }

    public function getId_codigo() {
        return $this->id_codigo;
    }

    public function getEtapa() {
        return $this->etapa;
    }

    public function setSis($sis) {
        $this->sis = $sis;
    }

    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    public function setDescserv($descserv) {
        $this->descserv = $descserv;
    }

    public function setPeriodicidade($periodicidade) {
        $this->periodicidade = $periodicidade;
    }

    public function setServ($serv) {
        $this->serv = $serv;
    }

    public function setData_inclusao($data_inclusao) {
        $this->data_inclusao = $data_inclusao;
    }

    public function setId_codigo($id_codigo) {
        $this->id_codigo = $id_codigo;
    }

    public function setEtapa($etapa) {
        $this->etapa = $etapa;
    }


}

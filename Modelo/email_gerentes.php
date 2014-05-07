<?php

class email_gerentes {
    private $id_gerente;
    private $nome;
    private $cargo;
    private $setor;
    private $email;
    
    function __construct($id_gerente,$nome,$cargo,$setor,$email){
                $this->id_gerente = $id_gerente;
                $this->nome = $nome;
                $this->cargo = $cargo;
                $this->setor = $setor;
                $this->email = $email;
    }
    public function getId_gerente() {
        return $this->id_gerente;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCargo() {
        return $this->cargo;
    }

    public function getSetor() {
        return $this->setor;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setId_gerente($id_gerente) {
        $this->id_gerente = $id_gerente;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setCargo($cargo) {
        $this->cargo = $cargo;
    }

    public function setSetor($setor) {
        $this->setor = $setor;
    }

    public function setEmail($email) {
        $this->email = $email;
    }


}

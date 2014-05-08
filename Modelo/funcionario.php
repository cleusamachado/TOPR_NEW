<?php

class funcionario {
    private $nome;
    private $permissao;
    private $username;
    private $tipo;

    public function __construct($nome, $username, $tipo, $permissao = "") {
        $this->nome = $nome;
        $this->username = $username;
	$this->tipo = $tipo;
        $this->permissao = $permissao;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getPermissao() {
        return $this->permissao;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setPermissao($permissao) {
        $this->permissao = $permissao;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }



}
?>

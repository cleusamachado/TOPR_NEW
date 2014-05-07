<?php

class funcionario {
    private $id_funcionario;
    private $nome;
    private $login;
    private $senha;
    private $tipo;

    public function __construct($nome, $login, $senha, $tipo) {
        $this->nome = $nome;
        $this->login = $login;
        $this->senha = $senha;
	    $this->tipo = $tipo;
    }
    public function getId_Funcionario() {
        return $this->id_funcionario;
    }

    public function setId_Funcionario($id_funcionario) {
        $this->id_funcionario = $id_funcionario;
    }

    public function getLogin() {
        return $this->login;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

}
?>

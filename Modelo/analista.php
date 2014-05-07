<?php


class analista {
    private $analista;
    private $sis1;
    private $opcao;
    private $username;
    private $titular;
    
    function __construct($analista,$sis1,$opcao,$username,$titular) {
        $this->analista = $analista;
        $this->sis1 = $sis1;
        $this->opcao = $opcao;
        $this->username = $username;
        $this->titular = $titular;
    }

    public function getAnalista() {
        return $this->analista;
    }

    public function setAnalista($analista) {
        $this->analista = $analista;
    }

    public function getSis1() {
        return $this->sis1;
    }

    public function setSis1($sis1) {
        $this->sis1 = $sis1;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getTitular() {
        return $this->titular;
    }

    public function setTitular($titular) {
        $this->titular = $titular;
    }

}

?>

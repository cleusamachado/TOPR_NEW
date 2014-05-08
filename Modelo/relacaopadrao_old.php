<?php

class relacaopadrao {
    
    private $sis;
    private $serv;
    private $descserv;
    private $cod1usu;
    private $usuario;
    private $tp;
    private $periodexec;
    private $opcao;

    public function __construct($sis, $serv, $descserv, $cod1usu, $usuario, $tp, $periodexec) {
        $this->sis = $sis;
        $this->serv = $serv;
        $this->descserv = $descserv;
	$this->cod1usu = $cod1usu;
        $this->usuario = $usuario;
        $this->tp = $tp;
        $this->periodexec = $periodexec;
        $this->opcao = false;
        }
        public function getSis() {
            return $this->sis;
        }

        public function setSis($sis) {
            $this->sis = $sis;
        }

        public function getServ() {
            return $this->serv;
        }

        public function setServ($serv) {
            $this->serv = $serv;
        }

        public function getDescserv() {
            return $this->descserv;
        }

        public function setDescserv($descserv) {
            $this->descserv = $descserv;
        }

        public function getCod1usu() {
            return $this->cod1usu;
        }

        public function setCod1usu($cod1usu) {
            $this->cod1usu = $cod1usu;
        }

        public function getUsuario() {
            return $this->usuario;
        }

        public function setUsuario($usuario) {
            $this->usuario = $usuario;
        }

        public function getTp() {
            return $this->tp;
        }

        public function setTp($tp) {
            $this->tp = $tp;
        }

        public function getPeriodexec() {
            return $this->periodexec;
        }

        public function setPeriodexec($periodexec) {
            $this->periodexec = $periodexec;
        }
}
?>

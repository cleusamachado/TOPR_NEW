<?php


class nro_res_smf {
    private $nro_ano;
    private $nro_seq;
    private $nrores;
    
    public function __construct($nro_ano, $nro_seq, $nrores){
        $this->nro_ano = $nro_ano;
        $this->nro_seq = $nro_seq;
        $this->nrores = $nrores;
        }
        public function getNro_ano() {
            return $this->nro_ano;
        }

        public function getNro_seq() {
            return $this->nro_seq;
        }

        public function getNrores() {
            return $this->nrores;
        }

        public function setNro_ano($nro_ano) {
            $this->nro_ano = $nro_ano;
        }

        public function setNro_seq($nro_seq) {
            $this->nro_seq = $nro_seq;
        }

        public function setNrores($nrores) {
            $this->nrores = $nrores;
        }

}
?>

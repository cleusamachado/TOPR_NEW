<?php

class jcl_afm {
    private $jcl;
    
    public function __construct($jcl){
        $this->jcl = $jcl;
    }
    public function getJcl() {
        return $this->jcl;
    }

    public function setJcl($jcl) {
        $this->jcl = $jcl;
    }


}

<?php


class analista_negocios {
   private $id_ana_negocio;
   private $nome_ana;
   private $email_ana;
   
   function __construct($id_ana_negocio,$nome_ana,$email_ana){
       $this->id_ana_negocio;
       $this->nome_ana = $nome_ana;   
       $this->email_ana = $email_ana;
   }
   public function getId_ana_negocio() {
       return $this->id_ana_negocio;
   }

   public function getNome_ana() {
       return $this->nome_ana;
   }

   public function getEmail_ana() {
       return $this->email_ana;
   }

   public function setId_ana_negocio($id_ana_negocio) {
       $this->id_ana_negocio = $id_ana_negocio;
   }

   public function setNome_ana($nome_ana) {
       $this->nome_ana = $nome_ana;
   }

   public function setEmail_ana($email_ana) {
       $this->email_ana = $email_ana;
   }

}

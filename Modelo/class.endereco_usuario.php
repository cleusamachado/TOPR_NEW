<?php
 class endereco_usuario { 
  
  //** * @var string */ 
  private $sistema; /** * @var int */ 
  private $codigo; /** * @var string */ 
  private $nome_usuario; /** * @var */ 
  private $observacoes; /** * @var string */ 
  private $fone; /** * @var string */ 
  private $endereco; /** * @var int */ 
  private $opcao; /** * @var int */ 
  private $data_inclusao; /** * @var int */ 
  private $id_endusuario; /** * @var string */ 
  private $responsavel; 
  
  function __construct(){
      }
      public function getSistema() {
          return $this->sistema;
      }

      public function getCodigo() {
          return $this->codigo;
      }

      public function getNome_usuario() {
          return $this->nome_usuario;
      }

      public function getObservacoes() {
          return $this->observacoes;
      }

      public function getFone() {
          return $this->fone;
      }

      public function getEndereco() {
          return $this->endereco;
      }

      public function getOpcao() {
          return $this->opcao;
      }

      public function getData_inclusao() {
          return $this->data_inclusao;
      }

      public function getId_endusuario() {
          return $this->id_endusuario;
      }

      public function getResponsavel() {
          return $this->responsavel;
      }

      public function setSistema($sistema) {
          $this->sistema = $sistema;
      }

      public function setCodigo($codigo) {
          $this->codigo = $codigo;
      }

      public function setNome_usuario($nome_usuario) {
          $this->nome_usuario = $nome_usuario;
      }

      public function setObservacoes($observacoes) {
          $this->observacoes = $observacoes;
      }

      public function setFone($fone) {
          $this->fone = $fone;
      }

      public function setEndereco($endereco) {
          $this->endereco = $endereco;
      }

      public function setOpcao($opcao) {
          $this->opcao = $opcao;
      }

      public function setData_inclusao($data_inclusao) {
          $this->data_inclusao = $data_inclusao;
      }

      public function setId_endusuario($id_endusuario) {
          $this->id_endusuario = $id_endusuario;
      }

      public function setResponsavel($responsavel) {
          $this->responsavel = $responsavel;
      }


 }
?>
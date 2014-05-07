<?php

class ConexaoBD {

    private  $host = "localhost";
    private  $port = 3306;
    private  $dbname = "producao";
    private  $user = "root";
    private  $password = "";


    public static function obterConexao() {
         $jdbh = new PDO('mysql:host=localhost;port=3306;dbname=producao', 'root', '' );
         $jdbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $jdbh;
       //fecha a conex�o
    }
}


?>
<?php

include_once ("../Modelo/conexaoBD.php");
include_once ("../Modelo/res_smf_estrutura.php");
   
class res_smf_estruturaDAO {
     private $con;

    public function __construct() {
        $this->con = ConexaoBD::obterConexao();
    }
		
    public function obterEstrutura($id_seed_estrutura) { 
         $comando = "SELECT NomeContratante,OrigemContrato,NumContrato,CodAdministrativo,
                    NumCartaoCliente,NumCartaoPostagem,DrFaturamento,
                    Localidade,UnidadePostagem,Codigo,Sistema,NomeCliente,Endereco, 
                    Fac_Local, Fac_Estadual,Fac_Nacional,Peso
                    FROM res_smf_estrutura1
                    WHERE id_seed_estrutura = $id_seed_estrutura";
        foreach ($this->con->query($comando) as $linha) {
            //var_dump($linha);
            $estrut = new res_smf_estrutura($linha['NomeContratante'],$linha['OrigemContrato'],
                    $linha['NumContrato'],$linha['CodAdministrativo'],$linha['NumCartaoCliente'],
                    $linha['NumCartaoPostagem'],$linha['DrFaturamento'],$linha['Localidade'],
                    $linha['UnidadePostagem'],$linha['Codigo'],$linha['Sistema'],
                    $linha['NomeCliente'],$linha['Endereco'],$linha['Fac_Local'],
                    $linha['Fac_Estadual'],$linha['Fac_Nacional'],$linha['Peso']);
           // $estrut->setId_seed_estrutura($linha['id_seed_estrutura']);
        }
        return $estrut;
    }
    
     public function obterEstrut() { 
        $estrutura = array();
        $comando = "SELECT * FROM res_smf_estrutura1";
        foreach ($this->con->query($comando) as $linha) {
           $estr = new res_smf_estrutura($linha['NomeContratante'],
                   $linha['OrigemContrato'],$linha['NumContrato'],$linha['CodAdministrativo'],
                   $linha['NumCartaoCliente'],$linha['NumCartaoPostagem'],$linha['DrFaturamento'],
                   $linha['Localidade'],$linha['UnidadePostagem'],
                    $linha['Codigo'],$linha['Sistema'],$linha['NomeCliente'],$linha['Endereco'],$linha['Fac_Local'],$linha['Fac_Estadual'],$linha['Fac_Nacional'],$linha['Peso']);
            
            $estr->setId_seed_estrutura($linha['id_seed_estrutura']);
            $estrutura[] = $estr;
        } 
			return $estrutura;
    }
}
?>

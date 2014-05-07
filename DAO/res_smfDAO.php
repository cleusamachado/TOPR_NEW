<?php
include_once "../Modelo/conexaoBD.php";
include_once "../Modelo/res_smf.php";

class res_smfDAO {
   
    private $con;

    public function __construct() {
        $this->con = ConexaoBD::obterConexao();
    }

    public function obterRESMF() {        
        $comando = "SELECT Lote_Postagem,Data_Postagem,nomeservico,competencia,complemento,funcionario,
                    reemitir, id_seed_estrutura, nrores
                    FROM res_smf1 ORDER BY nrores";                   
        
        foreach ($this->con->query($comando) as $linha) {
           // var_dump($linha);
            $res = new Res_Smf($linha['Lote_Postagem'],$linha['Data_Postagem'],
                    $linha['nomeservico'],$linha['competencia'],$linha['complemento'],$linha['funcionario'],
                    $linha['reemitir'], $linha['id_seed_estrutura'], $linha['nrores']);
             return $res;
        }
        
    }
     public function salvar($resmf) {
         //var_dump($resmf);         
        $lotePostagem = $resmf->getLotePostagem();
        $dataPostagem = $resmf->getDataPostagem();       
        $nomeservico = $resmf->getNomeservico();
        $competencia = $resmf->getCompetencia();
        $complemento = $resmf->getComplemento();
        $funcionario = $resmf->getFuncionario();
        $reemitir = $resmf->getReemitir();
        $id_seed_estrutura = $resmf->getId_seed_estrutura();
        $nrores = $resmf->getNrores();
       
               
       
        if ($nrores == null) {
            $comando = "INSERT INTO res_smf1 (Lote_Postagem,Data_Postagem,NomeServico,Competencia,Complemento,Funcionario,
                                    reemitir, id_seed_estrutura, NroRES)
                        VALUES ('$lotePostagem','$dataPostagem','$nomeservico','$competencia','$complemento','$funcionario',
                                '$reemitir','$id_seed_estrutura','$nrores')";
        } else {
            $comando = "UPDATE res_smf1
                        SET Lote_Postagem = '$lotePostagem',Data_Postagem ='$dataPostagem',nomeservico = '$nomeservico',
                        competencia = '$competencia',complemento = '$complemento',funcionario = '$funcionario',
                        reemitir = '$reemitir', id_seed_estrutura ='$id_seed_estrutura'
                        WHERE nrores = $nrores";
           
        }
        $this->con->exec($comando);
    }
}

?>

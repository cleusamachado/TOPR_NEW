<?php
include_once "conexaoBD.php";
include_once "mensais_base.php";


class mensais_baseDAO {
   
    private $con;

    public function __construct() {
        $this->con = ConexaoBD::obterConexao();
    }
		
    public function obterMensal($contador) { //qdo quer chamar somente um item
        //$contador = null;
        $comando = "SELECT sis,serv,regra,procedimento,descricao,complem,periodicidade,corfs,spool,diasem1,diasem2,diasem3,diasem4,diasem5,diasem6,diasem7, tipofs,qtdecol
                    FROM tab_mensais_base
                    WHERE contador = $contador";
        foreach ($this->con->query($comando) as $linha) {
            $mensal = new Mensais_base($linha['sis'],$linha['serv'],$linha['regra'],$linha['procedimento'],$linha['descricao'],$linha['complem'],$linha['periodicidade'],$linha['corfs'],$linha['spool'],$linha['diasem1'],$linha['diasem2'],$linha['diasem3'],$linha['diasem4'],$linha['diasem5'],$linha['diasem6'],$linha['diasem7'],$linha['tipofs'],$linha['qtdecol']);
            $mensal->setContador($linha['contador']);
        }
        return $mensal;
    }

    public function obterMensais() { //chama todos os itens
        $mensal = array();
        $comando = "SELECT contador,sis,serv,regra,procedimento,descricao,complem,periodicidade,
        corfs,spool,diasem1,diasem2,diasem3,diasem4,diasem5,diasem6,diasem7, tipofs,qtdecol
                    FROM tab_mensais_base ORDER BY sis";
        foreach ($this->con->query($comando) as $linha) {
            $mensal = new Mensais_base($linha['sis'],$linha['serv'],$linha['regra'],$linha['procedimento'],$linha['descricao'],$linha['complem'],$linha['periodicidade'],
			$linha['corfs'],$linha['spool'],$linha['diasem1'],$linha['diasem2'],$linha['diasem3'],$linha['diasem4'],$linha['diasem5'],$linha['diasem6'],
			$linha['diasem7'],$linha['tipofs'],$linha['qtdecol']);
			$mensal->setContador($linha['contador']);
            $mensais[] = $mensal;
        } 
			return $mensais;
    }
    
	 public function salvar($mensais) {
		$contador = $mensais->getContador();
	    $sis = $mensais->getSis();
		$serv = $mensais->getServ();
		$regra = $mensais->getRegra();
		$procedimento = $mensais->getProcedimento();
		$descricao = $mensais->getDescricao();
		$complem = $mensais->getComplem();
		$Periodicidade = $mensais->getPeriodicidade();
		$corfs = $mensais->getCorfs();
		$spool = $mensais->getSpool();
		$DiaSem1 = $mensais->getDiasem1();
		$DiaSem2 = $mensais->getDiasem2();
		$DiaSem3 = $mensais->getDiasem3();
		$DiaSem4 = $mensais->getDiasem4();
		$DiaSem5 = $mensais->getDiasem5();
		$DiaSem6 = $mensais->getDiasem6();
		$DiaSem7 = $mensais->getDiasem7();
		$tipofs = $mensais->getTipofs();
		$QtdeCol = $mensais->getQtdecol();
        if ($contador == Null) {
				$comando = "INSERT INTO tab_mensais_base (sis,serv,regra,procedimento,descricao,contador,complem,Periodicidade,corfs,spool,DiaSem1,DiaSem2,DiaSem3,DiaSem4,DiaSem5,DiaSem6,DiaSem7, tipofs,QtdeCol)
                        VALUES ('$sis','$serv','$regra','$procedimento','$descricao','','$complem','$Periodicidade','$corfs','$spool','$DiaSem1','$DiaSem2','$DiaSem3','$DiaSem4','$DiaSem5','$DiaSem6','$DiaSem7','$tipofs','$QtdeCol')";
        } else {
				$comando = "UPDATE tab_mensais_base
                        SET sis = '$sis',serv='$serv',regra='$regra',procedimento='$procedimento',descricao='$descricao',complem='$complem',Periodicidade='$Periodicidade',	corfs='$corfs',spool='$spool',DiaSem1='$DiaSem1',DiaSem2='$DiaSem2',DiaSem3='$DiaSem3',DiaSem4='$DiaSem4',DiaSem5='$DiaSem5',DiaSem6='$DiaSem6',DiaSem7='$DiaSem7',tipofs='$tipofs',QtdeCol='$QtdeCol'
                        WHERE contador = $contador";
        }
        $this->con->exec($comando);
    }

    public function excluir($contador) {
        $comando = "DELETE FROM tab_mensais_base WHERE contador = $contador";
        $this->con->exec($comando);
    }
    

}

?>

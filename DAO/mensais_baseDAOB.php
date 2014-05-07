<?php
include_once "../../BD/conexaoBD.php";
include_once "../../classes/Menu/mensais_base.php";

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
            $mensal = new Mensais_base($linha['sis'], $linha['serv'], $linha['regra'], $linha['procedimento'], $linha['spool'], $linha['complem'], $linha['periodicidade'], $linha['corfs'], $linha['descricao'], $linha['tipofs'], $linha['qtdecol']);
            $mensal->setContador($contador);
            $mensal->setDiasem(mensais_baseDAO::montaSemana($linha['diasem1'], $linha['diasem2'], $linha['diasem3'], $linha['diasem4'], $linha['diasem5'], $linha['diasem6'], $linha['diasem7']));
        }
        return $mensal;
    }
    //Antigo     |  Novo     equivalencias dos campos que mudaram de nome
    //Procedimento == Executar
    //Descrição == tarefas
    //Spool == descrição
    public function obterMensais() { //chama todos os itens
        $mensal = array();
        $comando = "SELECT contador,sis,serv,regra,procedimento,descricao,complem,periodicidade,corfs,spool,diasem1,diasem2,diasem3,diasem4,diasem5,diasem6,diasem7, tipofs,qtdecol
                    FROM tab_mensais_base ORDER BY sis";
        foreach ($this->con->query($comando) as $linha) {
            $mensal = new Mensais_base($linha['sis'], $linha['serv'], $linha['regra'], $linha['procedimento'], $linha['spool'], $linha['complem'], $linha['periodicidade'], $linha['corfs'], $linha['descricao'], $linha['tipofs'], $linha['qtdecol']);
            $mensal->setContador($linha['contador']);
            $mensal->setDiasem(mensais_baseDAO::montaSemana($linha['diasem1'], $linha['diasem2'], $linha['diasem3'], $linha['diasem4'], $linha['diasem5'], $linha['diasem6'], $linha['diasem7']));
            $mensais[] = $mensal;
        }
        return $mensais;
    }

    public function salvar($mensais) {
        $contador = $mensais->getContador();
        $sis = $mensais->getSis();
        $serv = $mensais->getServ();
        $regra = $mensais->getRegra();
        $procedimento = $mensais->getExecutar();
        $descricao = $mensais->getTarefas();
        $complem = $mensais->getComplem();
        $Periodicidade = $mensais->getPeriodicidade();
        $corfs = $mensais->getCorfs();
        $spool = $mensais->getDescricao();
        $diasem = $mensais->getDiasem();
        $tipofs = $mensais->getTipofs();
        $QtdeCol = $mensais->getQtdecol();
        
        $diasem1 = $diasem['seg'];
        $diasem2 = $diasem['ter'];
        $diasem3 = $diasem['qua'];
        $diasem4 = $diasem['qui'];
        $diasem5 = $diasem['sex'];
        $diasem6 = $diasem['sab'];
        $diasem7 = $diasem['dom'];
        
        if ($contador == Null) {
            $comando = "INSERT INTO tab_mensais_base (sis,serv,regra,procedimento,descricao,contador,complem,Periodicidade,corfs,spool,DiaSem1,DiaSem2,DiaSem3,DiaSem4,DiaSem5,DiaSem6,DiaSem7, tipofs,QtdeCol)
                        VALUES ('$sis','$serv','$regra','$procedimento','$descricao','$contador','$complem','$Periodicidade','$corfs','$spool','$diasem1','$diasem2','$diasem3','$diasem4','$diasem5','$diasem6','$diasem7','$tipofs','$QtdeCol')";
        } else {
            $comando = "UPDATE tab_mensais_base
                        SET sis = '$sis',serv='$serv',regra='$regra',procedimento='$procedimento',descricao='$descricao',complem='$complem',Periodicidade='$Periodicidade',corfs='$corfs',spool='$spool',DiaSem1='$diasem1',DiaSem2='$diasem2',DiaSem3='$diasem3',DiaSem4='$diasem4',DiaSem5='$diasem5',DiaSem6='$diasem6',DiaSem7='$diasem7',tipofs='$tipofs',QtdeCol='$QtdeCol'
                        WHERE contador = $contador";
        }
        $this->con->exec($comando);
    }

    public function excluir($contador) {
        $comando = "DELETE FROM tab_mensais_base WHERE contador = $contador";
        $this->con->exec($comando);
    }

    
//monta um array com os dias da semana
    protected function montaSemana($diasem1, $diasem2, $diasem3, $diasem4, $diasem5, $diasem6, $diasem7){
       $semana = array('seg' => $diasem1, 'ter' => $diasem2, 'qua' => $diasem3, 'qui' => $diasem4, 'sex' => $diasem5, 'sab' => $diasem6, 'dom' => $diasem7);
       return $semana;
    }
}
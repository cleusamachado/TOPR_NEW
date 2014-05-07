<?php
include_once "../../BD/conexaoBD.php";
include_once "../../classes/Menu/regras.php";

class regrasDAO {
   
    private $con;

    public function __construct() {
        $this->con = ConexaoBD::obterConexao();
    }

    public function obterRegra($tipo) { //qdo quer chamar somente um item
        $tipo = null;
        $comando = "SELECT tipo, descricao
                    FROM regras
                    WHERE tipo = $tipo";
        foreach ($this->con->query($comando) as $linha) {
            $tipos = new Regra($linha['tipo'], $linha['descricao']);
            $tipos->setTipo($tipo);
        }
        return $tipo;
    }

    public function obterRegras() { //chama todos os itens
        $regra = array();
        $comando = "SELECT tipo, descricao
                    FROM regras";
        foreach ($this->con->query($comando) as $linha) {
            $regra = new Regras($linha['tipo'], $linha['descricao']);
            $regra->setTipo($linha['tipo']);
            $regras[] = $regra;
        }
        return $regras;
    }

    public function salvar($regra) {
        $tipo = $regra->getTipo();
        $descricao = $regra->getDescricao();
        if ($tipo !== Null) {
        $comando = "INSERT INTO regras(tipo,descricao)
                        VALUES ('$tipo','$descricao')";
        } else {
        $comando = "UPDATE regras
                    SET tipo = '$tipo', descricao = '$descricao'
                    WHERE tipo = $tipo";
        }
        $this->con->exec($comando);
    }

    public function excluir($tipo) {
        $comando = "DELETE FROM regras WHERE tipo = $tipo";
        $this->con->exec($comando);
    }
    
}
?>

<?php
class ConexaoDB {
    private static $instancia = null;
    private $conexao;
    private function __construct() {
        $this->conexao = "Conectado ao banco de dados.";
    }

    public static function getInstancia() {
        if (self::$instancia === null) {
            self::$instancia = new ConexaoDB();
        }
        return self::$instancia;
    }

    public function getConexao() {
        return $this->conexao;
    }
}

#$conexao1 = ConexaoDB::getInstancia();
#echo $conexao1->getConexao();
#$conexao2 = ConexaoDB::getInstancia();
#echo "\nConexão 1 e Conexão 2 são iguais? " . ($conexao1 === $conexao2 ? 'Sim' : 'Não'); 
?>

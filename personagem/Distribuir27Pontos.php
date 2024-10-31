<?php

class Distribuir27Pontos {
    private $pontosDisponiveis = 27;
    
    private $atributos =array(
        "Força" => 8,
        "Destreza" => 8,
        "Constituição" => 8,
        "Inteligência" => 8,
        "Sabedoria" => 8,
        "Carisma" => 8
    );

    private $custoAtributo = array(
        8 => 0,
        9 => 1,
        10 => 2,
        11 => 3,
        12 => 4,
        13 => 5,
        14 => 7,
        15 => 9
    );
    
    public function setAtributo($atributo, $valor){
        if (array_key_exists($atributo,$this->atributos)){
            if ($valor >= 8 && $valor <= 15){
                if ($this->custoAtributo[$valor] <= $this->pontosDisponiveis){
                    $this->pontosDisponiveis = $this->pontosDisponiveis - $this->custoAtributo[$valor];
                    $this->atributos[$atributo] = $valor;
                    return true;
                }
            }   
        }
        return false;       
    }
    
    public function getPontosDisponiveis(){
        return $this->pontosDisponiveis;
    }

    public function getAtributos(){
        return $this->atributos;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $distribuirPontos = new Distribuir27Pontos();
    $atributos = array_keys($distribuirPontos->getAtributos());
    $erros = FALSE;
    foreach ($atributos as $atributo) {
        if (isset($_POST[$atributo])) {
            $valor = $_POST[$atributo];
            $success = $distribuirPontos->setAtributo($atributo, $valor);
            
            if (!$success) {
                #echo "<br> Valor inválido para $atributo: $valor<br>";
                $erros = TRUE;
            } #else
               # echo "<br> $atributo ok para valor  $valor <br>";
        }
    }
    if (!$erros){
        $_SESSION['distribuirPontos'] = serialize($distribuirPontos);
        header("Location: sucesso.php");
        exit();
    }
}
?>
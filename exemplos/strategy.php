<?php
// Interface para o comportamento de voar
interface VoarComportamento {
    public function voar();
}

// Interface para o comportamento de grasnar
interface GrasnarComportamento {
    public function grasnar();
}

// Comportamento de voar com asas
class VoarComAsas implements VoarComportamento {
    public function voar() {
        echo "Eu estou voando com asas!\n";
    }
}

// Comportamento para não voar
class NaoVoar implements VoarComportamento {
    public function voar() {
        echo "Eu não posso voar.\n";
    }
}

// Comportamento de grasnar
class Grasnar implements GrasnarComportamento {
    public function grasnar() {
        echo "Quack! Quack!\n";
    }
}

// Comportamento para patos que não grasnam
class Mudo implements GrasnarComportamento {
    public function grasnar() {
        echo "Eu não posso fazer som.\n";
    }
}

class Pato {
    protected $voarComportamento;
    protected $grasnarComportamento;

    public function __construct(VoarComportamento $voar, GrasnarComportamento $grasnar) {
        $this->voarComportamento = $voar;
        $this->grasnarComportamento = $grasnar;
    }

    public function realizarVoo() {
        $this->voarComportamento->voar();
    }

    public function realizarGrasno() {
        $this->grasnarComportamento->grasnar();
    }

    public function setVoarComportamento(VoarComportamento $vc) {
        $this->voarComportamento = $vc;
    }

    public function setGrasnarComportamento(GrasnarComportamento $gc) {
        $this->grasnarComportamento = $gc;
    }

}

class PatoSelvagem extends Pato {
    public function __construct() {
        parent::__construct(new VoarComAsas(), new Grasnar());
    }

    public function exibir() {
        echo "Eu sou um pato selvagem.\n";
    }
}

class PatoBorracha extends Pato {
    public function __construct() {
        parent::__construct(new NaoVoar(), new Mudo());
    }

    public function exibir() {
        echo "Eu sou um pato de borracha.\n";
    }
}

// Testando o padrão Strategy
$patoSelvagem = new PatoSelvagem();
$patoSelvagem->exibir();
$patoSelvagem->realizarVoo();
$patoSelvagem->realizarGrasno();

echo "\n";

$patoBorracha = new PatoBorracha();
$patoBorracha->exibir();
$patoBorracha->realizarVoo();  // Não pode voar
$patoBorracha->realizarGrasno();  // Não pode grasnar

// Mudando o comportamento do pato de borracha
$patoBorracha->setVoarComportamento(new VoarComAsas());
$patoBorracha->setGrasnarComportamento(new Grasnar());

echo "\nDepois de mudar o comportamento:\n";
$patoBorracha->realizarVoo();  // Agora pode voar
$patoBorracha->realizarGrasno();  // Agora pode grasnar

?>
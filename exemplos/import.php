<?php
require_once ".\\personagem\\personagem.php";
require_once ".\\personagem\\Distribuir27Pontos.php";

$distribuirPontos = new Distribuir27Pontos();
echo($distribuirPontos->getPontosDisponiveis());
echo("\n");
$distribuirPontos->setAtributo("Força", 15);
$distribuirPontos->setAtributo("Destreza", 15);
$distribuirPontos->setAtributo("Constituição", 15);
echo($distribuirPontos->getPontosDisponiveis());

$atributosIniciais = $distribuirPontos->getAtributos();
echo("\n");
echo($atributosIniciais["Destreza"]);




echo("\n");
$personagem = new Personagem();
#echo $personagem->atributos["Destreza"];

$personagem->atributos["Destreza"] = 14;
echo"\n";
echo $personagem->atributos["Destreza"];

?>
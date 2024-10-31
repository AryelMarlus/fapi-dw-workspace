<?php
session_start();
include './personagem/Distribuir27Pontos.php';

if (isset($_SESSION['distribuirPontos'])) {
    $distribuirPontos = unserialize($_SESSION['distribuirPontos']);
    $atributos = $distribuirPontos->getAtributos();

    echo "Força: " . $atributos["Força"] . "<br>";
    echo "Destreza: " . $atributos["Destreza"] . "<br>";
    echo "Constituição: " . $atributos["Constituição"] . "<br>";
    echo "Inteligência: " . $atributos["Inteligência"] . "<br>";
    echo "Sabedoria: " . $atributos["Sabedoria"] . "<br>";
    echo "Carisma: " . $atributos["Carisma"] . "<br>";
} else {
    echo "Nenhum atributo encontrado na sessão.";
}
?>


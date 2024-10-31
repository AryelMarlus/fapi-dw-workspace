<?php
session_start();    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include './personagem/Distribuir27Pontos.php';
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criação de Personagem FAPI</title>
    <link href="estilos/style.css" rel="stylesheet" />
</head>
<body>

    <form action="index.php" method="POST">
        <label>Criação de Personagem</>
        <br><br>
        <label for="Força">Força:</label>
        <input type="number" id="Força" name="Força" required>
        <br><br>
        <label for="Destreza">Destreza:</label>
        <input type="number" id="Destreza" name="Destreza" required>
        <br><br>
        <label for="Constituição">Constituição:</label>
        <input type="number" id="Constituição" name="Constituição" required>
        <br><br>
        <label for="Inteligência">Inteligência:</label>
        <input type="number" id="Inteligência" name="Inteligência" required>
        <br><br>
        <label for="Sabedoria">Sabedoria:</label>
        <input type="number" id="Sabedoria" name="Sabedoria" required>
        <br><br>
        <label for="Carisma">Carisma:</label>
        <input type="number" id="Carisma" name="Carisma" required>
        <br><br>
        <input type="submit" value="Criar Personagem">
    </form>

</body>
</html>

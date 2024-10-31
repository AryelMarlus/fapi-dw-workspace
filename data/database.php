<?php
$servidor = "localhost";
$usuario = "root";
$senha = "123";
$bancoDeDados = "fapi-dw";

try {
   
    $conn = new PDO("mysql:host=$servidor;dbname=$bancoDeDados", $usuario, $senha);   
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conectado ao banco de dados";

} catch(PDOException $e) {
    echo "Erro de conexão: " . $e->getMessage();
}
$conn = null;
?>
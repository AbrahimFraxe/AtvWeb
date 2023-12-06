<?php
// Define as variáveis com as informações de conexão ao banco de dados
$servidor = "localhost";
$usuario = "rodrigoviana";
$senha = "123";
$banco = "atv";

try {
     // Tenta criar uma nova conexão PDO ao banco de dados
    $conn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
    // Define o modo de erro do PDO para lançar exceções
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


} catch (PDOException $e) {
    // Se uma exceção for lançada (um erro ocorrer), imprime a mensagem de erro
      echo "Erro ao conectar ao banco: " . $e->getMessage();
}




?>
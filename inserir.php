<?php

$servidor = "localhost";
$usuario = "rodrigoviana";
$senha = "123";
$banco = "atv";

try {
    $conn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO `usuarios` (`nome`, `sobrenome`, `email`)
    VALUES ('Rodrigo', 'Viana','rodrigoviana@gmail.com'),
           ('Abrahim', 'Neto','abrahimneto@gmail.com');";

        $conn->exec($sql);
        echo "Comando Executado Com Sucesso!!";

} catch (PDOException $e) {
      echo "Erro ao conectar ao banco: " . $e->getMessage();
}




?>
<?php
    $host = "localhost";
    $username = "root";
    $password = "admin";
    $dbname = "books";

    // Cria a conexão com o banco de dados
    $conn = mysqli_connect($host, $username, $password, $dbname);

    // Verifica se a conexão foi estabelecida com sucesso
    if (!$conn) {
        die("Conexão falhou: " . mysqli_connect_error());
    }
?>
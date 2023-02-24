<<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    add_book();
}

function add_book(){

    $title = $_POST["title"];
    $author = $_POST["author"];
    $description = $_POST["description"];
    $price = $_POST["price"];

    $sql = "INSERT INTO books (title, author, description, price)
    VALUES ('$title', '$author', '$description', '$price')";

    if ($conn->query($sql) === TRUE) {
        echo "Novo livro Adicionado";
    } else {
        echo "Erro ao Inserir: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
    }
?>
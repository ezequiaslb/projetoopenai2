<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Cadastro</title>
    <link rel="inserir" href="estilo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>
<body>
        <?php

      include("conecta.php");

      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      
        $title = $_POST['title'];
        $author = $_POST['author'];
        $publisher = $_POST['publisher'];
        $year = $_POST['year'];

        
        $sql = "INSERT INTO livro (nome, autor, editora, ano_lancamento)
                VALUES ('$title', '$author', '$publisher', '$year')";
        if (mysqli_query($conn, $sql)) {
            echo "Novo livro Adicionado";
           
        } else {
            echo "Cadastro falhou. Código do Erro: " . $sql . "<br>" . mysqli_error($conn);
        }
      }
      mysqli_close($conn);
      
      ?>
      <br>
    <div class="btn-group" role="group" aria-label="...">

      <a href="listar.html"><button type="button" class="btn btn-default">listar Itens</button></a>
      <a href="index.html"><button type="button" class="btn btn-default">Cadastrar</button></a>
      
    </div>
    
</body>
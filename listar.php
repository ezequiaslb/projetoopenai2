<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Livros</title>
    <style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        
    } 
    h1{
        color: #E73636; 
    }

    </style>
</head>
<body>
     <table>
    <tr>
      <th>Título</th>
      <th>Autor</th>
      <th>Editora</th>
      <th>Ano de Lançamento</th>
      <th>Ações</th>
    </tr>
    <button></button>
    <?php

    include("conecta.php");
    

    $sql = "SELECT id, nome, autor, editora, ano_lancamento FROM livro";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output de cada linha

        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["nome"]. "</td><td>" . $row["autor"] . "</td><td>"
            . $row["editora"]. "</td><td>" . $row["ano_lancamento"] . "</td>" . "<td><a href='editar.php?id=" . $row['id'] . "'>Editar</a> | 
            <a href='delete.php?id=" . $row['id'] . "'>Excluir</a></tr>";     
        
             
        }
        echo "</table>";
    } else {
        echo "<h1>Nenhum livro cadastrado!</h1>";
    }

    $conn->close();
    ?>
  </table>
</body>
</html>
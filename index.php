<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Título</th>
                <th>Autor</th>
                <th>Descrição</th>
                <th>Preço</th>
            </tr>
        </thead>
        <tbody>
            <!-- Aqui você pode adicionar código PHP para exibir a lista de livros a partir do banco de dados -->
            <?php

            include("conecta.php");

                // Seleciona todos os livros na tabela "books"
                $sql = "SELECT * FROM books";
                $result = mysqli_query($conn, $sql);

                // Verifica se há livros na tabela
                if (mysqli_num_rows($result) > 0) {
                    // Exibe cada livro em uma linha na tabela
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row["title"] . "</td>";
                        echo "<td>" . $row["author"] . "</td>";
                        echo "<td>" . $row["description"] . "</td>";
                        echo "<td>" . $row["price"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>Não há livros na tabela</td></tr>";
                }
                // Fecha a conexão com o banco de dados
                mysqli_close($conn);
            ?>

        </tbody>
    </table>
    <form action="funcoes.php" method="post">
        <label for="title">Título:</label>
        <input type="text" id="title" name="title">

        <label for="author">Autor:</label>
        <input type="text" id="author" name="author">

        <label for="description">Descrição:</label>
        <textarea id="description" name="description"></textarea>

        <label for="price">Preço:</label>
        <input type="number" id="price" name="price">

        <input type="submit" value="Adicionar">
    </form>
    
</body>
</html>
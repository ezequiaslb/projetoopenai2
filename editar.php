<?php

include("conecta.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "SELECT * FROM livro WHERE id=$id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Livro</title>
</head>
<body>
    <form action="editar.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" value="<?php echo $row['nome']; ?>"><br><br>
        <label for="autor">Autor:</label>
        <input type="text" name="autor" value="<?php echo $row['autor']; ?>"><br><br>
        <label for="editora">Editora:</label>
        <input type="text" name="editora" value="<?php echo $row['editora']; ?>"><br><br>
        <label for="ano_lancamento">Ano de Lançamento:</label>
        <input type="text" name="ano_lancamento" value="<?php echo $row['ano_lancamento']; ?>"><br><br>
        <input type="submit" value="Atualizar">
    </form>
</body>
</html>
<?php
include 'biblioteca.db';

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nome = $_POST['nome'];
    $nacionalidade = $_POST['nacionalidade'];

    $sql = "INSERT INTO livros (nome, nacionalidade) VALUES ('$nome , '$nacionalidade')";

    if ($conn -> query($sql) === TRUE){
        echo "Novo autor criado com sucesso";
    } else {
        echo "Erro:". $sql . "<br>" . $conn -> error;
    }
    }
$conn -> close();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>livros</title>
</head>
<body>
    
</body>
</html>
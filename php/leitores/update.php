<?php
include 'biblioteca.db';
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $nome = $_POST['titulo'];
        $nacionalidade = $_POST['genero'];

         $sql = "UPDATE leitores SET nome ='$nome', telefone ='$telefone', email ='$email' WHERE id = $id";

        if($conn ->query($sql) === true){
            echo "Registro editado com sucesso.";
        }else{
            echo "Erro" . $sql . "<br>" . $conn->error;
        }

        $conn -> close();
        header("Location: read.php");
        exit();
    }

    $sql = "SELECT * FROM leitores WHERE id=$id";
    $result = $conn -> query($sql);
    $row = $result -> fetch_assoc();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>leitores</title>
</head>
<body>
    
</body>
</html>
<?php
    include 'biblioteca.db';
 
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $nome = $_POST['nome'];
        $nacionalidade = $_POST['nacionalidade'];

         $sql = "UPDATE times SET nome ='$nome', nacionalidade ='$nacionalidade' WHERE id = $id";

        if($conn ->query($sql) === true){
            echo "Registro editado com sucesso.";
        }else{
            echo "Erro" . $sql . "<br>" . $conn->error;
        }

        $conn -> close();
        header("Location: read.php");
        exit();
    }

    $sql = "SELECT * FROM times WHERE id=$id";
    $result = $conn -> query($sql);
    $row = $result -> fetch_assoc();

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>autores<</title>
</head>
<body>
    
</body>
</html>
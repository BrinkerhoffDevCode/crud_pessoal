<?php
include 'biblioteca.db';

$sql = "SELECT * FROM emprestimo";
$result = $conn -> query($sql);

if ($result -> num_rows > 0 ){
    while($row = $result -> fetch_assoc()){
        echo "id: " . $row["id"]. " - Titulo: " . $row["titulo"].  " - Genero: " . $row´["genero"]. "<br>";
    }else{
        echo "0 resultados";
    }
    $conn -> close();

}



?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>emprestimo</title>
</head>
<body>
    
</body>
</html>
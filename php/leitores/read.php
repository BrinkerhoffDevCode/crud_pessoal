<?php
include 'biblioteca.db';

$sql = "SELECT * FROM leitores";
$result = $conn -> query($sql);

if ($result -> num_rows > 0 ){
    while($row = $result -> fetch_assoc()){
        echo "id: " . $row["id"]. " - Nome: " . $row["nome"].  " - Telefone: " . $row´["telefone"]. "- Email: " . $row["email"] "<br>";
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
    <title>leitores</title>
</head>
<body>
    
</body>
</html>
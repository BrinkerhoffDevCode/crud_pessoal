<?php
    include 'biblioteca.db';

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $id = $_POST['id'];

        $sql = "DELETE FROM autores WHERE id = $id";
    }


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
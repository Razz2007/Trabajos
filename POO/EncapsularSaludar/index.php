<?php

include("./Libreria/saludo.php");

$saludar = new Saludo();

$saludar -> Setsaludar("Hola");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    echo $saludar-> Getsaludar();
    
    ?>
</body>
</html>
<?php

include('./libreria/Operaciones.php');
include('./libreria/numero.php');

$num1 = new Numero(10);
$num2 = new Numero(90);

$operaciones = new Operaciones($num1, $num2);
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
    echo "<p>Suma: ".$operaciones->sumar()."</p>";
    echo "<p>Resta: ".$operaciones->restar()."</p>";
    echo "<p>Multiplicacion: ".$operaciones->Multiplicar()."</p>";
    echo "<p>Division: ".$operaciones->dividir()."</p>";
    
    
    
    ?>
</body>
</html>
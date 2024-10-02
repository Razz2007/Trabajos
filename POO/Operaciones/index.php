<?php
include('./Libreria/Operacion.php');
$operaciones = new Operaciones();

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

echo " Suma " . $operaciones-> sumar(8,9) . "<br>";
echo " Resta " .$operaciones-> restar(60,9) . "<br>";
echo " Multiplicacion " .$operaciones-> multiplicar(50,9) . "<br>";
echo " division " .$operaciones-> dividir(8,10) . "<br>";
?>
</body>
</html>
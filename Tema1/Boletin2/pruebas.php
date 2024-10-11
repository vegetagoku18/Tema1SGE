<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<?php
    include ("funciones.php");
    ?>
</head>
<body>
    <?php
    echo "Ejercicio 2<br>";
    echo ContardorLetras("patata","a");
    echo "<br>";
    echo "Ejercicio 3<br>";
    echo ValidarCodigo("4patatasa");
    echo "<br>";
    echo ValidarCodigo("Ismaesmuytonto");
    echo "<br>";
    echo ValidarCodigo("Ismaeparvo");
    echo "<br>";
    echo "Ejercicio 4";
    echo "<br>";
    echo Pares();
    echo "Ejercicio 5";
    echo "<br>";
    MesesPorM();
    echo "Ejercicio 6";
    echo "<br>";
    NoAzul();
    echo "Ejercicio 7";
    echo "<br>";
    ListaAnimales();
    echo "<br>";
    echo "Ejercicio 8";
    echo "<br>";
    Notas();
    ?>
</body>
</html>
<?php
function Factorial($valor) {
    $contador = 1;
    $resultado = 1;
    do {
        $resultado = $resultado*$contador;
        $contador++;
    } while ($contador <= $valor);
    echo $resultado;
}
    Factorial(5);
?>
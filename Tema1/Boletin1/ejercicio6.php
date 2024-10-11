<?php
    function PrecioEntrada($edad) {
        if ($edad < 9 ||  $edad > 65) {
            $precio = 0;
        } else {
            if ($edad > 8 && $edad < 17) {
                $precio = 5;
            } else {
                if ($edad > 16 && $edad <26) {
                    $precio = 8;
                } else {
                    if ($edad > 25 && $edad < 56) {
                        $precio = 10;
                    } else {
                        if ($edad > 55 && $edad < 66) {
                            $precio = 5;
                        }
                    }
                }
            }
        }
        echo "El precio de la entrada es: ", $precio, "€";
    }
    PrecioEntrada(2);
    echo "<br>";
    PrecioEntrada(12);
    echo "<br>";
    PrecioEntrada(22);
    echo "<br>";
    PrecioEntrada(42);
    echo "<br>";
    PrecioEntrada(62);
    echo "<br>";
    PrecioEntrada(72);
?>
<?php
    function DineroBingo($edad) {
        if ($edad > 74 && $edad < 81) {
            echo "El dinero ganado es: ", $edad*0.05, "€ <br>";
        } else {
            echo "No tienes la edad para jugar <br>";
        }
    }
    DineroBingo(74);
    DineroBingo(75);
?>
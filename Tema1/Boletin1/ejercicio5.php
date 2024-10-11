<?php
    function comprobarMultiplo($num1, $num2) {
        if ($num1%$num2==0 || $num2%$num1==0) {
              echo "Los numeros ", $num1 , " y el " , $num2 , " son multiplos";
        } else {
            echo "Los numeros " , $num1 , " y el " , $num2 , " no son multiplos";
        }
    }

    comprobarMultiplo(4,6);
    echo "<br>";
    comprobarMultiplo(8,16);
?>
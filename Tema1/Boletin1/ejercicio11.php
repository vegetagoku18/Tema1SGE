<?php
    function generaTabla ($filas, $columnas){
        echo "<table border='\1\'>";
            for ($i=0; $i < $filas; $i++) { 
                echo "<td><strong>$i</strong></td>";
            }
            for ($i=0; $i<$filas; $i++){
                echo "<tr>";
            for($j=0; $j<$columnas; $j++){
                if ($i != 0) {
                    if ($j == 0) {
                        echo "<td><strong>" , $i , "</strong></td>";
                    }else {   
                        echo"<td>" , $i * $j , "</td>";
                    }
                } 
        }
            echo "</tr>";
        }
            echo "</table>";
        } 
       generaTabla(11,11);
?>
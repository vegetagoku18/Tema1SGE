<?php 
//Ejercicio 2
function ContardorLetras($palabra, $letra) {
    $contador=0;
    
    for ($i=0; $i < strlen($palabra); $i++) {
       if ($palabra[$i]==$letra) {
            $contador++;
       }
    }
    return $contador;
}
//Ejercicio 3
function ValidarCodigo($codigo) {
    $valido=true;
    if (strlen($codigo) < 8 || strlen($codigo) > 12 || is_numeric($codigo[0])) {
        $valido = false;
        echo "falso";
    } else {
        echo "válido";
    }
}
//Ejercicio 4
function Pares() {
    $lospares = array(2,4,6,8,10,12,14,16,18,20);
    for ($i=0; $i < count($lospares); $i++) { 
        echo $lospares[$i];
        echo "<br>";
    }
}
//Ejercicio 5
function MesesPorM() {
    $meses = array('enero','febrero','marzo','abril', 'mayo','junio', 'julio','agosto',
    'septiembre', 'octubre', 'noviemnbre', 'diciembre');
    $contador=0;
    $ismaguapo= array();
    for ($i=0; $i < count($meses); $i++) { 
        if (substr($meses[$i],0,1)=="m") {
            $ismaguapo[]=$meses[$i];
            $contador++;
        }
    }
        for ($i=0; $i < count($ismaguapo); $i++) { 
        echo $ismaguapo[$i],"<br>";
    }
}
//Ejercicio 6
function NoAzul() {
    $colores = array('rojo', 'verde', 'amarillo', 'azul','rosa');
    unset($colores[3]);
    //for ($i=0; $i < count($colores); $i++) { 
    //    echo $colores[$i];
    //    echo "<br>";
    //}
}
//Ejercicio 7
function ListaAnimales() {
    $zoo = array(array("Perro","León","Cocodrilo"),array("Gato","Pantera","Caimán"));
    echo $zoo[1][1];
}
//Ejercicio 8
function Notas() {
    $nombres = array("Carlos Álvarez", "Laura López", "Rosa Márquez", "Jorge Tiras");
    $materias = array("Lengua", "Historia", "Inglés", "Matemáticas");
    echo "<table border='\1\'>";
        for ($i=-1; $i < count($materias); $i++) { 
            if ($i==-1) {
                echo "<td></td>";
            } else {
                echo "<td><strong>$materias[$i]</strong></td>";
            }
        }
        for ($i=0; $i<count($nombres); $i++){
            echo "<tr>";
            for($j=0; $j<count($materias)+1; $j++){
                if ($j!=0) {
                    echo"<td>", rand(0,10),"</td>";
                } else {
                    echo "<td><strong>$nombres[$i]</strong></td>";
                }
            }
            echo "</tr>";
        }
        echo "</table>";
}
?>
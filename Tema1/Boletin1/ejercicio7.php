<?php
    function Mascotas($mascota) {
        switch($mascota) {
            case 'Huron':
                $precio = 1;
                break;
            case 'Gato':
                $precio = 1;
                break;
            case 'Perro':
                $precio = 1.5;
                break;
            case 'Loro':
                $precio = 2;
                break;
            default:
                $precio = "No permitido";
        }
        echo "El precio es: ", $precio,"€","<br>";
    }

    Mascotas("Huron");
    Mascotas("Gato");
    Mascotas("Perro");
    Mascotas("Loro");
    Mascotas("Anton");
?>
<?php
    function areaCirculo($radio) {
        $area = $radio * $radio * pi();
        return $area;
    }
    echo areaCirculo(3);
?>
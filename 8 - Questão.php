<?php
    $vtemp = (int)readline("Digite a temperatura: ");

    if ($vtemp <= 18) {
        echo"$vtemp Graus - Clima Frio";
    } elseif ($vtemp <= 23) {
        echo"$vtemp Graus - Clima Agradável";
    } elseif ($vtemp <= 35) {
        echo"$vtemp Graus - Clima Quente";
    } elseif ($vtemp > 35) {
        echo"$vtemp Graus - Clima Muito Quente";
    }

?>
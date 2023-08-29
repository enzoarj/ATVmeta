<?php
    $num = (int)readline("Insira um numero inteiro para descobrir se ele é múltiplo de 5: ");
    $result = $num % 5;
    if ($result == 0) {
        echo "$num é múltiplo de 5.";
    } elseif ($result == 5) {
        echo "$num é multiplo de 5.";
    } else {
        echo "$num NÃO é multiplo de 5.";
    }
?>
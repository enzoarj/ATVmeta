<?php
    $arr = explode(' ', readline("Escreva uma sequencia de 20 numeros separados por ' ' espaços (ex: 1 2 3 4 5 6 7 8...) para verificar qual o menor: "));
    echo "O menor número é: ",(min($arr));
?>